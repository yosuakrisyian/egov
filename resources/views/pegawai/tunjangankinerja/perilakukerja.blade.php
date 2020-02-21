@extends('layouts.PegawaiLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    BERI NILAI PERILAKU KERJA                   
                </h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
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
                                                {{ $datas->nik }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                                {{ $datas->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                                {{ $datas->golongan }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jabatan
                                            </td>
                                            <td>
                                                {{ $datas->jabatan }}
                                            </td>
                                        </tr>
                                </table>

                                    <div class="modal-body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="orientasi_pelayanan" maxlength="3" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Orientasi Pelayanan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="integritas" maxlength="3" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Integritas</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="komitmen" maxlength="3" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Komitmen</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="disiplin" maxlength="3" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Disiplin Lahir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="kerjasama" maxlength="3" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Kerjasama</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="kepemimpinan" maxlength="3" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Kepemimpinan</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                <h2>
                                <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah</button>
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# Basic Examples -->
        </div>
    </section>

 @endsection