<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\General_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralinfoController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            // dd($this->user);
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }
        $edit = General_info::first();
        // dd($data);
        return view('backend.pages.generalinfo.index', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'logo' => 'required',
            'about_short' => 'required',
            'about_full' => 'required',
            'reservation' => 'required',
            'whatsapp' => 'required',
            'fb' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'pinterest' => 'required',
        ], [
            'name.required' => 'Give the Company Name',
        ]);

        $fileName = time() . "_" . $request->logo->getClientOriginalName();
        $request->logo->move(public_path('uploads/pictures/'), $fileName);
        $validatedData['logo'] = $fileName;
        // dd($validatedData);
        General_info::create($validatedData);
        session()->flash('success', 'General Information Has Been Created !!');
        return redirect()->route('general.create');
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
        dd("edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }

        $validatedData = $request->validate([
            'name' => 'required',
            // 'logo' => 'required',
            'about_short' => 'required',
            'about_full' => 'required',
            'reservation' => 'required',
            'whatsapp' => 'required',
            'fb' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'pinterest' => 'required',
        ], [
            'name.required' => 'Give the Company Name',
        ]);

        if (isset($request->logo)) { 
            $fileName = time() . "_" . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('uploads/pictures/'), $fileName);
            $validatedData['logo'] = $fileName;
        }

        // General_info::find($id)->delete();
        General_info::find($id)->update($validatedData);
        session()->flash('success', 'General Information Has Been Created !!');
        return redirect()->route('general.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }
    }
}
