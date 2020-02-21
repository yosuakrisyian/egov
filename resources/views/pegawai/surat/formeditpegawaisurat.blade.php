@extends('layouts.PegawaiLayout')
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

                                <form method="post" action="{{ route('updatepegawaisurat',$data->nik_nip) }}">
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
                                                    <input type="text" name="unit_kerja" value="{{$data->unit_kerja}}" id="unit_kerja" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Unit Kerja</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="instansi" value="{{$data->instansi}}" id="instansi" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Instansi</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="perguruan_tinggi" value="{{$data->perguruan_tinggi}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Perguruan Tinggi</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="fakultas" value="{{$data->fakultas}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Fakultas</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="program_studi" value="{{$data->program_studi}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Program Studi</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="jenjang" value="{{$data->jenjang}}" class="form-control" required="required" autocomplete="off">
                                                    <label class="form-label">Jenjang</label>
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