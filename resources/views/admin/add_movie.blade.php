@extends('admin_layout')
@section('admin_content')
    {{-- <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm phim
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
                        <form role="form" action="{{ URL::to('/save-movie-list') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="movie_name">Tên Phim</label>
                                <input type="text" class="form-control" id="movie_name" name="movie_name"
                                    placeholder="Tên Phim">
                            </div>
                            <div class="form-group">
                                <label for="movie_img">Hình ảnh của phim</label>
                                <input type="file"class="form-control" id="movie_img" name="movie_img"
                                    placeholder="Hình ảnh của phim">
                            </div>
                            <div class="form-group">
                                <label for="movie_category">Thể loại</label>
                                <input type="text"class="form-control" id="movie_category" name="movie_category"
                                    placeholder="Thể loại">
                            </div>
                            <div class="form-group">
                                <label for="movie_time">Thời lượng</label>
                                <input type="text"class="form-control" id="movie_time" name="movie_time"
                                    placeholder="Thời lượng (phút)">
                            </div>
                            <div class="form-group">
                                <label for="movie_datestart">Ngày khởi chiếu</label>
                                <input type="date"class="form-control" id="movie_datestart" name="movie_datestart"
                                    placeholder="Ngày khởi chiếu">
                            </div>
                            <div class="form-group">
                                <label for="movie_age">Độ tuổi</label>
                                <input type="text"class="form-control" id="movie_age" name="movie_age"
                                    placeholder="Độ tuổi">
                            </div>
                            <div class="form-group">
                                <label for="movie_direct">Đạo diễn </label>
                                <input type="text"class="form-control" id="movie_direct" name="movie_direct"
                                    placeholder="Đạo diễn">
                            </div>
                            <div class="form-group">
                                <label for="movie_actor">Diễn viên</label>
                                <input type="text"class="form-control" id="movie_actor" name="movie_actor"
                                    placeholder="Diễn Viên">
                            </div>
                            <div class="form-group">
                                <label for="movie_desc">Mô tả</label>
                                <textarea type="text" style="resize" rows="6" class="form-control" id="movie_desc" name="movie_desc"
                                    placeholder="Mô tả của phim"> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="movie_status">Hiển thị</label>
                                <select name="movie_status" class="form-control input-sm m-bot15">
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
        <h1>ADD MOVIES</h1>

        <div class="adm__add-movie--container">
            <div class="adm__add-movie--container---movie---details">
                <h1>MOVIE DETAILS</h1>
                <form role="form" id="form1" action="{{ URL::to('/save-movie-list') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <p>Photo</p>
                        <label for="drag-n-drop" id="drop-area">
                            <input type="file" accept="image/*" name="movie_img" id="drag-n-drop" onchange="displayFileName()"  hidden>
                            <div id="img-view">
                                <span>Drag and drop or click <br>here to upload image.</span>
                            </div>
                        </label>
                    </div>
                    <p id="file-name-display"></p>
                    <div>
                        <div>
                            <div>
                                <p>Name</p>
                                <input type="text" name="movie_name" id="" placeholder="Insert movie name...">
                            </div>
                            <div>
                                <p>
                                    Genre

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <title>Ctrl + Click to select multiple genres</title>
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                    </svg>
                                </p>
                                <select name="movie_category" id="genre" multiple>
                                    <option value="Action">Action</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Historical">Historical</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Musical">Musical</option>
                                    <option value="Noir">Noir</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Science">Science</option>
                                    <option value="Thriller">Thriller</option>
                                    <option value="Western">Western</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <div>
                                <p>Length</p>
                                <div style="width:36%">
                                    <input type="number" name="movie_time" id="" value="1" min="0" max="240">
                                    <span>minutes</span>
                                </div>
                            </div>
                            <div>
                                <p>
                                    Status

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <title>Ctrl + Click to select multiple formats</title>
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                    </svg>
                                </p>
                                <select name="movie_status">
                                    <option value="0">Hidden</option>
                                    <option value="1">Show</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <div>
                                <p>Premiere Date</p>
                                <input type="date" name="movie_datestart" id="">
                            </div>
                            <div>
                                <p>Film Rating</p>
                                <select name="movie_age" id="rating">
                                    <option value="P">P-The film is allowed to be popular with viewers of all ages.</option>
                                    <option value="T13">T13-The film is popular with viewers aged 13 and over (13+)</option>
                                    <option value="T16">T16-The film is popular with viewers aged 16 years and older (16+)</option>
                                    <option value="T18">T18-The film is popular with viewers aged 18 years or older (18+).</option>
                                    <option value="K">K-The film is intended for viewers under 13 years old and is accompanied by a guardian.</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <div>
                                <p>Directors</p>
                                <input type="text" name="movie_direct" id="" placeholder="Insert directors...">
                            </div>
                            <div>
                                <p>Actors</p>
                                <input type="text" name="movie_actor" id="" placeholder="Insert actors...">
                            </div>
                        </div>
                        <div class="">
                            <div>
                                <p>Iframe</p>
                                <input style="width:95%" type="text" name="movie_iframe" id="" placeholder="Insert iframe...">
                            </div>
                        </div>
                        <div class="a">
                            <p>Description</p>
                            <textarea name="movie_desc" id="" cols="30" rows="10" placeholder="Insert description..."></textarea>
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
         {{-- <form role="form" action="{{ URL::to('/save-showtime-list') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="adm__add-movie--container">
                <div class="adm__add-movie--container---showtime---details">
                    <h1>SHOWTIME DETAILS</h1>

                    <div>
                        <div>
                            <p>Date</p>
                            <input type="date" name="showtime_date" id="" placeholder="Insert date...">
                        </div>
                        <div class="form-group">
                            <p>
                                Room
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 16px; height: 16px;fill: #d62222;margin-left: 6px;">
                                    <title>Ctrl + Click to select multiple formats</title>
                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </p>
                            <select name="movie_room" class="form-control input-sm m-bot15">
                                @foreach($movie_room as $key => $room)
                                @if($room->room_status != 0)
                                    <option value="{{ $room->room_id }}">{{ $room->room_name }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <div>
                            <p>Time</p>
                            <input type="time" name="showtime_slot" id="">
                        </div>
                        {{-- <div>
                            <input type="submit" name="" id="" value="ADD SHOWTIME">
                        </div> --}}
                    {{-- </div>
                </div>
            </div>
         </form> --}}
    </div>
@endsection

