@extends('layouts.KepalabagianLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA SURAT                    
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

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIK/NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Pangkat Gol</th>
                                            <th>Jabatan</th>
                                            <th>Nip Pegawai</th>
                                            <th>Nama Pegawai</th>
                                            <th>Golongan Pegawai</th>
                                            <th>Jabatan Pegawaai</th>
                                            <th>Unitkerja Pegawai</th>
                                            <th>Tanggal</th>
                                            <th>Jenjang</th>
                                            <th>Perguruan Tinggi</th>
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
                                                <td>{{ $data->nip_pegawai }}</td>
                                                <td>{{ $data->nama_pegawai }}</td>
                                                <td>{{ $data->golongan_pegawai }}</td>
                                                <td>{{ $data->jabatan_pegawai }}</td>
                                                <td>{{ $data->unitkerja_pegawai }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->jenjang }}</td>
                                                <td>{{ $data->perguruan_tinggi }}</td>
                                                
                                                <td>
                                                    
                                                    <a href="{{ route('deletekabagsurat', $data->nik_nip) }}">
                                                        <button onClick="return konfirmasi()" class="btn btn-danger">Delete</button>
                                                    </a>
                                                    <a href="{{ route('viewkabagsurat', $data->id_surat) }}">
                                                        <button class="btn btn-warning">Surat</button>
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
                    <h4 class="modal-title" id="defaultModalLabel">Input Data Surat</h4>
                </div>
                <form method="post" action="{{ route('inputkabagsurat') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nik_nip" id="nip" value= {{ Auth()->user()->nik }} class="form-control" required="required" autocomplete="off">
                                <label class="form-label">NIK NIP</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_lengkap" id="nama_lengkap" value={{ Auth()->user()->name }} class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="pangkat_gol" id="pangkat_gol" value= {{ Auth()->user()->golongan }} class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Pangkat Gol</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jabatan" id="jabatan" value={{ Auth()->user()->jabatan }} class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Jabatan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nip_pegawai" id="nip_pegawai" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nip Pegawai</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Nama Pegawai</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="golongan_pegawai" id="golongan_pegawai" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Golongan Pegawai</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jabatan_pegawai" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Jabatan Pegawai</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="unitkerja_pegawai" id="unitkerja_pegawai" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Unitkerja Pegawai</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" name="tanggal" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Tanggal</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="jenjang" id="jenjang" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Jenjang</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" name="perguruan_tinggi" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Perguruan Tinggi</label>
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

    
</script>

 @endsection