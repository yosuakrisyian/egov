@extends('layouts.MyLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA KENAIKAN PANGKAT                   
                </h2>
            </div>

            @if(session('adaAksi'))
                @if(session('sukses'))
                    <div class="alert bg-teal alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{ session('pesan') }}
                    </div>
                @else
                    <div class="alert bg-pink alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{ session('pesan') }}
                    </div>
                @endif
            @endif

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            
                            </h2>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIK/NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Pangkat Gol</th>
                                            <th>Jabatan</th>
                                            <th>SK CPNS</th>
                                            <th>SK PNS</th>
                                            <th>SK Pangkat Terakhir</th>
                                            <th>DP3 2Tahun Terakhir</th>
                                            <th>Karpeg</th>
                                            <th>Daftar Riwayat Pekerjaan</th>
                                            <th>Nota Persetujuan BKN</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->nik_nip }}</td>
                                                <td>{{ $data->nama_lengkap }}</td>
                                                <td>{{ $data->pangkat_gol }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>
                                                    <button onClick="showSkCpns({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showSkPns({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showSKPangkatTerakhir({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showDP32TahunTerakhir({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showKarpeg({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showDaftarRiwayatPekerjaan({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showNota_persetujuanBKN({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>{{ $data->tanggal_pengajuan }}</td>
                                                <td>
                                                    <a href="{{ route('formeditadminkenaikanpangkat', $data->nik_nip) }}">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="{{ route('deleteadminkenaikanpangkat', $data->nik_nip) }}">
                                                        <button onClick="return konfirmasi()" class="btn btn-danger">Delete</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# Basic Examples -->
        </div>
    </section>

    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Input Data Kenaikan Pangkat</h4>
                </div>
                <form method="post" action="{{ route('inputadminkenaikanpangkat') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nik_nip" id="nip" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">NIK NIP</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pangkat_gol" id="pangkat_gol" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Pangkat Gol</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Jabatan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" name="sk_cpns" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK CPNS</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" name="sk_pns" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK PNS</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" name="sk_pangkat_terakhir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK Terakhir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file"  name="dp3_2tahun_terakhir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">DP3</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" name="karpeg" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Karpeg</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file"  name="daftar_riwayat_pekerjaan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Daftar Riwayat Pekerjaan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" name="nota_persetujuan_bkn" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nota Persetujuan BKN</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" name="tanggal_pengajuan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Tanggal Pengajuan</label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Ajukan</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Gambar</h4>
            </div>
            <div class="modal-body">
                <img width="100%" id="image" class="img-responsive" alt="">
            </div>
            <div id="btn-verf1" class="modal-footer">
            </div>

            </div>
        </div>
    </div>
<script type="text/javascript" language="javascript">
function showSkCpns (data) {
    $("#image").attr("src","{!! url('upload/" + data.sk_cpns + "') !!}")
}
function showSkPns (data) {
    $("#image").attr("src","{!! url('upload/" + data.sk_pns + "') !!}")
}
function showSKPangkatTerakhir (data) {
    $("#image").attr("src","{!! url('upload/" + data.sk_pangkat_terakhir + "') !!}")
}
function showDP32TahunTerakhir (data) {
    $("#image").attr("src","{!! url('upload/" + data.dp3_2tahun_terakhir + "') !!}")
}
function showKarpeg (data) {
    $("#image").attr("src","{!! url('upload/" + data.karpeg + "') !!}")
}
function showDaftarRiwayatPekerjaan (data) {
    $("#image").attr("src","{!! url('upload/" + data.daftar_riwayat_pekerjaan + "') !!}")
}
function showNota_persetujuanBKN (data) {
    $("#image").attr("src","{!! url('upload/" + data.nota_persetujuan_bkn + "') !!}")
}
</script>

 @endsection