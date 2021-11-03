@extends('layouts.frontLayout')
@section('body_parts')
    @php
        $hotels = \App\Models\Hotel::all();
        $check_in = Session::get('customer_checkin');
        $check_out = Session::get('customer_checkout');
        $sel_hotel_id = \App\Models\Room::where('id',Session::get('room_d'))->value('hotel_id');
        $hotel_name = \App\Models\Hotel::where('id',$sel_hotel_id)->value('name');
        $type = \App\Models\Room::where('id',Session::get('room_d'))->value('type');
    @endphp
    <div class="fh5co-parallax" style="background-image: url(public/assets/images/bg06.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center"> Book a Room at IGNITE HOTELS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-dv">
        <h1 style="text-align: center;font-family: 'fantasy';">Check Informations Bellow</h1>
        <form action="{{url('book')}}" method="POST">
            @csrf
            <div class="row">

                <div class="input-group input-group-icon"><input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Full Name"  required/>
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon"><input type="email" name="email" value="{{Auth::user()->email}}" placeholder="Email Adress" required/>
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon"><input type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="Email Adress" required/>
                    <div class="input-icon"><i class="fa fa-phone"></i></div>
                </div>

            </div>
            <div class="row">
                <div class="col-half">
                    <h4>Check In</h4>
                    <div class="input-group input-group-icon"><input type="text" name="check_in" value="{{$check_in}}" readonly />
                        <div class="input-icon"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                <div class="col-half">
                    <h4>Check Out</h4>
                    <div class="input-group input-group-icon"><input type="text" name="check_out" value="{{$check_out}}" readonly />
                        <div class="input-icon"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Hotel Name</h4>
                <div class="input-group input-group-icon"><input type="text" name="hotel" value="{{$hotel_name}}" placeholder="Hotel Name" readonly />
                    <div class="input-icon"><i class="fa fa-hotel"></i></div>
                </div>

            </div>
            <div class="row">
                <div class="col-half">
                    <h4>Room Number</h4>
                    <div class="input-group "><input type="text" name="room_no" value="{{Session::get('room_d')}}" placeholder=" Room No" readonly />
                        <div class="input-icon"></div>
                    </div>

                </div>
         <div class="col-half">
             <h4>Room Type</h4>
             <div class="input-group " style="width: 100%;"><input type="text" name="type" value="{{$type}}" placeholder="Type" readonly />
                 <div class="input-icon"></div>
             </div>

                        </div>




            </div>
            <div class="row">
                <h4>Cost </h4>
                <div class="input-group input-group-icon"><input type="text" name="cost" value="{{Session::get('cost')}}" placeholder="Cost" readonly />
                    <div class="input-icon"><i class="fa fa-usd"></i></div>
                </div>

            </div>
            <div class="row">
               <button class="btn btn-luxe-primary btn-block" type="submit">Book Now</button>

            </div>

        </form>
        <div class="row">
         <a href="{{url('booking')}}">  <button class="btn btn-luxe-primary btn-block" type="submit"><i class="fa fa-arrow-left"></i>Go Back</button></a>

        </div>
    </div>
    <style>

        *:before,
        *:after {
            box-sizing: border-box;
        }

        h4 {
            color: #f0a500;
        }
        input,
        input[type="radio"] + label,
        input[type="checkbox"] + label:before,
        select option,
        select {
            width: 100%;
            padding: 1em;
            line-height: 1.4;
            background-color: #f9f9f9;
            border: 1px solid #e5e5e5;
            border-radius: 3px;
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }
        input:focus {
            outline: 0;
            border-color: #bd8200;
        }
        input:focus + .input-icon i {
            color: #f0a500;
        }
        input:focus + .input-icon:after {
            border-right-color: #f0a500;
        }
        input[type="radio"] {
            display: none;
        }
        input[type="radio"] + label,
        select {
            display: inline-block;
            width: 50%;
            text-align: center;
            float: left;
            border-radius: 0;
        }
        input[type="radio"] + label:first-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        input[type="radio"] + label:last-of-type {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        input[type="radio"] + label i {
            padding-right: 0.4em;
        }
        input[type="radio"]:checked + label,
        input:checked + label:before,
        select:focus,
        select:active {
            background-color: #f0a500;
            color: #fff;
            border-color: #bd8200;
        }
        input[type="checkbox"] {
            display: none;
        }
        input[type="checkbox"] + label {
            position: relative;
            display: block;
            padding-left: 1.6em;
        }
        input[type="checkbox"] + label:before {
            position: absolute;
            top: 0.2em;
            left: 0;
            display: block;
            width: 1em;
            height: 1em;
            padding: 0;
            content: "";
        }
        input[type="checkbox"] + label:after {
            position: absolute;
            top: 0.45em;
            left: 0.2em;
            font-size: 0.8em;
            color: #fff;
            opacity: 0;
            font-family: FontAwesome;
            content: "\f00c";
        }
        input:checked + label:after {
            opacity: 1;
        }
        select {
            height: 3.4em;
            line-height: 2;
        }
        select:first-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        select:last-of-type {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        select:focus,
        select:active {
            outline: 0;
        }
        select option {
            background-color: #f0a500;
            color: #fff;
        }
        .input-group {
            margin-bottom: 1em;
            zoom: 1;
            width: 70%;
        }
        .input-group:before,
        .input-group:after {
            content: "";
            display: table;
        }
        .input-group:after {
            clear: both;
        }
        .input-group-icon {
            position: relative;
        }
        .input-group-icon input {
            padding-left: 4.4em;
        }
        .input-group-icon .input-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 3.4em;
            height: 3.4em;
            line-height: 3.4em;
            text-align: center;
            pointer-events: none;
        }
        .input-group-icon .input-icon:after {
            position: absolute;
            top: 0.6em;
            bottom: 0.6em;
            left: 3.4em;
            display: block;
            border-right: 1px solid #e5e5e5;
            content: "";
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }
        .input-group-icon .input-icon i {
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }
        .container-dv {
            max-width: 38em;
            padding: 1em 3em 2em 3em;
            margin: 0em auto;
            background-color: #fff;
            border-radius: 4.2px;
            box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            justify-content: center;
        }
        .row {
            zoom: 1;
        }
        .row:before,
        .row:after {
            content: "";
            display: table;
        }
        .row:after {
            clear: both;
        }
        .col-half {
            padding-right: 10px;
            float: left;
            width: 50%;
        }
        .col-half:last-of-type {
            padding-right: 0;
        }
        .col-third {
            padding-right: 10px;
            float: left;
            width: 33.33333333%;
        }
        .col-third:last-of-type {
            padding-right: 0;
        }
        @media only screen and (max-width: 540px) {
            .col-half {
                width: 100%;
                padding-right: 0;
            }
        }

    </style>


@endsection
