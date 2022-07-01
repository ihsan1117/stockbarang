<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Http\Requests\StorePengeluaranRequest;
use App\Http\Requests\UpdatePengeluaranRequest;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drpdwn_barang =  Pemasukan::all();

        $datas = Pengeluaran::all();
        return view('menu.pengeluaran',[
            'datas' => $datas,
            'drpdwn_barang' => $drpdwn_barang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengeluaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        // $data = new Pengeluaran([
        //     'namabarang' => $request->namabarang,
        //     'idbarang' => $request->idbarang,
        //     'deskripsi' => $request->deskripsi,
        //     'stock' => $request->stock,
        //     'penerima' => $request->penerima,
        // ]);
        // $data->save();
        Pengeluaran::create([
            'namabarang' => $request->namabarang,
            'idbarang' => $request->idbarang,
            'deskripsi' => $request->deskripsi,
            'stock' => $request->stock,
            'penerima' => $request->penerima,
        ]);

        $datas = Pengeluaran::all();

        return redirect('pengeluaran')->with('datas', $datas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengeluaranRequest  $request
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengeluaranRequest $request, Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        //
    }
}
