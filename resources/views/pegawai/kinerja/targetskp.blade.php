@extends('layouts.PegawaiLayout')
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
                            @if($withInputButton)
                            <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah</button>
                            @endif
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
                                                 <td>{{ $data->kegiatan_tugas_jabatan }}</td>
                                                <td>{{ $data->kuantitas }}</td>
                                                <td>{{ $data->kualitas }}</td>
                                                <td>{{ $data->waktu }}</td>
                                                <td>{{ $data->biaya }}</td>
                                                <td>
                                                    <a href="{{ route('pegawaiformedittargetskp', $data->nik_nip) }}">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="{{ route('pegawaideletetargetskp', $data->nik_nip) }}">
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
                <form method="post" action="{{ route('pegawaiinputtargetskp') }}">
                    @csrf
                    <div class="modal-body">
                        
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
                                <input type="number" name="waktu" class="form-control" required="required" autocomplete="off">
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