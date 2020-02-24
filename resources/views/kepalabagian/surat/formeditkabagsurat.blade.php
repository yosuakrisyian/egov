@extends('layouts.KepalabagianLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA SURAT                
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updatekabagsurat',$data->nik_nip) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nik_nip" value="{{$data->nik_nip}}" id="nip" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">NIK NIP</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nama_lengkap" value="{{$data->nama_lengkap}}" id="nama_lengkap" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Nama Lengkap</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="pangkat_gol" value="{{$data->pangkat_gol}}" id="pangkat_gol" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Pangkat Gol</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="jabatan" value="{{$data->jabatan}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Jabatan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                    <input type="text" name="nip_pegawai" value="{{$data->nip_pegawai}}" id="unit_kerja" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Nip Pegawai</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="nama_pegawai" value="{{$data->nama_pegawai}}" id="instansi" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Nama Pegawai</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="golongan_pegawai" value="{{$data->golongan_pegawai}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Golongan Pegawai</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="jabatan_pegawai" value="{{$data->jabatan_pegawai}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Jabatan Pegawai</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="unitkerja_pegawai" value="{{$data->unitkerja_pegawai}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Unitkerja Pegawai</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="tanggal" value="{{$data->tanggal}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Tanggal</label>
                                                </div>
                                            </div>

                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
        </div>

        </div>
</section>

@endsection