<?php

namespace App\Http\Controllers;
use App\Kenaikangaji;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminKenaikangajiController extends Controller
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
        'sk_kenaikan_pangkat_terakhir' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'skp_2tahun_terakhir' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'sk_mutasi' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'surat_pengantar_unit_kerja' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kenaikangaji::paginate(5);
        return view('admin.layanankarir.kenaikangaji')->with(['datas' => $datas]);
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
            $fileSKKenaikanPangkatTerakhir = $request->file('sk_kenaikan_pangkat_terakhir');
            $nameSKKenaikanPangkatTerakhir = Str::random(32) . round(microtime(true)) . '.' . $fileSKKenaikanPangkatTerakhir->guessExtension();
            $fileSKKenaikanPangkatTerakhir->move('upload', $nameSKKenaikanPangkatTerakhir);
            $data['sk_kenaikan_pangkat_terakhir'] = $nameSKKenaikanPangkatTerakhir;

            // upload 
            $fileSKP = $request->file('skp_2tahun_terakhir');
            $nameSKP = Str::random(32) . round(microtime(true)) . '.' . $fileSKP->guessExtension();
            $fileSKP->move('upload', $nameSKP);
            $data['skp_2tahun_terakhir'] = $nameSKP;

            // upload 
            $fileMutasi = $request->file('sk_mutasi');
            $nameMutasi = Str::random(32) . round(microtime(true)) . '.' . $fileMutasi->guessExtension();
            $fileMutasi->move('upload', $nameMutasi);
            $data['sk_mutasi'] = $nameMutasi;

            // upload 
            $fileSuratPengantar = $request->file('surat_pengantar_unit_kerja');
            $nameSuratPengantar = Str::random(32) . round(microtime(true)) . '.' . $fileSuratPengantar->guessExtension();
            $fileSuratPengantar->move('upload', $nameSuratPengantar);
            $data['surat_pengantar_unit_kerja'] = $nameSuratPengantar;


           $input = Kenaikangaji::create($data);
            $respon = array();
            $respon['adaAksi'] = true;
            if ($input) {
                $respon['sukses'] = true;
                $respon['pesan'] = 'Berhasil Input Kenaikan Gaji';
            } else {
                $respon['sukses'] = false;
                $respon['pesan'] = 'Gagal Input Kenaikan Gaji';
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
        $data = Kenaikangaji::where('nik_nip', $nik_nip)->first();
        return view('admin.layanankarir.formeditkenaikangaji')->with(['data' => $data]);
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
        $update = Kenaikangaji::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Kenaikan Gaji';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Kenaikan Gaji';
        }

        return redirect()->route('homeAdminKenaikangaji')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = Kenaikangaji::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Kenaikan Gaji';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Kenaikan Gaji';
        }

        return redirect()->route('homeAdminKenaikangaji')->with($respon);
    }
}
