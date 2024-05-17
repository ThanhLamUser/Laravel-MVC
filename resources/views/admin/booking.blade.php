@extends('admin_layout')
@section('admin_content')
<div class="adm__bookings col l-9 m-4 c-6">
    <h1>BOOKINGS</h1>

    <div class="adm__bookings--container">
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Status</th>
                <th>Details</th>
            </tr>

            <tr>
                <th>647</th>
                <th>Vân Khánh</th>
                <th>647.000đ</th>
                <th>29/03/2024</th>
                <th class="completed">COMPLETED</th>
                <th>
                    <button id="adm__bookings--details--btn">VIEW DETAILS</button>
                </th>
            </tr>

            <tr>
                <th>652</th>
                <th>Hoàng Khánh</th>
                <th>652.000đ</th>
                <th>10/09/2024</th>
                <th class="incomplete">INCOMPLETE</th>
                <th>
                    <button id="adm__bookings--details--btn">VIEW DETAILS</button>
                </th>
            </tr>

            <tr>
                <th>647</th>
                <th>Vân Khánh</th>
                <th>647.000đ</th>
                <th>29/03/2024</th>
                <th class="completed">COMPLETED</th>
                <th>
                    <button id="adm__bookings--details--btn">VIEW DETAILS</button>
                </th>
            </tr>

            <tr>
                <th>652</th>
                <th>Hoàng Khánh</th>
                <th>652.000đ</th>
                <th>10/09/2024</th>
                <th class="incomplete">INCOMPLETE</th>
                <th>
                    <button id="adm__bookings--details--btn">VIEW DETAILS</button>
                </th>
            </tr>

            <tr>
                <th>647</th>
                <th>Vân Khánh</th>
                <th>647.000đ</th>
                <th>29/03/2024</th>
                <th class="completed">COMPLETED</th>
                <th>
                    <button id="adm__bookings--details--btn">VIEW DETAILS</button>
                </th>
            </tr>

            <tr>
                <th>652</th>
                <th>Hoàng Khánh</th>
                <th>652.000đ</th>
                <th>10/09/2024</th>
                <th class="incomplete">INCOMPLETE</th>
                <th>
                    <button id="adm__bookings--details--btn">VIEW DETAILS</button>
                </th>
            </tr>
        </table>

        <div class="adm__bookings--pagination">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/>
            </svg>

            <ul class="adm__bookings--pagination---ul">
                <li class="adm__bookings--pagination---li active">
                    <a href="" class="adm__bookings--pagination---a">1</a>
                </li>
                <li class="adm__bookings--pagination---li">
                    <a href="" class="adm__bookings--pagination---a">2</a>
                </li>
                <li class="adm__bookings--pagination---li">
                    <a href="" class="adm__bookings--pagination---a">3</a>
                </li>
                <li class="adm__bookings--pagination---li">
                    <a href="" class="adm__bookings--pagination---a">4</a>
                </li>
            </ul>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
            </svg>
        </div>
    </div>
</div>

@endsection
