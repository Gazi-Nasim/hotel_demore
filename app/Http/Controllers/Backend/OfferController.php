<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Offer::get();
        return view('backend.pages.offer.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view('backend.pages.offer.index', compact('branches'));
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
            'photo' => 'required|mimes:jpg,jpeg,png',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'name.required' => 'Give Name',
            'photo.required' => 'Give Photo',
        ]);

        $fileName = time() . "_" . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['photo'] = $fileName;
        Offer::create($validatedData);
        session()->flash('success', 'Offer Information Has Been Created !!');
        return redirect()->route('offer.index');
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
        $edit = Offer::findOrFail($id);
        return view('backend.pages.offer.index', compact('edit', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'branch_id' => 'required',
            'name' => 'required',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'name.required' => 'Give Name',
        ]);

        if (isset($request->photo)) {
            $fileName = time() . "_" . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['photo'] = $fileName;
        }

        Offer::find($id)->update($validatedData);
        session()->flash('success', 'Offer Information Has Been Updated !!');
        return redirect()->route('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Offer::find($id)->delete();
        session()->flash('success', 'Offer Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}