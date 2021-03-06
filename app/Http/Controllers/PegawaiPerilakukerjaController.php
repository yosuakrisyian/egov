<?php

namespace App\Http\Controllers;
use App\Perilakukerja;
use App\User;

use Illuminate\Http\Request;

class PegawaiPerilakukerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Perilakukerja::paginate(50);
        return view('pegawai.tunjangankinerja.perilakukerja')->with(['datas' => $datas]);
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

        $belumAda = PerilakuKerja::wheremonth('created_at', date('m'))
        ->where([
            ['nik_penilai', '=', $dataPenilai['nik']],
            ['nik_dinilai', '=', $pegawaiDinilai['nik']]
        ])->first();
        $respon;
        // var_dump($belumAda);
        if (!$belumAda) {
            $input = Perilakukerja::create($data);
            $respon = array();
            $respon['adaAksi'] = true;
            if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Perilaku Kerja';
            } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Perilaku Kerja';
            }
            $respon = [
                'adaAksi' => true,
                'sukses' => true,
                'pesan' => 'Berhasil Menilai'
            ];

        } else {
            $respon = [
                'adaAksi' => true,
                'sukses' => false,
                'pesan' => 'Ada Sudah Menilai Pegawai Tersebut Bulan Ini'
            ];
        }
        return redirect()->route('homeDataPegawaiPerilakukerja')->with($respon);
        
        
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
        $delete = Perilakukerja::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Perilaku Kerja';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Perilaku Kerja';
        }

        return redirect()->route('homePegawaiPerilakukerja')->with($respon);
    }
}
