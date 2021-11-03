@extends('admin.layout')
@section('body_parts')
    <div class="row " style="margin-bottom: 40%; margin-top: 5%;width: 80%;text-align: center;">
        <table width="400" border="1" style="margin-left: 60px;">
            <tr>
                <th width="20">Id</th>
                <th width="100">Type</th>

                <th width="100">Hotel_ID</th>
                <th width="100">Image</th>
                <th width="100">Rent</th>
            </tr>
            @foreach($rooms as $room)
                <tr style="border-bottom: 1px solid #ff000d;">
                    <td width="20">{{$room->id}}</td>
                    <td width="200">{{$room->type}}</td>
                    <td width="20">{{$room->hotel_id}}</td>
                    <td width="100"><img src="public/assets/hotel/room/{{$room->image}}" alt="" border=3 height=100 width=100></img></td>
                    <td width="50">{{$room->rent}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <style>

    </style>
@endsection
