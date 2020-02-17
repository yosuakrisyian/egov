@extends('layouts.MyLayout')
@section('content')

 <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Masukan Data Izin Cuti</h4>
                        </div>
                        <form method="post" action="">
                        <div class="modal-body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nip" id="nip" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">NIP</label>
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
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="satuan_organisasi" id="satuan_organisasi" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Satuan Organisasi</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="tanggal_cuti" id="tanggal_cuti" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Tanggal Cuti</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="alasan_cuti" id="alasan_cuti" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Alasan Cuti</label>
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

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA IZIN CUTI
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <div class="text-left"> <button type="button" class="btn btn-right btn-success waves-effect" data-toggle="modal" data-target="#defaultModal">TAMBAH DATA</button></div>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Pangkat Gol</th>
                                            <th>Jabatan</th>
                                            <th>Satuan Organisasi</th>
                                            <th>Tanggal Cuti</th>
                                            <th>Alasan Cuti</th>
                                            <th width="15%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
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
 @endsecton