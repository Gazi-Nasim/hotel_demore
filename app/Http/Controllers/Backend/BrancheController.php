<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrancheController extends Controller
{
    
    // public $user;
    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next) {
    //         $this->user = Auth::guard('web')->user();
    //         // dd($this->user);
    //         return $next($request);
    //     });
    // }

    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }

        $data = Branch::get();
        return view('backend.pages.branch.list', compact('data'));

        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }

        return view('backend.pages.branch.index');
        // dd('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'about_text' => 'required',
            'feature_photo' => 'required|mimes:jpg,jpeg,png',
            'about_photo_1' => 'required|mimes:jpg,jpeg,png',
            'about_photo_2' => 'required|mimes:jpg,jpeg,png',
            'about_photo_3' => 'required|mimes:jpg,jpeg,png',
            'map' => 'required',
            'video' => 'required',
            'about_banner' => 'required',
            'contact_banner' => 'required',
        ], [
            'name.required' => 'Give the Branch Name',
        ]);

        $feature_photo = time() . "_" . $request->feature_photo->getClientOriginalName();
        $request->feature_photo->move(public_path('uploads/pictures/'), $feature_photo);
        $validatedData['feature_photo'] = $feature_photo;
        
        $about_photo_1 = time() . "_" . $request->about_photo_1->getClientOriginalName();
        $request->about_photo_1->move(public_path('uploads/pictures/'), $about_photo_1);
        $validatedData['about_photo_1'] = $about_photo_1;

        $about_photo_2 = time() . "_" . $request->about_photo_2->getClientOriginalName();
        $request->about_photo_2->move(public_path('uploads/pictures/'), $about_photo_2);
        $validatedData['about_photo_2'] = $about_photo_2;

        $about_photo_3 = time() . "_" . $request->about_photo_3->getClientOriginalName();
        $request->about_photo_3->move(public_path('uploads/pictures/'), $about_photo_3);
        $validatedData['about_photo_3'] = $about_photo_3;

        /*
        controller comment
        $video = time() . "_" . $request->video->getClientOriginalName();
        $request->video->move(public_path('uploads/videos/'), $video);
        $validatedData['video'] = $video;
        */

        Branch::create($validatedData);
        session()->flash('success', 'Branch Information Has Been Created !!');
        return redirect()->route('branch.index');
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
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }
        $edit = Branch::findOrFail($id);
        return view('backend.pages.branch.index', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'about_text' => 'required',
            'map' => 'required',
            'about_banner' => 'required',
            'contact_banner' => 'required',
        ], [
            'name.required' => 'Give the Branch Name',
        ]);

        if (isset($request->about_photo_1)) {
            $about_photo_1 = time() . "_" . $request->about_photo_1->getClientOriginalName();
            $request->about_photo_1->move(public_path('uploads/pictures/'), $about_photo_1);
            $validatedData['about_photo_1'] = $about_photo_1;
        }

        if (isset($request->feature_photo)) {
            $feature_photo = time() . "_" . $request->feature_photo->getClientOriginalName();
            $request->feature_photo->move(public_path('uploads/pictures/'), $feature_photo);
            $validatedData['feature_photo'] = $feature_photo;
        }

        if (isset($request->about_photo_2)) {
            $about_photo_2 = time() . "_" . $request->about_photo_2->getClientOriginalName();
            $request->about_photo_2->move(public_path('uploads/pictures/'), $about_photo_2);
            $validatedData['about_photo_2'] = $about_photo_2;
        }

        if (isset($request->about_photo_3)) {
            $about_photo_3 = time() . "_" . $request->about_photo_3->getClientOriginalName();
            $request->about_photo_3->move(public_path('uploads/pictures/'), $about_photo_3);
            $validatedData['about_photo_3'] = $about_photo_3;
        }

        /*if (isset($request->video)) {
            $video = time() . "_" . $request->video->getClientOriginalName();
            $request->video->move(public_path('uploads/videos/'), $video);
            
        }*/
        $validatedData['video'] = $request->video;
        Branch::find($id)->update($validatedData);
        session()->flash('success', 'Branch Information Has Been Updated !!');
        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }
        Branch::find($id)->delete();
        session()->flash('success', 'Branch Has Been Deleted !!');
        return back();
        // dd('destroy');
    }
}
