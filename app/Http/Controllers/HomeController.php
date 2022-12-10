<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function create()
    {
        $order = Order::with('barang')->get();
        $barang = Barang::with('order')->get();
        // $user = User::with('order')->get();

        return view('user.home',[
            'title' => 'Create Pesanan',
            'order' => $order,
            'barang' => $barang,
            // 'user' => $user
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
