@extends('layouts.KepalabagianLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA IZIN CUTI                    
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
                        <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>
                                                NIK
                                            </td>
                                            <td>
                                                {{ Auth()->user()->nik }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                                {{ Auth()->user()->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                                {{ Auth()->user()->golongan }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jabatan
                                            </td>
                                            <td>
                                                {{ Auth()->user()->jabatan }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIK/NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Pangkat Gol</th>
                                            <th>Jabatan</th>
                                            <th>Satuan Organisasi</th>
                                            <th>Tanggal Cuti</th>
                                            <th>Batas Tanggal Cuti</th>
                                            <th>Kategori Cuti</th>
                                            <th>Alasan Cuti</th>
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
                                                    <button onClick="showSatuanOrganisasi({{ $data }})" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-success">Lihat Gambar</button>
                                                </td>
                                                <td>{{ $data->tanggal_cuti }}</td>
                                                <td>{{ $data->batas_tanggalcuti }}</td>
                                                <td>{{ $data->kategori_cuti }}</td>
                                                <td>{{ $data->alasan_cuti }}</td>
                                                <td>
                                                    </a>
                                                    <a href="{{ route('deletepegawaiizincuti', $data->nik_nip) }}">
                                                        <button onClick="return konfirmasi()" class="btn btn-danger">Diterima</button>
                                                    </a>

                                                    </a>
                                                    <a href="{{ route('deletepegawaiizincuti', $data->nik_nip) }}">
                                                        <button onClick="return konfirmasi()" class="btn btn-danger">Ditolak</button>
                                                    </a>

                                                    </a>
                                                    <a href="{{ route('deletekabagizincuti', $data->nik_nip) }}">
                                                        <button onClick="return konfirmasi()" class="btn btn-danger">Hapus</button>
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
function showSatuanOrganisasi (data) {
    $("#image").attr("src","{!! url('upload/" + data.satuan_organisasi + "') !!}")
}
</script>

 @endsection