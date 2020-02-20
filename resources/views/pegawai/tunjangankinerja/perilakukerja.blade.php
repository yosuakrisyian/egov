@extends('layouts.PegawaiLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA TARGET PERILAKU KERJA                   
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
                                            <th>Orientasi Pelayanan</th>
                                            <th>Integritas</th>
                                            <th>Komitmen</th>
                                            <th>Disiplin</th>
                                            <th>Kerjasama</th>
                                            <th>Kepemimpinan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->nik_nip }}</td>
                                                <td>{{ $data->nama_lengkap }}</td>
                                                <td>{{ $data->orientasi_pelayanan }}</td>
                                                <td>{{ $data->integritas }}</td>
                                                <td>{{ $data->komitmen }}</td>
                                                <td>{{ $data->disiplin }}</td>
                                                <td>{{ $data->kerjasama }}</td>
                                                <td>{{ $data->kepemimpinan }}</td>
                                                <td>{{ $data->biaya }}</td>
                                                <td>
                                                    <a href="{{ route('deleteperilakukerja', $data->nik_nip) }}">
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
                    <h4 class="modal-title" id="defaultModalLabel">Input Perilaku Kerja</h4>
                </div>
                <form method="post" action="{{ route('inputperilakukerja') }}">
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
                                <input type="text" name="nama_lengkap" id="nama" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nama</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="orientasi_pelayanan" id="golongan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Orientasi Pelayanan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="integritas" id="jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Integritas</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="komitmen" id="kegiatan_tugas_jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Komitmen</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="disiplin" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Disiplin</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="kerjasama" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Kerjasama</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="kepemimpinan" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Kepemimpinan</label>
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

 @endsection