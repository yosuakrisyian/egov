<?php

namespace App\Http\Controllers;
use App\Pegawaiizinstudilanjut;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PegawaiIzinstudilanjutController extends Controller
{
    public $messages = [
        'required' => 'Harap Isi :attribute Anda',
        'mimes' => 'Format Gambar Harus jpeg, png, jpg',
        'image' => 'File Harus Berisi Gambar',
        'max' => 'Gambar Tidak Boleh Lebih Dari 2 Mb'
    ];
    public $rulesGambar = [
        'surat_permohonan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pegawaiizinstudilanjut::paginate(5);
        return view('pegawai.layanankarirpegawai.pegawaiizinstudilanjut')->with(['datas' => $datas]);
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
            // upload surat permohonan
            $fileSuratPermohonan = $request->file('surat_permohonan');
            $nameSuratPermohonan = Str::random(32) . round(microtime(true)) . '.' . $fileSuratPermohonan->guessExtension();
            $fileSuratPermohonan->move('upload', $nameSuratPermohonan);
            $data['surat_permohonan'] = $nameSuratPermohonan;

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
            $fileskterakhir = $request->file('sk_terakhir');
            $nameskterakhir = Str::random(32) . round(microtime(true)) . '.' . $fileskterakhir->guessExtension();
            $fileskterakhir->move('upload', $nameskterakhir);
            $data['sk_terakhir'] = $nameskterakhir;

            // upload 
            $fileDP3 = $request->file('dp3');
            $nameDP3 = Str::random(32) . round(microtime(true)) . '.' . $fileDP3->guessExtension();
            $fileDP3->move('upload', $nameDP3);
            $data['dp3'] = $nameDP3;

            // upload 
            $fileskpt = $request->file('surat_keterangan_pt');
            $nameskpt = Str::random(32) . round(microtime(true)) . '.' . $fileskpt->guessExtension();
            $fileskpt->move('upload', $nameskpt);
            $data['surat_keterangan_pt'] = $nameskpt;

           $input = Pegawaiizinstudilanjut::create($data);
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
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_nip)
    {
        $data = Pegawaiizinstudilanjut::where('nik_nip', $nik_nip)->first();
        return view('pegawai.layanankarirpegawai.formeditpegawaiizinstudilanjut')->with(['data' => $data]);
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
        $update = Pegawaiizinstudilanjut::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Izin Studi Lanjut';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Izin Studi Lanjut';
        }

        return redirect()->route('homePegawaiIzinstudilanjut')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = Pegawaiizinstudilanjut::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Izin Studi Lanjut';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Izin Studi Lanjut';
        }

        return redirect()->route('homePegawaiIzinstudilanjut')->with($respon);
   
    }
}
