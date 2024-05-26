<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $paymentMethod = $request->input('payment_method');

        if ($paymentMethod == 'momo') {
            return $this->payWithMoMo();
        }

        // Xử lý các phương thức thanh toán khác ở đây
        return redirect()->back()->with('error', 'Payment method not supported.');
    }

    private function payWithMoMo()
    {
        $endpoint = 'https://test-payment.momo.vn/v2/gateway/api/create';
        $partnerCode = 'MOMO';
        $accessKey = 'F8BBA842ECF85';
        $secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz';
        $orderId = time() . "";
        $orderInfo = 'Payment via MoMo';
        $amount = '100000'; // Số tiền cần thanh toán
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

    public function handleCallback(Request $request)
    {
        $data = $request->all();
        $signature = $request->input('signature');

        // Tạo lại chữ ký để xác minh tính toàn vẹn của dữ liệu
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
            if ($request->input('resultCode') == 0) {
                // Thanh toán thành công
                // Xử lý logic sau khi thanh toán thành công, ví dụ: cập nhật trạng thái đơn hàng
                return redirect()->route('ticket')->with('success', 'Payment successful.');
            } else {
                // Thanh toán thất bại
                return redirect()->route('home')->with('error', 'Payment failed: ' . $request->input('message'));
            }
        } else {
            // Chữ ký không hợp lệ
            return redirect()->route('home')->with('error', 'Invalid signature.');
        }
    }
}
