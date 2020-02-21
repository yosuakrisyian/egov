<?php

namespace App\Http\Controllers;
use App\Pegawaisurat;
use PDF;
use Illuminate\Http\Request;

class PegawaiSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pegawaisurat::paginate(5);
        return view('pegawai.surat.pegawaisurat')->with(['datas' => $datas]);
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
        $data = $request->all();
        //$data['password'] = Hash::make($data['id_golongan']);
        // $data['level'] = 3;
        
        $input = Pegawaisurat::create($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($input) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Input Surat';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Input Surat';
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
        $data = Pegawaisurat::where('id_golongan', $id)->first();
        return view('pegawai.surat.pegawaisurat')->with(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lihat($nik)
    {
        $data = Pegawaisurat::where('id_surat', $nik)->first();
        $pdf = PDF::loadView('pegawai.surat.previewsurat', ['data' => $data], [])->setPaper('legal', 'potrait');
        return $pdf->stream('surat.pdf');

        // return view('pegawai.surat.previewsurat')->with(['data' => $data]);
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
        $update = Pegawaisurat::where('id_golongan', $id)->update($data);
        $respon = array();
        $respon['adaAksi'] = true;
        if ($update) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Edit Golongan';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Edit Golongan';
        }

        return redirect()->route('PegawaiSurat')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Pegawaisurat::where('id_golongan', $id)->delete();

        $respon = array();
        $respon['adaAksi'] = true;
        if ($delete) {
            $respon['sukses'] = true;
            $respon['pesan'] = 'Berhasil Hapus Golongan';
        } else {
            $respon['sukses'] = false;
            $respon['pesan'] = 'Gagal Hapus Golongan';
        }

        return redirect()->route('PegawaiSurat')->with($respon);
        }
    }