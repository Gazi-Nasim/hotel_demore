<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Branchslider;
use Illuminate\Http\Request;

class BranchsliderController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = Branchslider::get();        
        return view('backend.pages.branchslider.list', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view('backend.pages.branchslider.index', compact('branches'));
        // dd('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'branch_id' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'title_1.required' => 'Give Title One',
            'title_2.required' => 'Give Title Two',
            'photo.required' => 'Give Photo',
        ]);

        $fileName = time() . "_" . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['photo'] = $fileName;

        Branchslider::create($validatedData);
        session()->flash('success', 'Branch Information Has Been Created !!');
        return redirect()->route('branchslider.index');
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
        $edit = Branchslider::findOrFail($id);
        return view('backend.pages.branchslider.index', compact('edit', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'branch_id' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
        ], [
            'branch_id.required' => 'Give Branch Name',
            'title_1.required' => 'Give Title One',
            'title_2.required' => 'Give Title Two',
        ]);

        if (isset($request->photo)) {
            $fileName = time() . "_" . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['photo'] = $fileName;
        }
        
        Branchslider::find($id)->update($validatedData);
        session()->flash('success', 'Branch Slider Information Has Been Updated !!');
        return redirect()->route('branchslider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Branchslider::find($id)->delete();
        session()->flash('success', 'Branch Slider Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}
