<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use App\Models\Order;

class HomeController extends Controller
{
    public function create()
    {
        $order = Order::with('barang', 'user')->get();
        $barang = Barang::with('order')->get();
        $user = User::with('order')->get();

        return view('user.home',[
            'title' => 'Create Pesanan',
            'order' => $order,
            'barang' => $barang,
            'user' => $user
        ]);
    }
    public function store(Request $request, Order $order)
    {
        $request->validate([
            'nama_barang' => ['required'],
            'jumlah' => ['required'],
        ]);

        $store = $request->all();
        $order->create($store);

        return;

    }
}
