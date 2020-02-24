@extends('layouts.MyLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA KENAIKAN GAJI                   
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
                            <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah</button>
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
                                            <th>Gaji</th>
                                            <th>SK CPNS</th>
                                            <th>SK PNS</th>
                                            <th>SK Kenaikan Pangkat Terakhir</th>
                                            <th>Gaji Berkala Sebelumnya</th>
                                            <th>SKP 2Tahun Terakhir</th>
                                            <th>SK Mutasi</th>
                                            <th>Surat Pengantar unit Kerja</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Status</th>
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
                                                <td>{{ $data->gaji }}</td>
                                                <td>
                                                    <button onClick="showSkCpns({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showSkPns({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showSKKenaikanPangkatTerakhir({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>{{ $data->gaji_berkala_sebelumnya }}</td>
                                                <td>
                                                    <button onClick="showSKP2TahunTerakhir({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showSKMutasi({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>
                                                    <button onClick="showSuratPengantarUnitKerja({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>{{ $data->tanggal_pengajuan }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="{{ route('formeditadminkenaikangaji', $data->nik_nip) }}">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="{{ route('deleteadminkenaikangaji', $data->nik_nip) }}">
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
                    <h4 class="modal-title" id="defaultModalLabel">Input Data Kenaikan Gaji</h4>
                </div>
                <form method="post" action="{{ route('inputadminkenaikangaji') }}" enctype="multipart/form-data">
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
                                <input type="number" name="gaji" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Gaji</label>
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
                                <input type="file" name="sk_kenaikan_pangkat_terakhir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK Kenaikan pangkat Terakhir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="gaji_berkala_sebelumnya" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Gaji Berkala Sebelumnya</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file"  name="skp_2tahun_terakhir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SKP 2Tahun Terakhir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" name="sk_mutasi" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK Mutasi</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file"  name="surat_pengantar_unit_kerja" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Surat Pengantar Unit Kerja</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" name="tanggal_pengajuan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Tanggal Pengajuan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="status" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Status</label>
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
function showSKKenaikanPangkatTerakhir (data) {
    $("#image").attr("src","{!! url('upload/" + data.sk_kenaikan_pangkat_terakhir + "') !!}")
}
function showSKP2TahunTerakhir (data) {
    $("#image").attr("src","{!! url('upload/" + data.skp_2tahun_terakhir + "') !!}")
}
function showSKMutasi (data) {
    $("#image").attr("src","{!! url('upload/" + data.sk_mutasi + "') !!}")
}
function showSuratPengantarUnitKerja (data) {
    $("#image").attr("src","{!! url('upload/" + data.surat_pengantar_unit_kerja + "') !!}")
}
</script>

 @endsection