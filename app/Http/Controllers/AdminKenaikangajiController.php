<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kenaikangaji;

class AdminKenaikangajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kenaikangaji::paginate(5);
        return view('admin.layanankarir.kenaikangaji')->with(['datas' => $datas]);
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
        $data = $request->all();
        //$data['password'] = Hash::make($data['id_golongan']);
        // $data['level'] = 3;

        
        $input = Kenaikangaji::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Kenaikan Gaji';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Kenaikan Gaji';
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
        $data = Kenaikangaji::where('nik_nip', $nik_nip)->first();
        return view('admin.layanankarir.formeditkenaikangaji')->with(['data' => $data]);
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
        $update = Kenaikangaji::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Kenaikan Gaji';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Kenaikan Gaji';
        }

        return redirect()->route('homeAdminKenaikangaji')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = Kenaikangaji::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Kenaikan Gaji';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Kenaikan Gaji';
        }

        return redirect()->route('homeAdminKenaikangaji')->with($respon);
    }
}
