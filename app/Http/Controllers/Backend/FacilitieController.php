<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Facilitie;
use Illuminate\Http\Request;

class FacilitieController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data =Facilitie::get();
        return view('backend.pages.facility.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view('backend.pages.facility.index', compact('branches'));
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
            'icon' => 'required|mimes:jpg,jpeg,png',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'name.required' => 'Give Name',
            'details.required' => 'Give Details',
            'icon.required' => 'Give Photo',
        ]);

        $fileName = time() . "_" . $request->icon->getClientOriginalName();
        $request->icon->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['icon'] = $fileName;

        Facilitie::create($validatedData);
        session()->flash('success', 'Facility Information Has Been Created !!');
        return redirect()->route('facility.index');
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
        $edit =Facilitie::findOrFail($id);
        return view('backend.pages.facility.index', compact('edit', 'branches'));
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
        ], [
            'branch_id.required' => 'Give Branch Name',
            'name.required' => 'Give Name',
            'details.required' => 'Give Details',
        ]);

        if (isset($request->icon)) {
            $fileName = time() . "_" . $request->icon->getClientOriginalName();
            $request->icon->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['icon'] = $fileName;
        }

       Facilitie::find($id)->update($validatedData);
        session()->flash('success', 'Facility Information Has Been Updated !!');
        return redirect()->route('facility.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Facilitie::find($id)->delete();
        session()->flash('success', 'Facility Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}