<?php

namespace App\Http\Controllers;
use App\Kenaikanpangkat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminKenaikanpangkatController extends Controller
{
    public $messages = [
        'required' => 'Harap Isi :attribute Anda',
        'mimes' => 'Format Gambar Harus jpeg, png, jpg',
        'image' => 'File Harus Berisi Gambar',
        'max' => 'Gambar Tidak Boleh Lebih Dari 2 Mb'
    ];
    public $rulesGambar = [
        'sk_cpns' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'sk_pns' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'sk_pangkat_terakhir' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'dp3_2tahun_terakhir' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'karpeg' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'daftar_riwayat_pekerjaan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'nota_persetujuan_bkn' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kenaikanpangkat::paginate(5);
        return view('admin.layanankarir.kenaikanpangkat')->with(['datas' => $datas]);
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
        $validator = Validator::make($request->allFiles(), $this->rulesGambar, $this->messages);
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $data = $request->all();
            // upload 
            $fileSkCpns = $request->file('sk_cpns');
            $nameSkCpns = Str::random(32) . round(microtime(true)) . '.' . $fileSkCpns->guessExtension();
            $fileSkCpns->move('upload', $nameSkCpns);
            $data['sk_cpns'] = $nameSkCpns;

            // upload 
            $fileSkpns = $request->file('sk_pns');
            $nameSkpns = Str::random(32) . round(microtime(true)) . '.' . $fileSkpns->guessExtension();
            $fileSkpns->move('upload', $nameSkpns);
            $data['sk_pns'] = $nameSkpns;

            // upload 
            $fileSkPangkatTerakhir = $request->file('sk_pangkat_terakhir');
            $nameSkPangkatTerakhir = Str::random(32) . round(microtime(true)) . '.' . $fileSkPangkatTerakhir->guessExtension();
            $fileSkPangkatTerakhir->move('upload', $nameSkPangkatTerakhir);
            $data['sk_pangkat_terakhir'] = $nameSkPangkatTerakhir;

             // upload 
             $fileDp32tahunTerakhir = $request->file('dp3_2tahun_terakhir');
             $nameDp32tahunTerakhir = Str::random(32) . round(microtime(true)) . '.' . $fileDp32tahunTerakhir->guessExtension();
             $fileDp32tahunTerakhir->move('upload', $nameDp32tahunTerakhir);
             $data['dp3_2tahun_terakhir'] = $nameDp32tahunTerakhir;
 
             // upload 
             $fileKarpeg = $request->file('karpeg');
             $nameKarpeg = Str::random(32) . round(microtime(true)) . '.' . $fileKarpeg->guessExtension();
             $fileKarpeg->move('upload', $nameKarpeg);
             $data['karpeg'] = $nameKarpeg;
 
             // upload 
             $fileDaftarRiwayatPekerjaan = $request->file('daftar_riwayat_pekerjaan');
             $nameDaftarRiwayatPekerjaan = Str::random(32) . round(microtime(true)) . '.' . $fileDaftarRiwayatPekerjaan->guessExtension();
             $fileDaftarRiwayatPekerjaan->move('upload', $nameDaftarRiwayatPekerjaan);
             $data['daftar_riwayat_pekerjaan'] = $nameDaftarRiwayatPekerjaan;

             // upload 
             $fileNotaPersetujuanBKN = $request->file('nota_persetujuan_bkn');
             $nameNotaPersetujuanBKN = Str::random(32) . round(microtime(true)) . '.' . $fileNotaPersetujuanBKN->guessExtension();
             $fileNotaPersetujuanBKN->move('upload', $nameNotaPersetujuanBKN);
             $data['nota_persetujuan_bkn'] = $nameNotaPersetujuanBKN;

           $input = Kenaikanpangkat::create($data);
            $respon = array();
            $respon['adaAksi'] = true;
            if ($input) {
                $respon['sukses'] = true;
                $respon['pesan'] = 'Berhasil Input Kenaikan Pangkat';
            } else {
                $respon['sukses'] = false;
                $respon['pesan'] = 'Gagal Input Kenaikan Pangkat';
            }

            return back()->with($respon);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_nip)
    {
        $data = Kenaikanpangkat::where('nik_nip', $nik_nip)->first();
        return view('admin.layanankarir.formeditkenaikanpangkat')->with(['data' => $data]);
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
        $update = Kenaikanpangkat::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Kenaikan Pangkat';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Kenaikan Pangkat';
        }

        return redirect()->route('homeAdminKenaikanpangkat')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = Kenaikanpangkat::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Kenaikan Pangkat';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Kenaikan Pangkat';
        }

        return redirect()->route('homeAdminKenaikanpangkat')->with($respon);
    }
}
