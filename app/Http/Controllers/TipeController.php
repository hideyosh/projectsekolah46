<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipe;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Tipe::latest()->paginate('5');

        return view('admin.tipe.index', [
            'types' => $type,
            'title' => 'Table Tipe'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipe.create',[
            'title' => 'Create Tipe'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tipe $tipe)
    {
        $request->validate([
            'nama_tipe' => ['required'],
        ]);

        $store = $request->all();
        $tipe->create($store);

        return to_route('tipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        return view('admin.tipe.view',[
            'title' => 'Detail Tipe',
            'tipe' => $tipe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        return view('admin.tipe.edit',[
            'title' => 'Edit Tipe',
            'tipe' => $tipe,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipe $tipe)
    {
        $request->validate([
            'nama_tipe' => 'required'
        ]);

        $update = $request->all();
        $tipe->update($update);

        return to_route('tipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        $tipe->delete();

        return to_route('tipe.index');
    }
}
