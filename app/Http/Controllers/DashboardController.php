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
        $orders = Order::count();

        return view('dashboard.index',[
            'title1' => 'Dashboard',
            'users' => $users,
            'admins' => $admins,
            'barangs' => $barangs,
            'orders' => $orders,

            'title2' => 'Create Pesanan',
            'order' => $order,
            'barang' => $barang
        ]);
    }

    public function store(Request $request, Order $order)
    {
        $request->validate([
            'barang_id' => ['required'],
            'jumlah' => ['required'],
            'pesan' => ['nullable']
        ]);

        $request['user_id'] = auth()->user()->id;

        $store = $request->all();
        $order->create($store);

        return redirect()->back();

    }
}
