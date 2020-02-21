<?php

namespace App\Http\Controllers;
use App\TargetSKP;

use Illuminate\Http\Request;

class PegawaiTargetSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = TargetSKP::whereYear('waktu', date('Y'))
                            ->where('nik_nip', Auth()->user()->nik)
                           ->paginate(5);
        return view('pegawai.kinerja.targetskp')->with(['datas' => $datas, 'withInputButton' => true]);
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
        $dataUser = Auth()->user();
        $nik = $dataUser->nik;
        $nama = $dataUser->name;
        $golongan = $dataUser->golongan;
        $jabatan = $dataUser->jabatan;

        $data = $request->all();
        $data['nik_nip'] = $nik;
        $data['nama'] = $nama;
        $data['golongan'] = $golongan;
        $data['jabatan'] = $jabatan;
        // array_push($data, [
        //     'nik_nip' => $nik,
        //     'nama' => $nama,
        //     'golongan' => $golongan,
        //     'jabatan' => $jabatan
        // ]);

        // $data = $request->all();

        // var_dump($data);
        $input = TargetSKP::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Target SKP';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Target SKP';
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
        $data = TargetSKP::where('nik_nip', $nik_nip)->first();
        return view('pegawai.kinerja.pegawaiformedittargetskp')->with(['data' => $data]);


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
        $update = TargetSKP::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Target Skp';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Target SKP';
        }

        return redirect()->route('homePegawaitargetskp')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = TargetSKP::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Target SKP';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Target SKP';
        }

        return redirect()->route('homePegawaitargetskp')->with($respon);
    }
}
