<?php

namespace App\Http\Controllers;
use App\Kabagkenaikanpangkat;

use Illuminate\Http\Request;

class KabagKenaikanpangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kabagkenaikanpangkat::paginate(5);
        return view('kepalabagian.layanankarirkabag.kabagkenaikanpangkat')->with(['datas' => $datas]);
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
        // $data = $request->all();
        // //$data['password'] = Hash::make($data['id_golongan']);
        // // $data['level'] = 3;

        
        // $input = Pegawaikenaikanpangkat::create($data);
        // $respon = array();
        // $respon['adaAksi'] = true;
        // if ($input) {
        //     $respon['sukses'] = true;
        //     $respon['pesan'] = 'Berhasil Input Kenaikan Pangkat';
        // } else {
        //     $respon['sukses'] = false;
        //     $respon['pesan'] = 'Gagal Input Kenaikan Pangkat';
        // }

        // return back()->with($respon);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_nip)
    {
        // $data = Pegawaikenaikanpangkat::where('nik_nip', $nik_nip)->first();
        // return view('pegawai.layanankarirpegawai.formeditpegawaikenaikanpangkat')->with(['data' => $data]);
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

    public function terima($id)
    {
        $update = Kabagkenaikanpangkat::where('id_kenaikan_pangkat', $id)
                    ->update([
                        'status' => 1
                    ]);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Menerima Kenaikan Pangkat';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Menerima Kenaikan Pangkat';
        }

        return redirect()->route('homeKabagKenaikanpangkat')->with($respon);
                        
    }

    public function tolak($id)
    {
        $update = Kabagkenaikanpangkat::where('id_kenaikan_pangkat', $id)
                    ->update([
                        'status' => 2
                    ]);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Menolak Kenaikan Pangkat';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Menolak Kenaikan pangkat';
        }

        return redirect()->route('homeKabagKenaikanpangkat')->with($respon);
                        
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
        // $data=$request->all();
        // unset($data['_token']);
        // $update = Pegawaikenaikanpangkat::where('nik_nip', $nik_nip)->update($data);
        // $respon = array();
        // $respon['adaAksi'] = true;
        // if ($update) {
        //     $respon['sukses'] = true;
        //     $respon['pesan'] = 'Berhasil Edit Kenaikan Pangkat';
        // } else {
        //     $respon['sukses'] = false;
        //     $respon['pesan'] = 'Gagal Edit Kenaikan Pangkat';
        // }

        // return redirect()->route('homePegawaiKenaikanpangkat')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = Kabagkenaikanpangkat::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Kenaikan Pangkat';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Kenaikan Pangkat';
        }

        return redirect()->route('homeKabagKenaikanpangkat')->with($respon);
    }
}
