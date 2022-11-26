<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BasicuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basicuser = User::latest()->where('role', 'user')->paginate(5);
        return view('admin.basicuser.index',[
            'title' => 'User Table',
            'basicusers' => $basicuser,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('superadmin');

        return view('admin.basicuser.create',[
            'title' => 'Create User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $basicuser)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'role' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        $store = $request->all();
        $store['password'] = Hash::make($request->password);
        $basicuser->create($store);

        return redirect()->route('basicuser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $basicuser)
    {
        return view('admin.basicuser.view',[
            'title' => 'Detail User',
            'basicuser' => $basicuser,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $basicuser)
    {
        $this->authorize('superadmin');

        return view('admin.basicuser.edit',[
            'title' => 'Edit User',
            'basicuser' => $basicuser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $basicuser)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'role' => ['required'],
            // 'password' => ['required'];
        ]);

        $update = $request->all();

        if ($request->filled('password')) {
            $update['password'] = Hash::make($request->password);
        }

        $basicuser->update($update);

        return redirect()->route('basicuser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $basicuser)
    {
        $basicuser->delete();
        return redirect()->route('basicuser.index');
    }
}
