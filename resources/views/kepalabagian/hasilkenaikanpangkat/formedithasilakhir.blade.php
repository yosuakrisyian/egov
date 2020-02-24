@extends('layouts.KepalabagianLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA HASIL AKHIR                 
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updatehasilakhir',$data->nik_nip) }}">
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
                                                <input type="text" name="masa_kerja" value="{{$data->masa_kerja}}" id="pangkat_gol" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Masa Kerja</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="skp_2tahunterakhir" value="{{$data->skp_2tahunterakhir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SKP 2Tahun Terakhir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="jenjang" value="{{$data->jenjang}}" class="form-control" required="required" autocomplete="off">
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