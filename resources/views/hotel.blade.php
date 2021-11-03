@extends('front_from_here')
@section('body_parts')
    @php
    $rooms = \App\Models\Room::where('hotel_id',$hotel[0]->id)->get();

    @endphp

	<div class="fh5co-parallax" style="background-image: url(../public/assets/images/bg03.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">{{$hotel[0]->name}}</h1>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container " style="width: 100%;height: 100%;">
        <div class="image ">
            <img class="img" src="../public/assets/hotel/images/{{$hotel[0]->image}}">
        </div>
        <div class="header"><b>{{$hotel[0]->name}}</b></div>
        <div class="content">
            <h4>Description :</h4><p>{{$hotel[0]->description}}</p>

        </div>
        <div class="content"><h4>Location :</h4><p>{{$hotel[0]->location}}</p></div>
        <div class="content"><h4>Hotel Facilities :</h4><p>{{$hotel[0]->hotel_facilities}}</p></div>
        <div class="content"><h4>Room Facilities :</h4><p>{{$hotel[0]->room_facilities}}</p></div>
        <div class="content"><h4> Landmarks :</h4><p>{{$hotel[0]->landmark}}</p></div>
        <div class="content"><h4> Safety :</h4><p>{{$hotel[0]->safety}}</p></div>
        <p>
            <a href="{{url('booking')}}" class="btn btn-primary btn-lg">Book Now</a>
        </p>


    </div>
    <div class="container" id="result">
        @foreach($rooms as $r)
        <div class="row">

            <div class="col-md-3" style="display: inline;" >
                <div class="img">
                    <img src="../public/assets/hotel/room/{{\App\Models\Room::where('id',$r->id)->value('image')}}" style="width: 100%;height: 100%; object-fit: contain;"/>

                </div>
            </div>
            <div class="col-md-3" style="display: inline;margin-top: 40px;" >
                <ul class="list-group" id="details">
                    <li class="list-group-item">Room No:{{$r->id}}</li>
                    <li class="list-group-item">Type: {{\App\Models\Room::where('id',$r->id)->value('type')}}</li>
                    <li class="list-group-item">Per Night Cost: ${{\App\Models\Room::where('id',$r->id)->value('rent')}}</li>
                </ul>
            </div>
            <div class="col-md-3" style="display: inline;margin-top: 40px;">
                <div class="inclusion">
                    <ul style="list-style-type: none; font-size: 15px;margin-top: 10px;">
                        <li><i class="fa fa-check-square-o"></i> Breakfast</li>
                        <li><i class="fa fa-check-square-o"></i>Complimentary Wi-F</li>
                        <li><i class="fa fa-check-square-o"></i>Non Refundable</li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3" style="display: inline;text-align: center;">
                <ul style="list-style-type: none">
                    <li>
                        <p style="margin-top: 40%;">
                            Price of Single Nights:
                        <h3 style="font-family: 'Segoe UI Black';">${{\App\Models\Room::where('id',$r->id)->value('rent')}}</h3>

                        </p>

                    </li>
                    <li>

                        <a href="{{url('booking')}}"><button class="btn btn-success btn-block">Check Availability</button> </a>
                    </li>
                </ul>

            </div>
        </div>
            @endforeach
    </div>
    <style>
        .image{
            width: 70%;
            height: 70%;

            margin-left: 50%;
            margin-right: 50%;
            margin: auto;
            margin-top: 10px;
        }
        .header{
            width: 30%;
            height: 100px;
            background-color: white;
            margin-left: 50%;
            margin-right: 50%;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 30px;
            font-family: "icomoon";
            color: black;
            text-align: center;
        }
        .content{
            width: 100%;

            height: 30%;
            margin-top: 10px;
            margin-left: 50%;
            margin-right: 50%;
            margin: auto;
            background-color: white;
            margin-bottom: 5px;
            word-wrap: break-word;
        }
        .img {
            max-width: 100%;
            max-height: 100%;
            margin: auto;
            display: block;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        p {
            font-family: "Californian FB";
            color: black;
        }
        h4 {
            color: #171a1d;
            text-shadow: #908dff;
        }
    </style>
	@endsection

