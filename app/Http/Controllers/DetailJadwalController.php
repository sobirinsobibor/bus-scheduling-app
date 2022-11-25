<?php

namespace App\Http\Controllers;

use App\Models\DetailJadwal;
use App\Http\Requests\StoreDetailJadwalRequest;
use App\Http\Requests\UpdateDetailJadwalRequest;
use App\Models\Area;
use App\Models\Bus;
use App\Models\Jadwal;
use App\Models\JadwalJam;

class DetailJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.schedule.index', [
            'jadwals' => DetailJadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.schedule.create', [
            'days' => Jadwal::all(),
            'routes' => Area::all(),
            'times' => JadwalJam::all(),
            'buses' => Bus::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetailJadwalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailJadwalRequest $request)
    {
        $validatedData = $request->validate([
            'jadwal_id' => 'required',
            'bus_id' => 'required',
            'keberangkatan_id' => 'required',
            'kedatangan_id' => 'required',
            'jam_keberangkatan_id' => 'required',
            'jam_kedatangan_id' => 'required',
        ]);

        // dd($validatedData);
        DetailJadwal::create($validatedData);
        
        return redirect('/dashboard/schedule')->with('success', "New Schedule Successfully Added!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailJadwal  $detailJadwal
     * @return \Illuminate\Http\Response
     */
    public function show(DetailJadwal $detailJadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailJadwal  $detailJadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailJadwal $detailJadwal )
    {

        $id = request('id');
        return view('dashboard.schedule.edit', [
            'detailJadwal' => $detailJadwal,
            'schedule' => DetailJadwal::where('id', $id)->get(),
            'days' => Jadwal::all(),
            'routes' => Area::all(),
            'times' => JadwalJam::all(),
            'buses' => Bus::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailJadwalRequest  $request
     * @param  \App\Models\DetailJadwal  $detailJadwal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailJadwalRequest $request, DetailJadwal $detailJadwal)
    {
        // dd($request->id);
        $validatedData = $request->validate([
            'jadwal_id' => 'required',
            'bus_id' => 'required',
            'keberangkatan_id' => 'required',
            'kedatangan_id' => 'required',
            'jam_keberangkatan_id' => 'required',
            'jam_kedatangan_id' => 'required',
        ]);

        // dd($validatedData);
        DetailJadwal::where('id', $request->id)->update($validatedData);
        
        return redirect('/dashboard/schedule')->with('success', "New Schedule Successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailJadwal  $detailJadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailJadwal $detailJadwal)
    {
        $id = request('id');
        DetailJadwal::destroy($id);
        return redirect('/dashboard/schedule')->with('success', "New Schedule Successfully deleted!");

    }
}
