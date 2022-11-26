<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::latest()->paginate(5);
        return view('admin.merk.index',[
            'title' => 'Table Merk',
            'merks' => $merk
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merk.create',[
            'title' => 'Create Merk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Merk $merk)
    {
        $request->validate([
            'nama_merk' => ['required']
        ]);

        $store = $request->all();
        $merk->create($store);

        return to_route('merk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        return view('admin.merk.view',[
            'merk' => $merk,
            'title' => 'Detail Merk'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Merk $merk)
    {
        return view('admin.merk.edit',[
            'title' => 'Edit Merk',
            'merk' => $merk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merk $merk)
    {
        $request->validate([
            'nama_merk' => 'required'
        ]);

        $update = $request->all();
        $merk->update($update);

        return to_route('tipe.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk)
    {
        $merk->delete();
        return to_route('merk.index');
    }
}
