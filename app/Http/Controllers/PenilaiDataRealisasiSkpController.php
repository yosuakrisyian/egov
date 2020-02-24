<?php

namespace App\Http\Controllers;
use App\RealisasiSKP;
use App\User;

use Illuminate\Http\Request;

class PenilaiDataRealisasiSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where([
            ['level', '=',2],
            ['nik', '<>', Auth()->user()->nik]
        ])->paginate(5);
        return view('penilai.kinerja.datarealisasiskp')->with(['datas' => $datas]);
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
    public function store(Request $request, $nik)
    {
        // $data = $request->all();
        // // //$data['password'] = Hash::make($data['id_golongan']);
        // // // $data['level'] = 3;

        // $pegawaiDinilai = User::where('nik', $nik)->first();
        // $dataPenilai = Auth()->user();

        // $data['nik_penilai'] = $dataPenilai['nik'];
        // $data['nik_dinilai'] = $pegawaiDinilai['nik'];
        // // $data['nama'] = $pegawaiDinilai['name'];
        // // $data['golongan'] = $pegawaiDinilai['golongan'];
        // // $data['jabatan'] = $pegawaiDinilai['jabatan'];\

        // $input = RealisasiSKP::create($data);
        // $respon = array();
        // $respon['adaAksi'] = true;
        // if ($input) {
        //     $respon['sukses'] = true;
        //     $respon['pesan'] = 'Berhasil Input Realisasi SKP';
        // } else {
        //     $respon['sukses'] = false;
        //     $respon['pesan'] = 'Gagal Input Realisasi SKP';
        // }

        // return redirect()->route('homeDataPenilaiRealisasiSkp')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $datas = User::where('nik', $nik)->first();
        return view('penilai.kinerja.realisasiskp')->with(['datas' => $datas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
