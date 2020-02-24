<?php

namespace App\Http\Controllers;
use App\Perilakukerja;

use Illuminate\Http\Request;

class PenilaiLihatPerilakukerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Perilakukerja::get()->groupBy('nik_dinilai')->toArray();
        // var_dump($datas['123'][0]['id_perilakukerja']);
        $newData = array();
        foreach ($datas as $data) {
            // var_dump(sizeof($data));
            $jumlah = sizeof($data);
            $totalIntegritas = 0;
            $totalorientasiPelayanan = 0;
            $totalKomitment = 0;
            $totalDisiplin = 0;
            $totalKerjasama = 0;
            $totalKepemimpinan = 0;
            for ($i=0; $i < $jumlah; $i++) {
                $totalIntegritas += $data[$i]['integritas'];
                $totalorientasiPelayanan += $data[$i]['orientasi_pelayanan'];
                $totalKomitment += $data[$i]['komitmen'];
                $totalDisiplin += $data[$i]['disiplin'];
                $totalKerjasama += $data[$i]['kerjasama'];
                $totalKepemimpinan += $data[$i]['kepemimpinan'];
            }
            $totalSkor = (($totalIntegritas / $jumlah) + ($totalorientasiPelayanan / $jumlah) + ($totalKomitment / $jumlah) + ($totalDisiplin / $jumlah) + ($totalKerjasama / $jumlah) + ($totalKepemimpinan / $jumlah)) / 6;
            array_push($newData, [
                'data' => $data,
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
            ]);
            // var_dump($totalIntegritas);
            // echo '</br></br>';
        }
        // var_dump($newData);
        return view('penilai.tunjangankinerjapenilai.lihatperilakukerja')->with(['datas' => $newData]);
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
