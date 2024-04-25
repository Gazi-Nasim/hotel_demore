<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Room::get();
        return view('backend.pages.room.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view('backend.pages.room.index', compact('branches'));
        // dd('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'branch_id' => 'required',
            'name' => 'required',
            'details' => 'required',
            'details' => 'required',
            'price' => 'required',
            'size' => 'required',
            'view' => 'required',
            'view' => 'required',
            'person' => 'required',
            'wifi' => 'required',
            'bed' => 'required',
            'tv' => 'required',
            'ac' => 'required',
            'breakfast' => 'required',
            'lunch' => 'required',
            'dinner' => 'required',
            'dress' => 'required',
            'terrace' => 'required',
            'type' => 'required',
            'featured_photo' => 'required|mimes:jpg,jpeg,png',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'name.required' => 'Give Name',
            'featured_photo.required' => 'Give Photo',
        ]);

        $fileName = time() . "_" . $request->featured_photo->getClientOriginalName();
        $request->featured_photo->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['featured_photo'] = $fileName;
        Room::create($validatedData);
        session()->flash('success', 'Room Information Has Been Created !!');
        return redirect()->route('room.index');
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
        $branches = Branch::all();
        $edit = Room::findOrFail($id);
        return view('backend.pages.room.index', compact('edit', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'branch_id' => 'required',
            'name' => 'required',
            'details' => 'required',
            'details' => 'required',
            'price' => 'required',
            'size' => 'required',
            'view' => 'required',
            'view' => 'required',
            'person' => 'required',
            'wifi' => 'required',
            'bed' => 'required',
            'tv' => 'required',
            'breakfast' => 'required',
            'lunch' => 'required',
            'dinner' => 'required',
            'dress' => 'required',
            'terrace' => 'required',
            'ac' => 'required',
            'type' => 'required',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'name.required' => 'Give Name',
        ]);

        if (isset($request->featured_photo)) {
            $fileName = time() . "_" . $request->featured_photo->getClientOriginalName();
            $request->featured_photo->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['featured_photo'] = $fileName;
        }

        Room::find($id)->update($validatedData);
        session()->flash('success', 'Room Information Has Been Updated !!');
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Room::find($id)->delete();
        session()->flash('success', 'Room Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}
