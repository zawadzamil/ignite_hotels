<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
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

        $request->image->move(public_path('assets/hotel/images'), $imageName);
        $hotel = Hotel::create([
            'name' =>$request -> name,
            'location' =>$request -> location,
            'image' =>$imageName,
            'description' =>$request -> description,
            'hotel_facilities' =>$request -> hotel_facilities,
            'room_facilities' =>$request -> room_facilities,
            'landmark' =>$request -> landmark,
            'safety' =>$request -> safety,
        ]);
        $hotel->save();
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
        $hotels = Hotel::all();
        return view('admin.see_hotels')->with('hotels',$hotels);
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

    public function showHotel($id)
    {
        $hotel = Hotel::where('id',$id)->get();
       return view('hotel')->with('hotel',$hotel);
    }
}
