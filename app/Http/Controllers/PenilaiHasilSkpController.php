<?php

namespace App\Http\Controllers;
use App\RealisasiSKP;
use App\TargetSKP;
use Illuminate\Http\Request;
use App\HasilSKP;

class PenilaiHasilSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nik)
    {
        $datas = TargetSKP::where('nik_dinilai', $nik)
                            ->select('tb_targetskp.*',
                                'tb_realisasiskp.kuantitas as kuantitasRealisasi',
                                'tb_realisasiskp.kualitas as kualitasRealisasi',
                                'tb_realisasiskp.waktu as waktuRealisasi'
                            )
                            ->join('tb_realisasiskp', 'tb_targetskp.nik_nip', '=', 'tb_realisasiskp.nik_dinilai')
                            ->get()->toArray();
        $newData = array();
        $jumlah = sizeof($datas);
        $totalCapaianSKP = 0;
        $hasil;
        foreach ($datas as $data) {
            $aspekKuantitas = ($data['kuantitasRealisasi'] / $data['kuantitas'] ) * 100;
            $aspekKualitas = ($data['kualitasRealisasi'] / $data['kualitas'] ) * 100;
            $aspekWaktu = ((1.76 *  $data['waktu'] - $data['waktuRealisasi']) * 100) / $data['waktu'];
            $total = $aspekKuantitas + $aspekKualitas + $aspekWaktu;
            $capaianSKP = $total / $jumlah;
            $totalCapaianSKP += $capaianSKP;
            array_push($newData, [
                'data' => $data,
                'aspekKuantitas' => $aspekKuantitas,
                'aspekKualitas' => $aspekKualitas,
                'aspekWaktu' => $aspekWaktu,
                'totalPenghitunganSKP' => $total,
                'total' => $capaianSKP
            ]);
        }
        $hasil = $totalCapaianSKP / $jumlah;
        $predikat;
        if ($hasil >= 91) {
            $predikat = 'Sangat Baik';
        } else if ($hasil >= 76) {
            $predikat = 'Baik';
        } else if ($hasil >= 61) {
            $predikat = 'Cukup';
        } else if ($hasil >= 51) {
            $predikat = 'Kurang';
        } else {
            $predikat = 'Buruk';
        }

        $dataInsert = [
            'nik' => $nik,
            'nilai_capaian_skp_akhir' => $hasil,
            'predikat' =>$predikat
        ];

        $cek = HasilSKP::where('nik', $nik)->first();
        if (!$cek) {
            HasilSKP::insert($dataInsert);
        }
        return view('penilai.kinerja.hasilskp')->with(['datas' => $newData, 'totalCapaian' => $hasil, 'predikat' => $predikat]);
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
