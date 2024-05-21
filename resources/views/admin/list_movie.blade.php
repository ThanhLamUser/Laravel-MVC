@extends('admin_layout')
@section('admin_content')
    {{-- <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách phim
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                // $message_movie = Session::get('message_movie');
                // if($message_movie){
                //     alert $message_movie;
                //     $message_movie = Session::get('message_movie',null);
                // }
                // ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên Phim</th>
                            <th>Hình ảnh</th>
                            <th>Tình trạng</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_movie as $key => $movie_pro)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>{{ $movie_pro->movie_name }}</td>
                                <td><span class="movie_img"><img src="public/upload/movie/{{ $movie_pro->movie_img }}" alt="" height="70px" width="47px"></span></td>
                                <td><span class="movie_status">
                                <?php
                                    if($movie_pro->movie_status == 1){
                                ?>
                                <a href="{{URL::to('/unactive-movie/'.$movie_pro->movie_id)  }}"> <span class="fa fa-solid fa-eye" style ="font-size: 1.3rem;"></span></a>
                                <?php
                                    }
                                    else{
                                ?>
                                <a href="{{URL::to('/active-movie/'.$movie_pro->movie_id)  }}"> <span class="fa fa-regular fa-eye-slash" style ="font-size: 1.3rem; color:red"></span></a>
                                <?php
                                    }
                                ?>
                                </span></td>
                                <td>
                                    <a href="{{ URL::to('/edit-movie/'.$movie_pro->movie_id) }}"> <span class="fa fa-times text" style ="font-size: 1.3rem;"></span></a>
                                </td>
                                <td>

                                    <a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="{{ URL::to('/delete-movie/'.$movie_pro->movie_id) }}"  ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div> --}}
    <div class="adm__all-movies col l-9 m-4 c-6">
        <h1>ALL MOVIES</h1>

        <div class="adm__all-movies--container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Premiere Date</th>
                    <th>Image</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($list_movie as $key => $movie_pro)
                            <tr>

                                <th>{{ $movie_pro->movie_name }}</th>
                                <th>{{ $movie_pro->movie_datestart}}</th>
                                <th><span class="movie_img"><img src="public/upload/movie/{{ $movie_pro->movie_img }}" alt="" height="70px" width="47px"></span></th>
                                <th><span>
                                    <?php
                                    if($movie_pro->movie_status == 1){
                                ?>
                                <a href="{{URL::to('/unactive-movie/'.$movie_pro->movie_id)  }}"> <span class="fa fa-solid fa-eye" style ="font-size: 2.5rem;"></span></a>
                                <?php
                                    }
                                    else{
                                ?>
                                <a href="{{URL::to('/active-movie/'.$movie_pro->movie_id)  }}"> <span class="fa fa-regular fa-eye-slash" style ="font-size: 2.5rem; color:red"></span></a>
                                <?php
                                    }

                                ?></span></th>

                                <th>
                                    <button onclick="transfer('{{ URL::to('/edit-movie/'.$movie_pro->movie_id) }}')" id="adm__all-movies--edit--btn" >EDIT</button>
                                </th>
                                <th>
                                    <button onclick="confirmDelete('{{ URL::to('/delete-movie/'.$movie_pro->movie_id) }}')" id="adm__all-movies--del--btn">DELETE</button>
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
