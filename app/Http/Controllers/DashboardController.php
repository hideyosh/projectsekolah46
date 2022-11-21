<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;

// use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $admins = User::where('role', 'superadmin')->orWhere('role', 'admin')->count();
        $users = User::where('role', 'user')->count();
        $barangs = Barang::count();

        return view('admin.dashboard.index',[
            'title' => 'Dashboard',
            'users' => $users,
            'admins' => $admins,
            'barangs' => $barangs
        ]);
    }
}
