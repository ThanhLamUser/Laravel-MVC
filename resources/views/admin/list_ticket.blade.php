@extends('admin_layout')
@section('admin_content')

    <div class="adm__all-movies col l-9 m-4 c-6">
        <h1>ALL TICKETS</h1>

        <div class="adm__all-movies--container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Delete</th>
                </tr>
                @foreach ($list_ticket as $key => $ticket_pro)
                <tr>
                    <th>{{ $ticket_pro->ticket_name }}</th>
                    <th>{{ $ticket_pro->ticket_type }}</th>
                    <th>{{ $ticket_pro->ticket_price}}</th>
                    <th>
                        <button onclick="confirmDelete('{{ URL::to('/delete-ticket/'.$ticket_pro->ticket_id) }}')" id="adm__all-ticket--del--btn">DELETE</button>
                    </th>
                </tr>
            @endforeach
            </table>

            <div class="adm__all-movies--pagination">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/>
                </svg>

                <ul class="adm__all-movies--pagination---ul">
                    <li class="adm__all-movies--pagination---li active">
                        <a href="" class="adm__all-movies--pagination---a">1</a>
                    </li>
                    <li class="adm__all-movies--pagination---li">
                        <a href="" class="adm__all-movies--pagination---a">2</a>
                    </li>
                    <li class="adm__all-movies--pagination---li">
                        <a href="" class="adm__all-movies--pagination---a">3</a>
                    </li>
                    <li class="adm__all-movies--pagination---li">
                        <a href="" class="adm__all-movies--pagination---a">4</a>
                    </li>
                </ul>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
                </svg>
            </div>
        </div>
    </div>
@endsection
