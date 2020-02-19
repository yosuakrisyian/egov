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
                                            <th>Jabatan</th>
                                            <th>SK CPNS</th>
                                            <th>SK PNS</th>
                                            <th>SK Pangkat Terakhir</th>
                                            <th>DP3 2Tahun Terakhir</th>
                                            <th>Karpeg</th>
                                            <th>Daftar Riwayat Pekerjaan</th>
                                            <th>Nota Persetujuan BKN</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->nik_nip }}</td>
                                                <td>{{ $data->nama_lengkap }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>{{ $data->sk_cpns }}</td>
                                                <td>{{ $data->sk_pns }}</td>
                                                <td>{{ $data->sk_pangkat_terakhir }}</td>
                                                <td>{{ $data->dp3_2tahun_terakhir }}</td>
                                                <td>{{ $data->karpeg }}</td>
                                                <td>{{ $data->daftar_riwayat_pekerjaan }}</td>
                                                <td>{{ $data->nota_persetujuan_bkn }}</td>
                                                <td>
                                                    <a href="{{ route('formeditkenaikanpangkat', $data->nik_nip) }}">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="{{ route('deletekenaikanpangkat', $data->nik_nip) }}">
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
                <form method="post" action="{{ route('inputkenaikanpangkat') }}">
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
                                <input type="text" name="jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Jabatan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="sk_cpns" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK CPNS</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="sk_pns" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK PNS</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="sk_pangkat_terakhir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">SK Pangkat Terakhir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text"  name="dp3_2tahun_terakhir" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">DP3 2Tahun Terakhir</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="karpeg" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Karpeg</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="daftar_riwayat_pekerjaan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Daftar Riwayat Pekerjaan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nota_persetujuan_bkn" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nota Persetujuan BKN</label>
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