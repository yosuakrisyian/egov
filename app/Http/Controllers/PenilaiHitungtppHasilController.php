<?php

namespace App\Http\Controllers;
use App\Kehadirankerja;
use App\User;
use App\Golongan;
use App\Penilaihasiltpp;

use Illuminate\Http\Request;

class PenilaiHitungtppHasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        $absen = Kehadirankerja::where('nik', $nik)->first()->toArray();
        $persentaseKehadiran = ($absen['jumlahhadir'] / 24) * 100;
        $nilaiKinerjaKehadiran;
        if ($persentaseKehadiran == 100) {
            $nilaiKinerjaKehadiran = 100;
        } else if ($persentaseKehadiran >= 80) {
            $nilaiKinerjaKehadiran = 75;
        } else if ($persentaseKehadiran >= 50) {
            $nilaiKinerjaKehadiran = 50;
        } else {
            $nilaiKinerjaKehadiran = 25;
        }
        $skorKehadiran = ($nilaiKinerjaKehadiran / 100 ) * 50;
        $nilaiCapaian = $request->nilaiCapaian;
        $skorCapaian = ($nilaiCapaian / 100) * 50;

        $totalSkor = $skorKehadiran + $skorCapaian;

        $user = User::where('nik', $nik)->first();
        $golonganUser = $user->golongan;

        $dataGolongan = Golongan::where('golongan', $golonganUser)->first();
        $besaranDasar = $dataGolongan->besaran_dasar;
        
        $hasilTpp = ($totalSkor / 100) * $besaranDasar;
        $nominalabsen = ($skorKehadiran / 100) * $besaranDasar;
        $nominalcapaian = ($skorCapaian / 100) * $besaranDasar;

        // var_dump($hasilTpp);
        $data = [
            'nik' => $nik,
            'jumlahabsen' => $absen['jumlahhadir'],
            'nilai_capaiankinerja' => $nilaiCapaian,
            'hasiltpp' => $hasilTpp,
            'persenabsen' => $persentaseKehadiran,
            'skorabsen' => $skorKehadiran,
            'nominalabsen' => $nominalabsen,
            'skorcapaian' => $skorCapaian,
            'nominalcapaian' => $nominalcapaian
        ];
        $insert = Penilaihasiltpp::insert($data);
        $respon;
        if ($insert) {
           $respon = [
               'adaAksi' => true,
               'sukses' => true,
               'pesan' => 'Berhasil Input TPP'
           ];
        } else {
            $respon = [
                'adaAksi' => true,
                'sukses' => false,
                'pesan' => 'Gagal Input TPP'
            ];
        }
        return redirect()->route('homePenilaiDatatpp')->with($respon);
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
