<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentSuccess;
use App\Models\User;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $orderId = Session::get('order_id');
        $bookingId = Session::get('booking_id');
        $paymentMethod = $request->input('payment_method');
        $total_price = Session::get('total_price');

        // Lưu thông tin thanh toán vào bảng tbl_payment trước khi chuyển hướng thanh toán
        $paymentData = [
            'order_id' => $orderId,
            'booking_id' => $bookingId,
            'payment_method' => $paymentMethod,
            'payment_status' => 'Pending', // Trạng thái ban đầu
            'payment_total' => $total_price,
        ];
        $paymentId = DB::table('tbl_payment')->insertGetId($paymentData);

        Session::put('payment_id', $paymentId);

        if ($paymentMethod == 'momo') {
            return $this->payWithMoMo($total_price);
        } elseif ($paymentMethod == 'domestic_card') {
            return $this->payWithDomesticCard($total_price);
        }

        return redirect()->back()->with('error', 'Payment method not supported.');
    }

    private function payWithMoMo($total_price)
    {
        $endpoint = 'https://test-payment.momo.vn/v2/gateway/api/create';
        $partnerCode = 'MOMO';
        $accessKey = 'F8BBA842ECF85';
        $secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz';
        $orderId = time() . "";
        $orderInfo = 'Payment via MoMo';
        $amount = $total_price; // Số tiền cần thanh toán
        $redirectUrl = route('payment.callback');
        $ipnUrl = route('payment.callback');
        $extraData = "";

        $requestId = time() . "";
        $requestType = "captureWallet";
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $expiryTime = date('YmdHis', strtotime('+10 minutes'));
        $data = [
            'partnerCode' => $partnerCode,
            'partnerName' => "MoMo",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'en',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
            'expiryDate' => $expiryTime
        ];

        $client = new Client();
        $response = $client->post($endpoint, ['json' => $data]);
        $body = json_decode($response->getBody(), true);

        if ($body['resultCode'] == 0) {
            return redirect($body['payUrl']);
        } else {
            return redirect()->back()->with('error', 'Unable to process payment with MoMo.');
        }
    }

    private function payWithDomesticCard($total_price)
    {
        $endpoint = 'https://test-payment.momo.vn/v2/gateway/api/create';
        $partnerCode = 'MOMO';
        $accessKey = 'F8BBA842ECF85';
        $secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz';
        $orderId = time() . "";
        $orderInfo = 'Payment via Domestic Card';
        $amount = $total_price; // Số tiền cần thanh toán
        $redirectUrl = route('payment.callback');
        $ipnUrl = route('payment.callback');
        $extraData = "";

        $requestId = time() . "";
        $requestType = "payWithATM";
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $expiryTime = date('YmdHis', strtotime('+10 minutes'));
        $data = [
            'partnerCode' => $partnerCode,
            'partnerName' => "MoMo",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'en',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
            'expiryDate' => $expiryTime
        ];

        $client = new Client();
        $response = $client->post($endpoint, ['json' => $data]);
        $body = json_decode($response->getBody(), true);

        if ($body['resultCode'] == 0) {
            return redirect($body['payUrl']);
        } else {
            return redirect()->back()->with('error', 'Unable to process payment with MoMo.');
        }
    }

    public function handleCallback(Request $request)
    {
        $data = $request->all();
        $signature = $request->input('signature');

        $rawHash = "accessKey=" . config('momo.accessKey') .
                   "&amount=" . $request->input('amount') .
                   "&extraData=" . $request->input('extraData') .
                   "&message=" . $request->input('message') .
                   "&orderId=" . $request->input('orderId') .
                   "&orderInfo=" . $request->input('orderInfo') .
                   "&orderType=" . $request->input('orderType') .
                   "&partnerCode=" . $request->input('partnerCode') .
                   "&payType=" . $request->input('payType') .
                   "&requestId=" . $request->input('requestId') .
                   "&responseTime=" . $request->input('responseTime') .
                   "&resultCode=" . $request->input('resultCode') .
                   "&transId=" . $request->input('transId');

        $secretKey = config('momo.secretKey');
        $expectedSignature = hash_hmac('sha256', $rawHash, $secretKey);

        if ($signature === $expectedSignature) {
            $paymentId = Session::get('payment_id');
            $userId = Session::get('user_id'); // Assuming you have user_id stored in session

            if (!$userId) {
                return redirect()->route('home')->with('error', 'User ID not found in session.');
            }

            // Truy xuất thông tin người dùng từ cơ sở dữ liệu
            $user = DB::table('tbl_user')->where('user_id', $userId)->first();

            if (!$user) {
                return redirect()->route('home')->with('error', 'User not found.');
            }

            $orderDetails = "TICKET ID: " . $request->input('orderId') . ", Amount: " . $request->input('amount'); // Customize as needed

            if ($request->input('resultCode') == 0) {
                // Thanh toán thành công
                DB::table('tbl_payment')->where('payment_id', $paymentId)->update([
                    'payment_status' => 'Success'
                ]);
                // Gửi email xác nhận
                $bookingId = Session::get('booking_id');
                DB::table('tbl_booking')->where('booking_id', $bookingId)->update([
                    'ticketbooked_id' => $request->input('orderId')
                ]);
                Mail::to($user->user_email)->send(new PaymentSuccess($user, $orderDetails));

                return redirect()->route('ticket')->with('success', 'Payment successful.');
            } else {
                // Thanh toán thất bại
                DB::table('tbl_payment')->where('payment_id', $paymentId)->update([
                    'payment_status' => 'Failed'
                ]);
                return redirect()->route('home')->with('error', 'Payment failed: ' . $request->input('message'));
            }
        } else {
            // Chữ ký không hợp lệ
            return redirect()->route('home')->with('error', 'Invalid signature.');
        }
    }
}
