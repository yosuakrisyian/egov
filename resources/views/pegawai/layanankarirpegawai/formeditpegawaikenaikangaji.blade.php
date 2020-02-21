@extends('layouts.PegawaiLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA KENAIKAN GAJI              
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updatekenaikangaji',$data->nik_nip) }}">
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
                                                <input type="number" name="gaji" value="{{$data->gaji}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Gaji</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="sk_cpns" value="{{$data->sk_cpns}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SK CPNS</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="sk_pns" value="{{$data->sk_pns}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SK PNS</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file"  name="sk_kenaikan_pangkat_terakhir" value="{{$data->sk_kenaikan_pangkat_terakhir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SK Kenaikan Pangakat Terakhir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number"  name="gaji_berkala_sebelumnya" value="{{$data->gaji_berkala_sebelumnya}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Gaji Berkala Sebelumnya</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file"  name="skp_2tahun_terakhir" value="{{$data->skp_2tahun_terakhir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SKP 2Tahun Terakhir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="sk_mutasi" value="{{$data->sk_mutasi}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SK Mutasi</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="surat_pengantar_unit_kerja" value="{{$data->surat_pengantar_unit_kerja}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Surat Pengantar Unit Kerja</label>
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