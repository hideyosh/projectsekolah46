<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Barang;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::with('barang')->get();
        $barang = Barang::with('order')->get();

        $admins = User::where('role', 'superadmin')->orWhere('role', 'admin')->count();
        $users = User::where('role', 'user')->count();
        $barangs = Barang::count();

        return view('dashboard.index',[
            'title1' => 'Dashboard',
            'title2' => 'Create Pesanan',
            'users' => $users,
            'admins' => $admins,
            'barangs' => $barangs,
            'order' => $order,
            'barang' => $barang,
        ]);


    }
}
