@extends('admin_layout')
@section('admin_content')

<div class="adm__dashboard col l-9 m-4 c-6">
    <div class="adm__dashboard-up">
        <h1>General Statistics</h1>

        <div class="adm__dashboard-up--stats">
            <div class="adm__dashboard-up--stat">
                <div class="a"></div>
                <div>
                    <p>Movies Added</p>
                    <p id="">0</p>
                </div>
            </div>

            <div class="adm__dashboard-up--stat">
                <div class="a"></div>
                <div>
                    <p>Customer Count</p>
                    <p id="">0</p>
                </div>
            </div>

            <div class="adm__dashboard-up--stat">
                <div class="a"></div>
                <div>
                    <p>Revenue</p>
                    <p id="">0</p>
                </div>
            </div>
        </div>
    </div>

    <div class="adm__dashboard-down">

        <h1>Customer's Information</h1>

        <div class="adm__dashboard-down--container">
            <table>
                <tr>
                    <th>Username</th>
                    <th>ID</th>
                    <th>Phone Number</th>
                    <th>E-mail</th>
                    <th></th>
                </tr>

                <tr>
                    <th>
                        <p id="">Hoàng Khánh</p>
                    </th>
                    <th>
                        <p id="">109</p>
                    </th>
                    <th>
                        <p id="">0922520652</p>
                    </th>
                    <th>
                        <p id="">22520652@gm.uit.edu.vn</p>
                    </th>
                    <th>...</th>

                </tr>

                <tr>
                    <th>
                        <p id="">Vân Khánh</p>
                    </th>
                    <th>
                        <p id="">110</p>
                    </th>
                    <th>
                        <p id="">0922520647</p>
                    </th>
                    <th>
                        <p id="">22520647@gm.uit.edu.vn</p>
                    </th>
                    <th>...</th>

                </tr>

                <tr>
                    <th>
                        <p id="">Khánh Linh</p>
                    </th>
                    <th>
                        <p id="">111</p>
                    </th>
                    <th>
                        <p id="">0922520770</p>
                    </th>
                    <th>
                        <p id="">22520770@gm.uit.edu.vn</p>
                    </th>
                    <th>...</th>

                </tr>

                <tr>
                    <th>
                        <p id="">Tuấn Kiệt</p>
                    </th>
                    <th>
                        <p id="">112</p>
                    </th>
                    <th>
                        <p id="">0922520726</p>
                    </th>
                    <th>
                        <p id="">22520726@gm.uit.edu.vn</p>
                    </th>
                    <th>...</th>

                </tr>

                <tr>
                    <th>
                        <p id="">Nguyễn Thanh Lâm</p>
                    </th>
                    <th>
                        <p id="">113</p>
                    </th>
                    <th>
                        <p id="">0922520648</p>
                    </th>
                    <th>
                        <p id="">22520648@gm.uit.edu.vn</p>
                    </th>
                    <th>...</th>

                </tr>

                <tr>
                    <th>
                        <p id="">Kỳ Lâm</p>
                    </th>
                    <th>
                        <p id="">114</p>
                    </th>
                    <th>
                        <p id="">0922520749</p>
                    </th>
                    <th>
                        <p id="">22520749@gm.uit.edu.vn</p>
                    </th>
                    <th>...</th>

                </tr>
            </table>

            <div class="adm__dashboard-down--pagination">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/>
                </svg>

                <ul class="adm__dashboard-down--pagination---ul">
                    <li class="adm__dashboard-down--pagination---li active">
                        <a href="" class="adm__dashboard-down--pagination---a">1</a>
                    </li>
                    <li class="adm__dashboard-down--pagination---li">
                        <a href="" class="adm__dashboard-down--pagination---a">2</a>
                    </li>
                    <li class="adm__dashboard-down--pagination---li">
                        <a href="" class="adm__dashboard-down--pagination---a">3</a>
                    </li>
                    <li class="adm__dashboard-down--pagination---li">
                        <a href="" class="adm__dashboard-down--pagination---a">4</a>
                    </li>
                </ul>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

@endsection
