@extends('admin_layout')
@section('admin_content')
    <div class="adm__add-movie col l-9 m-4 c-6">
        <h1>ADD TICKET</h1>

        <div class="adm__add-movie--container">
            <div class="adm__add-movie--container---movie---details">
                <h1>TICKET DETAILS</h1>
                <form role="form" id="form1" action="{{ URL::to('/save-ticket-list') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <div>
                            <div>
                                <p>Name</p>
                                <input type="text" name="ticket_name" id="" placeholder="Insert name...">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>Type</p>
                                <input type="text" name="ticket_type" id="" placeholder="Insert type ...">
                            </div>
                            <div>
                                <p>Price</p>
                                <input type="number" name="ticket_price" id="" placeholder="Insert price...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adm__add-movie--container">
                <div class="adm__add-movie--container---save---btn">
                    <div>
                        <input type="submit" name="add_ticket_list" id="submit-btn" value="SAVE">
                    </div>
                </div>
            </div>
         </form>
    </div>
@endsection

