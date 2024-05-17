@extends('admin_layout')
@section('admin_content')
    <div class="adm__add-movie col l-9 m-4 c-6">
        <h1>ADD POPCORN&DRINK</h1>

        <div class="adm__add-movie--container">
            <div class="adm__add-movie--container---movie---details">
                <h1>POPCORN&DRINK DETAILS</h1>
                <form role="form" id="form1" action="{{ URL::to('/save-popcorndrink-list') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <div>
                            <div>
                                <p>Combo</p>
                                <input type="text" name="popcorndrink_combo" id="" placeholder="Insert combo name...">
                            </div>
                            <div>
                                <p>Popcorn</p>
                                <input type="text" name="popcorndrink_popcorn" id="" placeholder="Insert popcorn name...">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>Drink</p>
                                <input type="text" name="popcorndrink_drink" id="" placeholder="Insert drink name...">
                            </div>
                            <div>
                                <p>Price</p>
                                <input type="number" name="popcorndrink_price" id="" placeholder="Insert price...">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>Photo</p>
                                <label for="drag-n-drop" id="drop-area">
                                    <input type="file" accept="image/*" name="popcorndrink_img" id="drag-n-drop" onchange="displayFileName()"  hidden>
                                    <div id="img-view">
                                        <span>Drag and drop or click <br>here to upload image.</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <p id="file-name-display"></p>

                    </div>
                </div>
            </div>
            <div class="adm__add-movie--container">
                <div class="adm__add-movie--container---save---btn">
                    <div>
                        <input type="submit" name="add_popcorndrink_list" id="submit-btn" value="SAVE">
                    </div>
                </div>
            </div>
         </form>
    </div>
@endsection

