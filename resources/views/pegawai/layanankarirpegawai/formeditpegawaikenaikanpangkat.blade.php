@extends('layouts.PegawaiLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA KENAIKAN PANGKAT              
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updatekenaikanpangkat',$data->nik_nip) }}">
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
                                                <input type="text" name="jabatan" value="{{$data->jabatan}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Jabatan</label>
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
                                                <input type="file"  name="sk_pangkat_terakhir" value="{{$data->sk_pangkat_terakhir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">SK Pangakat Terakhir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file"  name="dp3_2tahun_terakhir" value="{{$data->dp3_2tahun_terakhir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">DP3 2Tahun Terakhir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="karpeg" value="{{$data->karpeg}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Karpeg</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="daftar_riwayat_pekerjaan" value="{{$data->daftar_riwayat_pekerjaan}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Daftar Riwayat Pekerjaan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="nota_persetujuan_bkn" value="{{$data->nota_persetujuan_bkn}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Nota Persetujuan BKN</label>
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