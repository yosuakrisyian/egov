@extends('layouts.PenilaiLayout')
@section('content')


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DAFTAR SKP PEGAWAI                 
                </h2>
            </div>

           

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIK/NIP</th>
                                            <th>Nama</th>
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->nik }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->golongan }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>
                                                    <a href="{{ route('homePenilaiHasilSkp', $data->nik) }}">
                                                        <button class="btn btn-warning">Hitung SKP</button>
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

 @endsection