<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::paginate(5);
        return view('admin.barang.index',[
            'barangs' => $barang,
            'title' => 'Table Barang'
        ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barang.create',[
            'title' => 'Create Barang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangRequest $request)
    {
        // $request->validate([
        //     'nama_barang' => ['required'],
        //     'merk' => ['required'],
        //     'tipe' => ['required'],
        //     'jumlah_barang' => ['required'],
        //     // 'gambar' => ['nullable'],
        // ]);

        // $store = $request->all();
        // $barang->create($store);
        $store = $request->validated();
        Barang::create($store);

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('admin.barang.view', [
            'title' => 'Detail Barang',
            'barang' => $barang,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('admin.barang.edit',[
            'title' => 'Edit Barang',
            'barang' => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BarangRequest $request, Barang $barang)
    {
        // $request->validate([
        //     'nama_barang' => ['required'],
        //     'merk' => ['required'],
        //     'tipe' => ['required'],
        //     'jumlah_barang' => ['required'],
        //     // 'gambar' => ['nullable'],
        // ]);

        // $update = $request->all();
        // $barang->update($update);

        $update = $request->validated();
        $barang->update($update);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
