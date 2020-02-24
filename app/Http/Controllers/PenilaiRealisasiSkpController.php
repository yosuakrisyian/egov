<?php

namespace App\Http\Controllers;
use App\RealisasiSkp;
use App\User;

use Illuminate\Http\Request;

class PenilaiRealisasiSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = RealisasiSKP::paginate(5);
        return view('penilai.kinerja.realisasiskp')->with(['datas' => $datas]);
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
        $data = $request->all();
        //$data['password'] = Hash::make($data['id_golongan']);
        // $data['level'] = 3;

        $pegawaiDinilai = User::where('nik', $nik)->first();
        $dataPenilai = Auth()->user();

        $data['nik_penilai'] = $dataPenilai['nik'];
        $data['nik_dinilai'] = $pegawaiDinilai['nik'];

        
        $input = RealisasiSKP::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Realisasi SKP';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Realisasi SKP';
        }

        return redirect()->route('homeDataPenilaiRealisasiSkp')->with($respon);
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
    public function destroy($nik_nip)
    {
        $delete = RealisasiSkp::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Realisasi SKP';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Realisasi SKP';
        }

        return redirect()->route('homePenilaiRealisasiSkp')->with($respon);
    }
}
