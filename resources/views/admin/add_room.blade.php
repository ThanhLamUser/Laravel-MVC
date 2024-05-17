@extends('admin_layout')
@section('admin_content')
    {{-- <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm phòng
                </header>
                <?php
                // $message = Session::get('message');
                // if($message){
                //     echo $message;
                //     $message = Session::get('message',null);
                // }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-room-list') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="room_name">Tên phòng</label>
                                <input type="text" class="form-control" id="room_name" name="room_name">
                            </div>
                            <div class="form-group">
                                <label for="movie_actor">Sức chứa</label>
                                <input type="text"class="form-control" id="room_seats" name="room_seats"
                                    placeholder="Diễn Viên">
                            </div>

                            <div class="form-group">
                                <label for="room_status">Hiển thị</label>
                                <select name="room_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển Thị</option>
                                </select>
                            </div>


                            <button type="submit" name="add_movie_list" class="btn btn-info">Thêm</button>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div> --}}

    <div class="adm__add-movie col l-9 m-4 c-6">
        <h1>ADD ROOM</h1>

        <div class="adm__add-movie--container">
            <div class="adm__add-movie--container---movie---details">
                <h1>ROOM DETAILS</h1>
                <form role="form" id="form1" action="{{ URL::to('/save-room-list') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <div>
                            <div>
                                <p>Name</p>
                                <input type="text" name="room_name" id="" placeholder="Insert room name...">
                            </div>
                            <div>
                                <p>Seat</p>
                                <input type="number" name="room_seats" id="" placeholder="Insert quantity...">
                            </div>
                        </div>

                        <div>

                            <div>
                                <p>
                                    Status

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <title>Ctrl + Click to select multiple formats</title>
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                    </svg>
                                </p>
                                <select name="room_status">
                                    <option value="0">Hidden</option>
                                    <option value="1">Show</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adm__add-movie--container">
                <div class="adm__add-movie--container---save---btn">
                    <div>
                        <input type="submit" name="add_movie_list" id="submit-btn" value="SAVE">
                    </div>
                </div>
            </div>
         </form>
    </div>
@endsection

