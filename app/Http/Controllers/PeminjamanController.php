<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Document;
use App\Models\User;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.loan.index', [
            'loans' => Peminjaman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.loan.create', [
            'users' => User::all() 
        ]);
    }

    function slug($string){
        $slug = trim($string); // trim the string
        $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
        $slug= str_replace(' ','-', $slug); // replace spaces by dashes
        $slug= strtolower($slug).mt_rand(1,9);  // make it lowercase
        return $slug;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeminjamanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeminjamanRequest $request)
    {
        $countPeminjaman = Peminjaman::where('tgl_peminjaman_mulai', $request->tgl_peminjaman_mulai)->count();
        $peminjaman_code = $request->tgl_peminjaman_mulai.".".$countPeminjaman+1;
        // dd($peminjaman_code);
        $validatedData = $request->validate([
            'user_id' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'tgl_peminjaman_mulai' => 'required',
            'time_peminjaman_mulai' => 'required',
            'tgl_peminjaman_selesai' => 'required',
            'time_peminjaman_selesai' => 'required',
        ]) ;
        $validatedData['accepted'] = false;
        $validatedData['peminjaman_code'] = $peminjaman_code;

        $validatedFile = $request->validate([
            'document' => 'required'
        ]);

        $countDocs = count($request->document);
        $docs = [];

        $fileFolder = 'data_file';
        for($i = 0; $i < $countDocs; $i++){
            $docs[] = [
                'peminjaman_id' => $peminjaman_code,
                'document' => $this->slug($request->document[$i]->getClientOriginalName())
            ];
            $file = $request->file('document');
            $fileName = $docs[$i]['document'].".".$request->document[$i]->getClientOriginalExtension();
            // $fileName = $this->slug($request->document[$i]->getClientOriginalName()).".".$request->document[$i]->getClientOriginalExtension();
            $file[$i]->move($fileFolder, $fileName);
        }

        // dd($file[0]);

        

        Peminjaman::create($validatedData);
        Document::insert($docs);
        return redirect('/dashboard/loan')->with('success', "New Loan Successfully Added!");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeminjamanRequest  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
