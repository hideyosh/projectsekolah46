<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.profile.index',[
            'title' => 'My Profile',
            'data' => $data,
        ]);
    }
    public function edit()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.profile.edit',[
            'title' => 'Edit My Profile',
            'data' => $data,
        ]);
    }
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        // $update->username = $request->username;

        $update->update();
        return redirect()->route('profile.index');
    }
}
