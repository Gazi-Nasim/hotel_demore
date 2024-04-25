<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Main_addres;
use Illuminate\Http\Request;

class Main_addresController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Main_addres::get();
        return view('backend.pages.main_address.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.main_address.index');
        // dd('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ], [
            'title.required' => 'Give Title',
            'address.required' => 'Give Address',
            'phone.required' => 'Give Phone No',
        ]);

        Main_addres::create($validatedData);
        session()->flash('success', 'Main Address Information Has Been Created !!');
        return redirect()->route('main_address.index');
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
        $edit = Main_addres::findOrFail($id);
        return view('backend.pages.main_address.index', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ], [
            'title.required' => 'Give Title',
            'address.required' => 'Give Address',
            'phone.required' => 'Give Phone No',
        ]);

        Main_addres::find($id)->update($validatedData);
        session()->flash('success', 'Main Address Information Has Been Updated !!');
        return redirect()->route('main_address.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Main_addres::find($id)->delete();
        session()->flash('success', 'Main Address Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}
