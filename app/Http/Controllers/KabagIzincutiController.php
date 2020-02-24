<?php

namespace App\Http\Controllers;
use App\Kabagizincuti;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DateTime;
use App\JenisCuti;

class KabagIzincutiController extends Controller
{
    public $messages = [
        'required' => 'Harap Isi :attribute Anda',
        'mimes' => 'Format Gambar Harus jpeg, png, jpg',
        'image' => 'File Harus Berisi Gambar',
        'max' => 'Gambar Tidak Boleh Lebih Dari 2 Mb'
    ];
    public $rulesGambar = [
        'satuan_organisasi' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kabagizincuti::where('nik_nip', Auth()->user()->nik)->paginate(5);
        $jenisCuti = JenisCuti::all();
        // $batasIzin = Pegawaiizincuti::where
        return view('kepalabagian.layanankarirkabag.kabagizincuti')->with(['datas' => $datas, 'cutis' => $jenisCuti]);
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

    public function cekIzinCuti ($jumlahHari, $jenisCuti) {
        $dataCuti = JenisCuti::where('nama', $jenisCuti)->first();
        if ($jumlahHari > $dataCuti->batas_izin) {
            return false;
        } else {
            return true;
        }
    }

    public function store(Request $request)
    {
        $respon = array();
        $respon['adaAksi'] = true;

        $data = $request->all();
        $tglMulai = new DateTime($data['tanggal_cuti']);
        $tglSelesai = new DateTime($data['batas_tanggalcuti']);
        $selisih = $tglMulai->diff($tglSelesai)->days + 1;

        $data['jumlah_hari'] = $selisih;
        if ($this->cekIzinCuti($selisih, $data['kategori_cuti'])) {
             //  upload surat permohonan
             $fileSatuanOrganisasi = $request->file('satuan_organisasi');
             $nameSatuanOrganisasi = Str::random(32) . round(microtime(true)) . '.' . $fileSatuanOrganisasi->guessExtension();
             $fileSatuanOrganisasi->move('upload', $nameSatuanOrganisasi);
             $data['satuan_organisasi'] = $nameSatuanOrganisasi;
 
             $dataUser = Auth()->user();
             $data['nik_nip'] = $dataUser->nik;
             $data['nama_lengkap'] = $dataUser->name;
             $data['pangkat_gol'] = $dataUser->golongan;
             $data['jabatan'] = $dataUser->jabatan;
             
 
             $input = Kabagizincuti::create($data);
             if ($input) {
                 $respon['sukses'] = true;
                 $respon['pesan'] = 'Berhasil Input Izin Cuti';
             } else {
                 $respon['sukses'] = false;
                 $respon['pesan'] = 'Gagal Input Izin Cuti';
             }
        } else {

            $respon['sukses'] = false;
            $respon['pesan'] = 'Jumlah Hari Melebihi Batas';
           
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
        // $data = Kabagizincuti::where('nik_nip', $nik_nip)->first();
        // return view('kepalabagian.layanankarirkabag.formeditpegawaiizincuti')->with(['data' => $data]);
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
        $update = Pegawaiizincuti::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Izin Cuti';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Izin Cuti';
        }

        return redirect()->route('homePegawaiIzincuti')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
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

        return redirect()->route('homeKabagIzincuti')->with($respon);
    }
}
