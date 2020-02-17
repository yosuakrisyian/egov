@extends('layouts.MyLayout')
@section('content')
 
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Realisasi SKP</h4>
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
                                        <input type="number" name="golongan" id="golongan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Golongan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="jabatan" id="jabatan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="unitkerja" id="unitkerja" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Unit Kerja</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="kegiatantugasjabatan" id="kegiatantugasjabatan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Kegiatan Tugas Jabatan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="kuantitas" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Kuantitas</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="waktu" id="waktu" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Waktu</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="biaya" id="biaya" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Biaya</label>
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
                    DATA REALISASI SKP
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
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Unit Kerja</th>
                                            <th>Kegiatan Tugas Jabatan</th>
                                            <th>Kuantitas</th>
                                            <th>Kualitas</th>
                                            <th>Waktu</th>
                                            <th>Biaya</th>
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