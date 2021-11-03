
@extends('admin.layout')
@section('body_parts')
    <div class="row" style="margin-bottom: 40%; margin-top: 5%;width: 80%">
        <form action="addRoomtoDB" method="POST" enctype="multipart/form-data" style="margin-left: 5%;">
            @csrf
            <div class="form-group">
                <label for="hotel_id">Hotel Id</label>
                <input type="text" class="form-control" id="hotel_id" name="hotel_id" placeholder="Enter Hotel Id" required autofocus>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type"  placeholder="Enter Type" required autofocus>
            </div>



            <div class="form-group">
                <label for="rent">Rent</label>
                <input type="number" class="form-control" id="rent" name="rent" min="1" placeholder=" Rent" required autofocus>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required autofocus>
            </div>

            <div class="form-group">
                <label for="available">Available</label>
                <input type="text" class="form-control" id="available" name="available"  placeholder="Rooms Available" required autofocus>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=text]:focus {
            border: 3px solid #555;
        }
    </style>
@endsection

