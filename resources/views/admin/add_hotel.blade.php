
@extends('admin.layout')
@section('body_parts')
    <div class="row" style="margin-bottom: 40%; margin-top: 5%;width: 80%">
        <form action="addHoteltoDb" method="POST" enctype="multipart/form-data" style="margin-left: 5%;">
           @csrf
            <div class="form-group">
                <label for="name">Hotel Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name of hotel" required autofocus>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location"  placeholder="Enter location" required autofocus>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required autofocus>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"  placeholder="Enter description" required autofocus>
            </div>

            <div class="form-group">
                <label for="hotel_facilities">Hotel Facilities</label>
                <input type="text" class="form-control" id="hotel_facilities" name="hotel_facilities"  placeholder="Enter Facilities" required autofocus>
            </div>



            <div class="form-group">
                <label for="room_facilities">Room Facilities</label>
                <input type="text" class="form-control" id="room_facilities" name="room_facilities"  placeholder="Enter Facilities" required autofocus>
            </div>

            <div class="form-group">
                <label for="landmark">Landmark</label>
                <input type="text" class="form-control" id="landmark" name="landmark"  placeholder="Enter landmark" required autofocus>
            </div>

            <div class="form-group">
                <label for="safety">Safety </label>
                <input type="text" class="form-control" id="safety" name="safety" placeholder="Safety" required autofocus>
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

