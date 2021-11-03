@extends('admin.layout')
@section('body_parts')
    <div class="row " style="margin-bottom: 40%; margin-top: 5%;width: 80%;text-align: center;">
        <table width="400" border="1" style="margin-left: 60px;">
            <tr>
                <th width="20">Id</th>
                <th width="100">Names</th>

                <th width="100">Location</th>
                <th width="100">Image</th>
                <th width="100">Description</th>
            </tr>
            @foreach($hotels as $hotel)
            <tr style="border-bottom: 1px solid #ff000d;">
                <td width="20">{{$hotel->id}}</td>
                <td width="100">{{$hotel->name}}</td>
                <td width="100">{{$hotel->location}}</td>
                <td width="100"><img src="public/assets/hotel/images/{{$hotel->image}}" alt="" border=3 height=100 width=100></img></td>
                <td width="500">{{$hotel->description}}</td>
            </tr>
                @endforeach
        </table>
    </div>
    <style>

    </style>
@endsection
