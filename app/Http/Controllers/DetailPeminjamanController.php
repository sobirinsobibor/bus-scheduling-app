<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use App\Http\Requests\StoreDetailPeminjamanRequest;
use App\Http\Requests\UpdateDetailPeminjamanRequest;
use App\Models\Document;
use App\Models\Peminjaman;

class DetailPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDetailPeminjamanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailPeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailPeminjaman  $detailPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPeminjaman $detailPeminjaman)
    {
        $peminjaman_code = request('loanId');
        
        return view('dashboard.loan.details', [
            'loans' => Peminjaman::where('peminjaman_code', $peminjaman_code)->get(),
            'documents' => Document::where('peminjaman_id', $peminjaman_code)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPeminjaman  $detailPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPeminjaman $detailPeminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailPeminjamanRequest  $request
     * @param  \App\Models\DetailPeminjaman  $detailPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailPeminjamanRequest $request, DetailPeminjaman $detailPeminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPeminjaman  $detailPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPeminjaman $detailPeminjaman)
    {
        //
    }
}
