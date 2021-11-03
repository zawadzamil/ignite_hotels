<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use function Sodium\add;

class RoomController extends Controller
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().rand().'.'.$request->image->extension();

        $request->image->move(public_path('assets/hotel/room'), $imageName);
        $room = Room::create([
            'hotel_id' =>$request -> hotel_id,
            'type' =>$request -> type,

            'rent' =>$request -> rent,
            'image' =>$imageName,
            'available' =>$request -> available,
        ]);
        $room->save();
        return redirect()->back()->with('success','Hotel is Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $rooms = Room::all();
        return view('admin.see_rooms')->with('rooms',$rooms);
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
        //
    }

    public function checkAvailability(Request $request)
    {
        $hotelId = $request->hotel_id;

        $type_that_customer_selected = $request->type;
        $type = '';
        if($type_that_customer_selected=='single')
        {
            $type = 'Single - 1 single bed for 1 person';
        }
        if($type_that_customer_selected=='medium')
        {
            $type = 'Medium - 2 Bed for 2 Adult';
        }
        if($type_that_customer_selected=='large')
        {
            $type = 'Large - Large Room for 2 Adults and 2 Kids';
        }
        if($type_that_customer_selected=='romantic')
        {
            $type = 'Romantic - 1 bed for Couple';
        }
        if($type_that_customer_selected=='slarge')
        {
            $type = 'Semi-Large - 2 bed for 2 Adults and 1/2 Kids';
        }
        $room = Room::where('hotel_id',$hotelId)
            ->where('type',$type)->get();
        $roomCount = Room::where('hotel_id',$hotelId)
            ->where('type',$type)->count();
        $customer_checkin_string = $request->check_in;
        $customer_checkout_string = $request->check_out;
        $time = strtotime($customer_checkin_string);
        $time2 = strtotime($customer_checkout_string);

        $customer_checkin = date('Y-m-d',$time);
        $customer_checkout = date('Y-m-d',$time2);
        $reservedRoomId = [];
        $reserveCount = 0;



    foreach($room as $r)
    {
        $reserved = Reservation::
        where('room_id',$r->id)->
        whereBetween('check_in', [$customer_checkin, $customer_checkout])
            ->orWhereBetween('check_out', [$customer_checkin, $customer_checkout])
            ->value('room_id');
        $count = Reservation::
        where('room_id',$r->id)->
        whereBetween('check_in', [$customer_checkin, $customer_checkout])
            ->orWhereBetween('check_out', [$customer_checkin, $customer_checkout])
            ->count();
        array_push($reservedRoomId, $reserved);
        $reserveCount = $reserveCount + $count;

    }










        return view('check_availability')->with('reservedRoomId',$reservedRoomId)
            ->with('room',$room)
            ->with('reserveCount',$reserveCount)
            ->with('customer_checkin',$customer_checkin)
            ->with('customer_checkout',$customer_checkout)
            ->with('roomCount',$roomCount);

    }
}
