<?php

namespace App\Http\Controllers;
use App\Izincuti;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminIzincutiController extends Controller
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
        $datas = Izincuti::paginate(5);
        return view('admin.layanankarir.izincuti')->with(['datas' => $datas]);
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
            $fileSatuanOrganisasi = $request->file('satuan_organisasi');
            $nameSatuanOrganisasi = Str::random(32) . round(microtime(true)) . '.' . $fileSatuanOrganisasi->guessExtension();
            $fileSatuanOrganisasi->move('upload', $nameSatuanOrganisasi);
            $data['satuan_organisasi'] = $nameSatuanOrganisasi;


           $input = Izincuti::create($data);
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
        $data = Izincuti::where('nik_nip', $nik_nip)->first();
        return view('admin.layanankarir.formeditizincuti')->with(['data' => $data]);
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
        $update = Izincuti::where('nik_nip', $nik_nip)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Izin Cuti';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Izin Cuti';
        }

        return redirect()->route('homeAdminIzincuti')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_nip)
    {
        $delete = Izincuti::where('nik_nip', $nik_nip)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Izin Cuti';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Izin Cuti';
        }

        return redirect()->route('homeAdminIzincuti')->with($respon);
    }
}
