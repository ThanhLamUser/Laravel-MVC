@extends('admin_layout')
@section('admin_content')
{{--
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    cập nhật phim
                </header>
                <div class="panel-body">
                    @foreach ($edit_movie as $key => $edit_value)

                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/update-movie/'.$edit_value->movie_id)}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="movie_name">Tên Phim</label>
                            <input type="text" value="{{ $edit_value->movie_name }}" class="form-control" id="movie_name" name="movie_name" placeholder="Tên Phim">
                        </div>
                        <div class="form-group">
                            <label for="movie_img">Hình ảnh của phim</label>
                            <input type="file" value="{{ $edit_value->movie_img }}" class="form-control" id="movie_img" name="movie_img" placeholder="Hình ảnh của phim">
                        </div>
                        <div class="form-group">
                            <label for="movie_category">Thể loại</label>
                            <input type="text" value="{{ $edit_value->movie_category }}" class="form-control" id="movie_category" name="movie_category" placeholder="Thể loại">
                        </div>
                        <div class="form-group">
                            <label for="movie_time">Thời lượng</label>
                            <input type="text"class="form-control" value="{{ $edit_value->movie_time }}" id="movie_time" name="movie_time" placeholder="Thời lượng (phút)">
                        </div>
                        <div class="form-group">
                            <label for="movie_datestart">Ngày khởi chiếu</label>
                            <input type="date"class="form-control" value="{{ $edit_value->movie_datestart }}" id="movie_datestart" name="movie_datestart" placeholder="Ngày khởi chiếu">
                        </div>
                        <div class="form-group">
                            <label for="movie_age">Độ tuổi</label>
                            <input type="text"class="form-control" value="{{ $edit_value->movie_age }}" id="movie_age" name="movie_age" placeholder="Độ tuổi">
                        </div>
                        <div class="form-group">
                            <label for="movie_direct">Đạo diễn </label>
                            <input type="text"class="form-control" value="{{ $edit_value->movie_direct }}" id="movie_direct" name="movie_direct" placeholder="Đạo diễn">
                        </div>
                        <div class="form-group">
                            <label for="movie_actor">Diễn viên</label>
                            <input type="text"class="form-control" value="{{ $edit_value->movie_actor }}" id="movie_actor" name="movie_actor" placeholder="Diễn Viên">
                        </div>
                        <div class="form-group">
                            <label for="movie_desc">Mô tả</label>
                            <textarea type="text" style="resize" rows="6" class="form-control" id="movie_desc" name="movie_desc" placeholder="Mô tả của phim">{{ $edit_value->movie_desc }}</textarea>
                        </div>

                        <button type="submit" name="edit-movie" class="btn btn-info">Cập nhật</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>
    </div>
</div> --}}

<div class="adm__add-movie col l-9 m-4 c-6">
    <h1>EDIT MOVIES</h1>

    <div class="adm__add-movie--container">
        <div class="adm__add-movie--container---movie---details">
            <h1>MOVIE DETAILS</h1>
            @foreach ($edit_movie as $key => $edit_value)
            <form role="form" id="form1" action="{{ URL::to('/update-movie/'.$edit_value->movie_id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div>
                    <p>Photo</p>
                    <label for="drag-n-drop" id="drop-area">
                        <input type="file" accept="image/*" name="movie_img" id="drag-n-drop" onchange="displayFileName()" hidden>
                        <div id="img-view">
                            @if ($edit_value->movie_img)
                                <img src="{{ asset('public/upload/movie/' . $edit_value->movie_img) }}" alt="Selected Image" style="max-width: 100%; height: auto;" id="current-img">
                            @else
                                <span>Drag and drop or click <br>here to upload image.</span>
                            @endif
                        </div>
                    </label>
                </div>
                <p id="file-name-display"></p>
                <div>
                    <div>
                        <div>
                            <p>Name</p>
                            <input type="text" name="movie_name" value="{{ $edit_value->movie_name }}"  id="" placeholder="Insert movie name...">
                        </div>
                        <div>
                            <p>Genre</p>
                            <input type="text" name="movie_category"value="{{ $edit_value->movie_category }}" id="" placeholder="Insert category name...">
                        </div>
                    </div>

                    <div>
                        <div>
                            <p>Length</p>
                            <div style="width:36%">
                                <input type="number" name="movie_time" id="" value="{{ $edit_value->movie_time }}" min="0" max="240">
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
                                <option value="0" {{ $edit_value->movie_status == "0" ? "selected" : "" }}>Hidden</option>
                                <option value="1" {{ $edit_value->movie_status == "1" ? "selected" : "" }}>Show</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div>
                            <p>Premiere Date</p>
                            <input type="date" name="movie_datestart" value="{{ $edit_value->movie_datestart }}" id="">
                        </div>
                        <div>
                            <p>Film Rating</p>
                            <select name="movie_age" id="rating">
                                <option value="P" {{ $edit_value->movie_age == "P" ? "selected" : "" }}>P-The film is allowed to be popular with viewers of all ages.</option>
                                <option value="T13" {{ $edit_value->movie_age == "T13" ? "selected" : "" }}>T13-The film is popular with viewers aged 13 and over (13+)</option>
                                <option value="T16" {{ $edit_value->movie_age == "T16" ? "selected" : "" }}>T16-The film is popular with viewers aged 16 years and older (16+)</option>
                                <option value="T18" {{ $edit_value->movie_age == "T18" ? "selected" : "" }}>T18-The film is popular with viewers aged 18 years or older (18+).</option>
                                <option value="K" {{ $edit_value->movie_age == "K" ? "selected" : "" }}>K-The film is intended for viewers under 13 years old and is accompanied by a guardian.</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div>
                            <p>Directors</p>
                            <input type="text" name="movie_direct" id="" value="{{ $edit_value->movie_direct }}" placeholder="Insert directors...">
                        </div>
                        <div>
                            <p>Actors</p>
                            <input type="text" name="movie_actor" id="" value="{{ $edit_value->movie_actor }}" placeholder="Insert actors...">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <p>Iframe</p>
                            <input style="width:95%" type="text" value="{{ $edit_value->movie_iframe }}" name="movie_iframe" id="" placeholder="Insert iframe...">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <p>Poster</p>
                            <input style="width:95%" type="text" name="{{ $edit_value->movie_poster }}" id="" placeholder="Insert poster...">
                        </div>
                    </div>
                    <div class="a">
                        <p>Description</p>
                        <textarea name="movie_desc" id="" cols="30" rows="10" placeholder="Insert description...">{{ $edit_value->movie_desc }} </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="adm__add-movie--container">
            <div class="adm__add-movie--container---save---btn">
                <div>
                    <input onclick="transfer('{{ URL::to('/list-movie') }}')"  type="submit" name="edit_movie_list" id="submit-btn" value="SAVE">
                </div>
            </div>
        </div>
    </form>
         @endforeach
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
