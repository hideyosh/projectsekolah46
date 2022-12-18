<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('change_password.index',[
            'title' => 'Change Password',
        ]);
    }
    public function update(Request $request)
    {
            $request->validate([
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirm_password' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $users = User::find(Auth::id());
                $users->password = Hash::make($request->newpassword);
                $users->save();

                session()->flash('message','Password Berhasil DiGanti');
                return redirect()->back();
            } else{
                session()->flash('message','password lama tidak cocok');
                return redirect()->back();
            }
    }
}
