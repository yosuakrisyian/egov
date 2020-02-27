<?php

namespace App\Http\Controllers;
use App\User;
use App\Penilaihasiltpp;
use PDF;

use Illuminate\Http\Request;

class PegawaiSliptppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::join('tb_hasiltpp', 'tb_hasiltpp.nik', '=', 'users.nik')
                        ->where([
                            ['users.nik', '=', Auth()->user()->nik]
                        ])->paginate(50);
        return view('pegawai.tunjangankinerja.daftarslip')->with(['datas' => $datas]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lihat($nik)
    {
        
        $data = User::join('tb_hasiltpp', 'tb_hasiltpp.nik', '=', 'users.nik')
                        ->where([
                            ['users.nik', '=', Auth()->user()->nik]
                        ])->first();
        $pdf = PDF::loadView('pegawai.tunjangankinerja.sliptpp', ['data' => $data], [])->setPaper('legal', 'potrait');
        return $pdf->stream('surat.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
