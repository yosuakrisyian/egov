@extends('layouts.MyLayout')
@section('content')

 <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Data Kenaikan Pangkat</h4>
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
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="sk_cpns" id="sk_cpns" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SK CPNS</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="sk_pns" id="sk_pns" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SK PNS</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="sk_pangkat_terakhir" id="sk_pangkat_terakhir" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Sk Pangkat Terakhir</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="dp3_2tahun_terakhir" id="dp3_2tahun_terakhir" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">DP3 2tahun Terakhir</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="karpeg" id="karpeg" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Karpeg</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="daftar_riwayat_pekerjaan" id="daftar_riwayat_pekerjaan" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Daftar Riwayat Pekerjan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nota_persetujuan_bkn" id="nota_persetujuan_bkn" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Nota Persetujuan BKN</label>
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
                    DATA Kenaikan pangkat
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
                                            <th>Jabatan</th>
                                            <th>SK CPNS</th>
                                            <th>SK PNS</th>
                                            <th>Sk Pangkat Terakhir</th>
                                            <th>DP3 2tahun Terakhir</th>
                                            <th>Karpeg</th>
                                            <th>Daftar Riwayat Pekerjan</th>
                                            <th>Nota Persetujuan BKN</th>
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