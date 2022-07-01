<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use App\Http\Requests\StorepemasukanRequest;
use App\Http\Requests\UpdatepemasukanRequest;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pemasukan::all();
        // dd($results);
        return view('menu.pemasukan',[
            'datas' => $datas,
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
     * @param  \App\Http\Requests\StorepemasukanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pemasukan::create([
            'namabarang' => $request->namabarang,
            'qty' => $request->qty,
            'penerima' => $request->penerima,
        ]);

        $datas = Pemasukan::all();

        return redirect('pemasukan')->with('datas', $datas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function show(pemasukan $pemasukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function edit(pemasukan $pemasukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepemasukanRequest  $request
     * @param  \App\Models\pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepemasukanRequest $request, pemasukan $pemasukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemasukan $pemasukan)
    {
        //
    }
}
