@extends('layouts.frontLayout')
@section('body_parts')
    @php
    $hotels = \App\Models\Hotel::all();
    @endphp
    <div class="fh5co-parallax" style="background-image: url(public/assets/images/bg05.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Book Your Favourite Hotel and Enjoy your Trip with <br>IGNITE HOTELS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <section  style="margin-top: 14px;width:299px;">
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
    @endsection
