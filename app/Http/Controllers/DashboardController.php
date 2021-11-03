<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(\Auth::user())
        {
            if(\Auth::user()->role=='user')
            {
                return view('home');
            }
            if(\Auth::user()->role=='admin')
            {
                return view('admin.dashboard');
            }
        }
    }
    public function addHotel()
    {
        if(\Auth::user())
        {
            if(\Auth::user()->role=='user')
            {
                return view('home');
            }
            if(\Auth::user()->role=='admin')
            {
                return view('admin.add_hotel');
            }
        }
    }
    public function addRoom()
    {
        if(\Auth::user())
        {
            if(\Auth::user()->role=='user')
            {
                return view('home');
            }
            if(\Auth::user()->role=='admin')
            {
                return view('admin.add_room');
            }
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function confirmBooking()
    {
        if(Auth::user())
        {
            return view('confirmBooking');
        }
        else
        {
            return redirect('login')->with('failed','You Must Login First');
        }
    }
    public function profile()
    {
        if(Auth::user())
        {
            return view('profile');
        }
        else
        {
            return redirect('login')->with('failed','You Must Login First');
        }
    }
    public function messageSend(Request $request)
    {
       $message = Message::create([
           'name' => $request->name,
           'email' => $request->email,
           'message' => $request->message,


       ]);
        $message->save();
        return redirect()->back()->with('success','Message Send Successfully!');
    }
    public function messages()
    {
       if(Auth::user()->role=='admin')
       {
           $messages = Message::all();
           return view('admin.messages')->with('messages',$messages);
       }
    }
}
