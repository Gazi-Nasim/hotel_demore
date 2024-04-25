<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Room;
use App\Models\Backend\Roomphoto;
use Illuminate\Http\Request;

class RoomphotoController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Roomphoto::get();
        return view('backend.pages.roomphoto.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();
        return view('backend.pages.roomphoto.index', compact('rooms'));
        // dd('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_id' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
        ], [
            'room_id.required' => 'Select Room',
            'photo.required' => 'Give Photo',
        ]);

        $fileName = time() . "_" . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['photo'] = $fileName;
        Roomphoto::create($validatedData);
        session()->flash('success', 'Room Photo Information Has Been Created !!');
        return redirect()->route('room_photo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $rooms = Room::all();
        $edit = Roomphoto::findOrFail($id);
        // dd($edit);
        return view('backend.pages.roomphoto.index', compact('edit', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'room_id' => 'required',
        ], [
            'room_id.required' => 'Select Room',
        ]);

        if (isset($request->photo)) {
            $fileName = time() . "_" . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['photo'] = $fileName;
        }

        Roomphoto::find($id)->update($validatedData);
        session()->flash('success', 'Room Photo Information Has Been Updated !!');
        return redirect()->route('room_photo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Roomphoto::find($id)->delete();
        session()->flash('success', 'Room Photo Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}
