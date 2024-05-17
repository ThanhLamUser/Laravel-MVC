@extends('admin_layout')
@section('admin_content')

<div class="adm__add-movie col l-9 m-4 c-6">
    <h1>ADD SEAT</h1>

    <div class="adm__add-movie--container">
        <div class="adm__add-movie--container---movie---details">
            <h1>SEAT DETAILS</h1>
            <form role="form" id="form1" action="{{ URL::to('/save-seat-list') }}" method="post" enctype="multipart/form-data" onsubmit="hideSelectedOption()">
                {{ csrf_field() }}
                <div>
                    <div>
                        <div style="display:none">
                            <p>Room</p>
                            <input type="text" id="seat_room" name="seat_room" readonly>
                        </div>
                        <div>
                            <p>Showtime</p>
                            <select name="seat_showtime" id="seat_showtime" class="form-control input-sm m-bot15" onchange="updateRoomName()">
                                <option value="" data-room-id="" data-url="">Select Showtime</option>
                                @foreach($seat_join_showtime as $key => $showtime)
                                @if (!in_array($showtime->showtime_id, $disabled_showtimes))
                                <option value="{{ $showtime->showtime_id }}" data-room-id="{{ $showtime->room_id }}">
                                    {{ $showtime->showtime_date }}-{{ $showtime->showtime_timeslot }} {{ $showtime->room_name }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="display:none">
                        <div>
                            <p>Type</p>
                            <select name="seat_type" id="rating">
                                <option value="norm">Regular Seat</option>
                                <option value="vip">VIP Seat</option>
                                <option value="double">Double Seat (2 People)</option>
                            </select>
                        </div>
                        <div>
                            <p>Seats (one per line)</p>
                            <textarea name="seat_names" rows="4" placeholder="Insert seat names, one per line...">A1
                                A2
                                A3
                                A4
                                A5
                                A6
                                A7
                                A8
                                A9
                                A10
                                A11
                                A12
                                A13
                                A14
                                A15
                                A16
                                A17
                                A18
B1
B2
B3
B4
B5
B6
B7
B8
B9
B10
B11
B12
B13
B14
B15
B16
B17
B18
B19
B20
C1
C2
C3
C4
C5
C6
C7
C8
C9
C10
C11
C12
C13
C14
C15
C16
C17
C18
C19
C20
C21
C22
D1
D2
D3
D4
D5
D6
D7
D8
D9
D10
D11
D12
D13
D14
D15
D16
D17
D18
D19
D20
D21
D22
E1
E2
E3
E4
E5
E6
E7
E8
E9
E10
E11
E12
E13
E14
E15
E16
E17
E18
E19
E20
E21
E22
E23
E24
F1
F2
F3
F4
F5
F6
F7
F8
F9
F10
F11
F12
F13
F14
F15
F16
F17
F18
F19
F20
F21
F22
F23
F24
G1
G2
G3
G4
G5
G6
G7
G8
G9
G10
G11
G12
G13
G14
G15
G16
G17
G18
G19
G20
G21
G22
G23
G24
H1
H2
H3
H4
H5
H6
H7
H8
H9
H10
H11
H12
H13
H14
H15
H16
H17
H18
H19
H20
H21
H22
H23
H24
I1
I2
I3
I4
I5
I6
I7
I8
I9
I10
I11
I12
I13
I14
I15
I16
I17
I18
I19
I20
I21
I22
I23
I24
K1
K2
K3
K4
K5
K6
K7
K8
K9
K10
K11
K12
K13
K14
K15
K16
K17
K18
K19
K20
K21
K22
K23
K24
L1
L2
L3
L4
L5
L6
L7
L8
L9
</textarea>
                        </div>
                    </div>
                    <div style="display:none">
                        <div>
                            <p>Status</p>
                            <select name="seat_status">
                                <option value="empty">Empty</option>
                                <option value="selecting">Selecting</option>
                                <option value="selected">Selected</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="adm__add-movie--container">
                    <div class="adm__add-movie--container---save---btn">
                        <div>
                            <input type="submit" name="add_seat_list" id="submit-btn" value="SAVE">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
