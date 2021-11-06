@extends('layouts.frontLayout')
@section('body_parts')
    @php
    $hotels = \App\Models\Hotel::all();
$datetime1 = strtotime($customer_checkin); // convert to timestamps
$datetime2 = strtotime($customer_checkout); // convert to timestamps
$days = (int)(($datetime2 - $datetime1)/86400);


    @endphp
    <div class="fh5co-parallax" style="background-image: url(public/assets/images/bg03.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Check Hotel Availability</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container_dv">

            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div id="availability">



                            <form action="{{url('checkAvailability')}}" method="GET" >
                                @csrf

                                <div class="a-col">
                                    <section>
                                        <select class="cs-select cs-skin-border" name="hotel_id" required>

                                            <option value="" disabled selected>Select Hotel</option>
                                            @foreach($hotels as $hotel)
                                                <option value="{{$hotel->id}}">{{$hotel->name}}</option>

                                            @endforeach
                                        </select>
                                    </section>
                                </div>
                                <div class="a-col alternate">
                                    <div class="input-field">
                                        <label for="date-start">Check In</label>
                                        <input type="text" name="check_in" class="form-control" id="date-start"  required/>
                                    </div>
                                </div>
                                <div class="a-col alternate">
                                    <div class="input-field">
                                        <label for="date-end">Check Out</label>
                                        <input type="text" name="check_out" class="form-control" id="date-end"  required/>
                                    </div>
                                </div>
                                <section  style="margin-top: 14px;width:300px;">
                                    <select class="cs-select cs-skin-border" name="type" required>
                                        <option value="" disabled selected>Room Type</option>
                                        <option value="single">S - 1 single bed for 1 person</option>
                                        <option value="medium">M - 2 Bed for 2 Adult</option>
                                        <option value="large">L - Large Room for 2 Adults and 2 Kid</option>
                                        <option value="romantic">R- 1 bed for Couple</option>
                                        <option value="slarge">SL - 2 bed for 2 Adults and 1/2 Kids</option>
                                    </select>
                                </section>
                                <div class="a-col action">
                                    <button class="btn btn-primary btn-block" type="submit">Check</button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>

@if($reserveCount>=($roomCount-$reserveCount))
            <div class="container" id="sorry">
                <div id="demotext">Soory No Room Available </div>


            </div>
    @else
@foreach( $room as $r)
    @foreach($reservedRoomId as $rid)
        @if(($r->id)==$rid)
            @continue
          @else

        <div class="container" id="result">
            <div class="row">

                <div class="col-md-3"  >

                        <img src="public/assets/hotel/room/{{\App\Models\Room::where('id',$r->id)->value('image')}}" style="width: 300px;height: 160px; object-fit: contain; "/>


                </div>
                <div class="col-md-3"  >
                    <ul class="list-group" id="details">
                        <li class="list-group-item">Room No:{{$r->id}}</li>
                        <li class="list-group-item">Type: {{\App\Models\Room::where('id',$r->id)->value('type')}}</li>
                        <li class="list-group-item">Per Night Cost: ${{\App\Models\Room::where('id',$r->id)->value('rent')}}</li>
                    </ul>
                </div>
                <div class="col-md-3" >

                        <ul >
                        <li><i class="fa fa-check-square-o"></i> Breakfast</li>
                        <li><i class="fa fa-check-square-o"></i>Complimentary Wi-F</li>
                        <li><i class="fa fa-check-square-o"></i>Non Refundable</li>

                        </ul>

                </div>
                <div class="col-md-3" >
                    <ul style="list-style-type: none">
                        <li>
                            <p style="margin-top: 40%;">
                                Price of {{$days}} Nights:
                                <h3 style="font-family: 'Segoe UI Black';">${{$days*\App\Models\Room::where('id',$r->id)->value('rent')}}</h3>

                            </p>

                        </li>
                    <li>
                        {{Session::put('room_d', $r->id)}}
                        {{Session::put('customer_checkin', $customer_checkin)}}
                        {{Session::put('customer_checkout', $customer_checkout)}}
                        {{Session::put('cost',$days*\App\Models\Room::where('id',$r->id)->value('rent'))}}
                        <a href="{{url('confirmBooking')}}"><button class="btn btn-success btn-block">Book</button> </a>
                    </li>
                    </ul>

                </div>
            </div>
        </div>
                @endif
        @endforeach
  @endforeach
    @endif







        </div>


    </div>
    <style>
        .container_dv{
            width: 100%;
            height: 100%;
            background-color: orangered;
        }

        .img{
            width: 280px;
            height: 280px;
            background-color: white;
            margin-top: 3%;
            margin-left: 5%;
            position: absolute;
        }  .details{
            background-color: white;
            height: 200px;
        }
        #result{
            width: 100%;
            height: 100%;
            background-color: white;
        }
        #details{
            margin-top: 10px;
            margin-left: 0px;
            font-size: 15px;

        }
        .inclusion{
            font-size: 10px;
        }
        #sorry{
            width: 100%;
            height: 300px;
            background-color: #232323;
            text-align: center;
            text-shadow: whitesmoke;
        }
        #demotext {
            color: #FFFFFF;
            background: #232323;
            text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #e9240e, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
            color: #FFFFFF;
            background: #232323;
            margin-top: 100px;
            font-size: 40px;
        }



    </style>

    @endsection
