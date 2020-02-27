<?php

namespace App\Http\Controllers;
use App\Golongan;

use Illuminate\Http\Request;

class AdminGolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Golongan::paginate(50);
        return view('admin.golongan.golongan')->with(['datas' => $datas]);
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
        
        $input = Golongan::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Golongan';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Golongan';
        }

        return back()->with($respon);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Golongan::where('id_golongan', $id)->first();
        return view('admin.golongan.formeditgolongan')->with(['data' => $data]);
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
        $data=$request->all();
        unset($data['_token']);
        $update = Golongan::where('id_golongan', $id)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Golongan';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Golongan';
        }

        return redirect()->route('homeAdminGolongan')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Golongan::where('id_golongan', $id)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Golongan';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Golongan';
        }

        return redirect()->route('homeAdminGolongan')->with($respon);
    }
}
