<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where('level', 2)->paginate(5);
        return view('admin.pegawai.pegawai')->with(['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // return view('admin.pegawai.forminputpegawai')-with(['datas' => $datas]);
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
        $data['password'] = Hash::make($data['nik']);
        // $data['level'] = 3;
        
        $input = User::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Pegawai';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Pegawai';
        }

        return back()->with($respon);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $data = User::where('nik', $nik)->first();
        return view('admin.pegawai.formeditpegawai')->with(['data' => $data]);
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
    public function update(Request $request, $nik)
    {
        $data=$request->all();
        unset($data['_token']);
        $update = User::where('nik', $nik)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Pegawai';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Pegawai';
        }

        return redirect()->route('homeAdminPegawai')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        $delete = User::where('nik', $nik)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Pegawai';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Pegawai';
        }

        return redirect()->route('homeAdminPegawai')->with($respon);
    }
}
