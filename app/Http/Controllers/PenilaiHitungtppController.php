<?php

namespace App\Http\Controllers;
use App\User;
use App\HasilSKP;
use App\Perilakukerja;
use App\Kehadirankerja;
use App\Penilaihasiltpp;

use Illuminate\Http\Request;

class PenilaiHitungtppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where('level', 2)->paginate(50);
        return view('penilai.tunjangankinerjapenilai.daftarhitungtpp')->with(['datas' => $datas]);
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
    public function show($nik)
    {
        $datas = User::where('nik', $nik)->first();
        $hasilSKP = HasilSKP::where('nik', $nik)->first();
        if (!$hasilSKP) {
            return redirect()->route('homePenilaiDatatpp')->with([
                'adaAksi' => true,
                'sukses' => false,
                'pesan' => 'Mohon Hitung SKP'
            ]);
        }
        $nilai = Perilakukerja::where('nik_dinilai', $nik)->get()->toArray();
        // var_dump($nilai[0]['komitmen']);

        $jumlah = sizeof($nilai);
        $totalIntegritas = 0;
        $totalorientasiPelayanan = 0;
        $totalKomitment = 0;
        $totalDisiplin = 0;
        $totalKerjasama = 0;
        $totalKepemimpinan = 0;
        for ($i=0; $i < $jumlah; $i++) {
            $totalIntegritas += $nilai[$i]['integritas'];
            $totalorientasiPelayanan += $nilai[$i]['orientasi_pelayanan'];
            $totalKomitment += $nilai[$i]['komitmen'];
            $totalDisiplin += $nilai[$i]['disiplin'];
            $totalKerjasama += $nilai[$i]['kerjasama'];
            $totalKepemimpinan += $nilai[$i]['kepemimpinan'];
        }
        $totalSkor = (($totalIntegritas / $jumlah) + ($totalorientasiPelayanan / $jumlah) + ($totalKomitment / $jumlah) + ($totalDisiplin / $jumlah) + ($totalKerjasama / $jumlah) + ($totalKepemimpinan / $jumlah)) / 6;
        $newData = [
            'totalIntegritas' => $totalIntegritas,
            'rataRataIntegritas' => $totalIntegritas / $jumlah,
            'totalOrientasiPelayanan' => $totalorientasiPelayanan,
            'rataRataOrientasiPelayanan' => $totalorientasiPelayanan / $jumlah,
            'totalKomitmen' => $totalKomitment,
            'rataRataKomitmen' => $totalKomitment / $jumlah,
            'totalDisiplin' => $totalDisiplin,
            'rataRataDisiplin' => $totalDisiplin / $jumlah,
            'totalKerjasama' => $totalKerjasama,
            'rataRataKerjasama' => $totalKerjasama / $jumlah,
            'totalKepemimpinan' => $totalKepemimpinan,
            'rataRataKepemimpinan' => $totalKepemimpinan / $jumlah,
            'totalSkor' => $totalSkor
        ];
        $absen = Kehadirankerja::where('nik', $nik)->first();
        if (!$absen) {
            return redirect()->route('homePenilaiDatatpp')->with([
                'adaAksi' => true,
                'sukses' => false,
                'pesan' => 'Mohon Input Absen Pegawai'
            ]);
        }

        $alreadyHitungTpp = Penilaihasiltpp::where('nik', $nik)->first();
        $sudahHitungTpp;
        if ($alreadyHitungTpp) {
            $sudahHitungTpp = true;
        } else {
            $sudahHitungTpp = false;
        }
        // var_dump($sudahHitungTpp);
        return view('penilai.tunjangankinerjapenilai.lanjuthitung')
                ->with([
                    'datas' => $datas,
                    'hasilSKP' => $hasilSKP,
                    'hasil' => $newData,
                    'absen' => $absen,
                    'sudahHitungTpp' => $sudahHitungTpp
                ]);
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
