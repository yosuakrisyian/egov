@extends('layouts.MyLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA TARGET SKP                   
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
                                            <th>Nama</th>
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Kegiatan Tugas Jabatan</th>
                                            <th>Kuantitas</th>
                                            <th>Kualitas</th>
                                            <th>Waktu</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->nik_nip }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->golongan }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>{{ $data->kegiatan_tugas_jabatan }}</td>
                                                <td>{{ $data->kuantitas }}</td>
                                                <td>{{ $data->kualitas }}</td>
                                                <td>{{ $data->waktu }}</td>
                                                <td>{{ $data->biaya }}</td>
                                                <td>
                                                     <a href="{{ route('adminformedittargetskp', $data->nik_nip) }}">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="{{ route('admindeletetargetskp', $data->nik_nip) }}">
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
                    <h4 class="modal-title" id="defaultModalLabel">Input Target SKP</h4>
                </div>
                <form method="post" action="{{ route('admininputtargetskp') }}">
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
                                <input type="text" name="nama" id="nama" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nama</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="golongan" id="golongan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Golongan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jabatan" id="jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Jabatan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="kegiatan_tugas_jabatan" id="kegiatan_tugas_jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Kegiatan Tugas Jabatan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="kuantitas" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Kuantitas</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-line">
                                <label class="form-label">Kualitas</label>
                                <select class="form-control" name="kualitas">
                                    <option value="1">100%</option>
                                    <option value="0,75">75%</option>
                                    <option value="0,5">50%</option>
                                    <option value="0,25">25%</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" name="waktu" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Waktu</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="biaya" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Biaya</label>
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