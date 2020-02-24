<?php

namespace App\Http\Controllers;
use App\Hasilakhir;
use App\User;
use Illuminate\Http\Request;

class HasilAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where('level', 2)->selectRaw(
            '*, (year(curdate())-year(hariPertamaKerja)) as age'
            )->join('tb_hasilskp', 'users.nik', '=', 'tb_hasilskp.nik')
            ->get();
        $newData = [];
        foreach ($datas as $data) {
            // var_dump($data['pendidikanTerakhir']);
            $hasil;
            $pendidikanTerakhir = $data['pendidikanTerakhir'];
            $masaKerja = $data['age'];
            if ($pendidikanTerakhir == 'SMP') {
                if ($masaKerja < 1) {
                    $hasil = 'Juru Muda';
                } else if ($masaKerja == 1) {
                    $hasil = 'Juru Muda Tingkat 1';
                } else {
                    $hasil = 'Juru';
                }
            } else if ($pendidikanTerakhir == 'SMA') {
                if ($masaKerja < 1) {
                    $hasil = 'Juru Tingkat I';
                } else {
                    $hasil = 'Pengatur Muda';
                }
            } else if ($pendidikanTerakhir == 'D2') {
                if ($masaKerja < 1) {
                    $hasil = 'Pengatur Muda';
                } else {
                    $hasil = 'Pengatur Muda Tingkat I';
                }
            } else if ($pendidikanTerakhir == 'D3') {
                if ($masaKerja < 1) {
                    $hasil = 'Pengatur Muda Tingkat I';
                } else {
                    $hasil = 'Pengatur';
                }
            } else if ($pendidikanTerakhir == 'S1') {
                if ($masaKerja < 1) {
                    $hasil = 'Pengatur';
                } else if ($masaKerja == 1) {
                    $hasil = 'Pengatur Tingkat I';
                } else {
                    $hasil = 'Penata Muda';
                }
            } else if ($pendidikanTerakhir == 'S2') {
                if ($masaKerja < 1) {
                    $hasil = 'Penata Muda';
                } else {
                    $hasil = 'Penata Muda Tingkat 1';
                }
            } else {
                if ($masaKerja < 1) {
                    $hasil = 'Penata Muda Tingkat 1';
                } else if ($masaKerja == 1) {
                    $hasil = 'Penata';
                } else if ($masaKerja == 2){
                    $hasil = 'Penata Tingkat I';
                } else if ($masaKerja == 3) {
                    $hasil = 'Pembina';
                } else if ($masaKerja == 4) {
                    $hasil = 'Pembina Tingkat I';
                } else if ($masaKerja == 5) {
                    $hasil = 'Pembina Utama Muda';
                } else if ($masaKerja == 6) {
                    $hasil = 'Pembina Utama Madya';
                } else {
                    $hasil = 'Pembina Utama';
                }
            }
            array_push($newData, [
                'data' => $data,
                'hasil' => $hasil
            ]);
        }
        return view('kepalabagian.hasilkenaikanpangkat.hasilakhir')->with(['datas' => $newData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Hasilakhir::paginate(5);
        return view('kepalabagian.hasilkenaikanpangkat.hasilakhir')->with(['datas' => $datas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Hasilakhir::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Izin Studi Lanjut';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Izin Studi Lanjut';
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
        $data = Hasilakhir::where('nik_nip', $nik_nip)->first();
        return view('kepalabagian.hasilkenaikanpangkat.formedithasilakhir')->with(['data' => $data]);
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
        $update = Hasilakhir::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Hasil Akhir';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Hasil Akhir';
        }

        return redirect()->route('homeHasilAkhir')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = kabagizincuti::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Izin Cuti';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Izin Cuti';
        }

        return redirect()->route('homeHasilAkhir')->with($respon);
    }
}
