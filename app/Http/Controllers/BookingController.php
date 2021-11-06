<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::create([
            'name' =>$request->name,
            'user_id' =>\Auth::user()->id,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'hotel' =>$request->hotel,
            'room_id' =>$request->room_no,
            'type' =>$request->type,
            'check_in' =>$request->check_in,
            'check_out' =>$request->check_out,
            'cost' =>$request->cost,
        ]);
        $booking->save();
        $reservation = Reservation::create([
            'room_id'=>$request->room_no,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out,
        ]);
        $reservation->save();
        return redirect('/')->with('success','Your Room is Reserved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Booking::find($id);
        $reserved = Reservation::where('room_id',$book->room_id)
                                ->where('check_in',$book->check_in)
                                ->where('check_out',$book->check_out)->value('id');
        $reservedRoom = Reservation::find($reserved);
        $book->delete();
        $reservedRoom->delete();
        return redirect()->back()->with('failed','Removed!');

    }
    public function manageOrders()
    {
        if((\Auth::user()->role)=='admin')
        {
            $bookings = Booking::all();
            return view('admin.manage_orders')->with('bookings',$bookings);
        }
        else{
            return redirect('login')->with('failed','Admin Access Only');
        }

    }
}
