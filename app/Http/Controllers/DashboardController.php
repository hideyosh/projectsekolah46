<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;

// use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {

        $users = User::where('role','user')->count();
        $admins = User::where('role','admin')->count();
        $barangs = Barang::count();

        return view('admin.dashboard.index',[

            'title' => 'Dashboard',
            'users' => $users,
            'admins' => $admins,
            'barangs' => $barangs,
        ]);
    }
}
