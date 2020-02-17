@extends('layouts.MyLayout')
@section('content')
 
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Nilai Perilaku Kerja</h4>
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
                                        <input type="number" name="orientasi_pelayanan" id="orientasi_pelayanan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Orientasi Pelayanan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="integritas" id="integritas" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Integritas</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="komitmen" id="komitmen" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Komitmen</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="disiplin" id="disiplin" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Disiplin</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="kerjasama" id="kerjasama" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Kerjasama</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="kepemimpinan" id="kepemimpinan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Kepemimpinan</label>
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
                    DATA NILAI PERILAKU KERJA
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <div class="text-right"> <button type="button" class="btn btn-right btn-success waves-effect" data-toggle="modal" data-target="#defaultModal">TAMBAH DATA</button></div>
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
                                            <th>Orientasi Pelayanan</th>
                                            <th>Integritas</th>
                                            <th>Komitmen</th>
                                            <th>Disiplin</th>
                                            <th>Kerjasama</th>
                                            <th>Kepemimpinan</th>
                                            <th width="15%"></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
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