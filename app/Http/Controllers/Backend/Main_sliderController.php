<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Main_slider;
use Illuminate\Http\Request;

class Main_sliderController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Main_slider::get();
        return view('backend.pages.main_slider.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.main_slider.index');
        // dd('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'link' => 'required',
        ], [
            'title_1.required' => 'Give Title 1',
            'title_2.required' => 'Give Title 2',
            'photo.required' => 'Give Photo',
            'link.required' => 'Give Link',
        ]);

        $fileName = time() . "_" . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['photo'] = $fileName;

        Main_slider::create($validatedData);
        session()->flash('success', 'Main Slider Information Has Been Created !!');
        return redirect()->route('main_slider.index');
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
        $edit = Main_slider::findOrFail($id);
        return view('backend.pages.main_slider.index', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'link' => 'required',
        ], [
            'title_1.required' => 'Give Title 1',
            'title_2.required' => 'Give Title 2',
            'link.required' => 'Give Link',
        ]);

        if(isset($request->photo) ){
            $fileName = time() . "_" . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['photo'] = $fileName;
        }
        
        Main_slider::find($id)->update($validatedData);
        session()->flash('success', 'Main Slider Information Has Been Updated !!');
        return redirect()->route('main_slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Main_slider::find($id)->delete();
        session()->flash('success', 'Main Slider Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}
