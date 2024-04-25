<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'All User';
        $data = User::orderBy('id', 'desc')->get();
        return view('backend.pages.users.list', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles  = Role::all();
        return view('backend.pages.users.index', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $exist_user = User::where('email', $request->email)->get();
        // dd($exist_user[0]['email']);

        if ($request->email== $exist_user[0]['email']) {
            session()->flash('success', 'E-mail exists choose another !!');
            return redirect()->route('user.create');
        }
        User::create($validatedData);
        session()->flash('success', 'User Has Been Created !!');
        return redirect()->route('user.index');
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
        $edit = User::findOrFail($id);
        $roles  = Role::all();
        return view('backend.pages.users.index', compact('edit', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($request->password != null) {
            $validatedData['password'] = Hash::make($request->password);
        }
        // dd($validatedData);
        User::find($id)->update($validatedData);
        session()->flash('success', 'User Has Been Updated !!');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        session()->flash('success', 'User Has Been Deleted !!');
        return back();
    }
}
