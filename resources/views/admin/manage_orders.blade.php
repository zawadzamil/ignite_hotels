@extends('admin.layout')
@section('body_parts')
    <div class="row" style="margin-bottom: 40%; margin-top: 5%;">
        <!-- Session Status -->
        @if (\Session::has('failed'))
            <div class="alert alert-danger">
                <ul>
                    <li style="color: red;text-align: center;">{!! \Session::get('failed') !!}</li>
                </ul>
            </div>
        @endif
    <div class="table-wrapper" style="word-break: break-all ;">
        <table class="fl-table table-hover">
            <thead>
            <tr>
                <th>Booking Id</th>
                <th>Clint Name</th>
                <th>Phone No</th>
                <th>Hotel</th>
                <th> Room No.</th>
                <th> Image</th>
                <th> Check-In</th>
                <th> Check-Out</th>

                <th> Type</th>
                <th> Cost</th>
                <th> Cancel Order</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $book)
                <tr>
                    <td> {{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->phone}}</td>
                    <td>{{$book->hotel}}</td>
                    <td>{{$book->room_id}}</td>
                    <td><img alt="" border=3 height=100 width=100 src="public/assets/hotel/room/{{\App\Models\Room::where('id',$book->room_id)->value('image')}}"></td>
                    <td>{{$book->check_in}}</td>
                    <td>{{$book->check_out}}</td>
                    <td>{{$book->type}}</td>
                    <td>{{$book->cost}}</td>
                    <td><a href="{{url('delete_booking',$book->id)}}"><button class="btn btn-luxe-primary btn-sm">Cancel</button></a> </td>
                </tr>
            @endforeach

            <tbody>
        </table>
    </div>
    </div>
    <style>
        h2{
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #130e37;
            padding: 30px 0;
        }

        /* Table Styles */

        .table-wrapper{
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
        }

        .fl-table {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td, .fl-table th {
            text-align: center;
            padding: 8px;
            word-wrap: break-word;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #4FC3A1;
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: #324960;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        /* Responsive */

        @media (max-width: 767px) {
            .fl-table {
                display: block;
                width: 100%;
            }
            .table-wrapper:before{
                content: "Scroll horizontally >";
                display: block;
                text-align: right;
                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }
            .fl-table thead, .fl-table tbody, .fl-table thead th {
                display: block;
            }
            .fl-table thead th:last-child{
                border-bottom: none;
            }
            .fl-table thead {
                float: left;
            }
            .fl-table tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }
            .fl-table td, .fl-table th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }
            .fl-table thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }
            .fl-table tbody tr {
                display: table-cell;
            }
            .fl-table tbody tr:nth-child(odd) {
                background: none;
            }
            .fl-table tr:nth-child(even) {
                background: transparent;
            }
            .fl-table tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }
            .fl-table tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }
            .fl-table tbody td {
                display: block;
                text-align: center;
            }
        }
    </style>

    @endsection
