<?php

namespace App\Http\Controllers;

use App\Models\StockBarang;
use App\Http\Requests\StoreStockBarangRequest;
use App\Http\Requests\UpdateStockBarangRequest;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;

class StockBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data_out = Pengeluaran::all();
        $datas = Pemasukan::all();
        return view('menu.stockbarang',[
            'datas' => $datas,
            'data_out' => $data_out,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStockBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockBarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockBarang  $stockBarang
     * @return \Illuminate\Http\Response
     */
    public function show(StockBarang $stockBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockBarang  $stockBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(StockBarang $stockBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockBarangRequest  $request
     * @param  \App\Models\StockBarang  $stockBarang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockBarangRequest $request, StockBarang $stockBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockBarang  $stockBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockBarang $stockBarang)
    {
        //
    }
}
