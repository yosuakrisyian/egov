@extends('layouts.MyLayout')
@section('content')


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA PEGAWAI                    
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
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pangkat/Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->nik }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->tempatLahir }}</td>
                                                <td>{{ $data->tanggalLahir }}</td>
                                                <td>{{ $data->pangkat }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>
                                                    <a href="{{ route('formeditpegawai', $data->nik) }}">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="{{ route('deletepegawai', $data->nik) }}">
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
                    <h4 class="modal-title" id="defaultModalLabel">Input Data Pegawai</h4>
                </div>
                <form method="post" action="{{ route('inputpegawai') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nik" id="nip" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">NIK</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" id="nama_lengkap" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" id="email" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">E-Mail</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="tempatLahir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Tempat Lahir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" name="tanggalLahir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Tanggal Lahir</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <label class="form-label">Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option value="Kepala Dinas">Kepala Dinas</option>
                                    <option value="Kepala Biro">Kepala Biro</option>
                                    <option value="Kepala Bagian">Kepala Bagian</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <label class="form-label">Pangkat/Golongan</label>
                                <select class="form-control" name="pangkat">
                                    <option value="IIA">IIA</option>
                                    <option value="IIA">IIB</option>
                                    <option value="IIA">IIC</option>
                                    <option value="IIA">IID</option>
                                    <option value="IIA">IIIA</option>
                                    <option value="IIA">IIIB</option>
                                    <option value="IIA">IIIC</option>
                                    <option value="IIA">IIID</option>
                                </select>
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

 @endsection                