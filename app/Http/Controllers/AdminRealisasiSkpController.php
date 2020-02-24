<?php

namespace App\Http\Controllers;
use App\RealisasiSKP;

use Illuminate\Http\Request;

class AdminRealisasiSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = RealisasiSKP::paginate(5);
        return view('admin.kinerja.realisasiskp')->with(['datas' => $datas]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //$data['password'] = Hash::make($data['id_golongan']);
        // $data['level'] = 3;

        
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

        return back()->with($respon);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_nip)
    {
        $data = RealisasiSKP::where('nik_nip', $nik_nip)->first();
        return view('admin.kinerja.adminformeditrealisasiskp')->with(['data' => $data]);


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
    public function update(Request $request, $nik_nip)
    {
        $data=$request->all();
        unset($data['_token']);
        $update = RealisasiSKP::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Realisasi Skp';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Realisasi SKP';
        }

        return redirect()->route('homeAdminRealisasiSkp')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = RealisasiSKP::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Realisasi SKP';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Realisasi SKP';
        }

        return redirect()->route('homeAdminRealisasiSkp')->with($respon);
    }
}
