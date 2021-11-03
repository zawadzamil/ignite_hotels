@extends('admin.layout')
@section('body_parts')
    <div class="row " style="margin-bottom: 40%; margin-top: 5%;width: 80%;text-align: center;">
        <table width="400" border="1" style="margin-left: 60px;">
            <tr>

                <th width="100">Names</th>

                <th width="100">Email</th>

                <th width="100">Message</th>
            </tr>
            @foreach($messages as $message)
                <tr style="border-bottom: 1px solid #ff000d;">

                    <td width="100">{{$message->name}}</td>
                    <td width="100">{{$message->email}}</td>

                    <td width="500">{{$message->message}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <style>

    </style>
@endsection
