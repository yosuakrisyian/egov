@extends('layouts.MyLayout')
@section('content')

 <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Masukan Data Kenaikan Gaji</h4>
                        </div>
                        <form method="post" action="Kenaikangaji/addKenaikangaji">
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
                                        <input type="number" name="gaji" id="gaji" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Gaji</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="sk_cpns" id="sk_cpns" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SK CPNS</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="sk_pns" id="sk_pns" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SK PNS</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="sk_kenaikan_pangkat_terakhir" id="sk_kenaikan_pangkat_terakhir" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SK Kenaikan Pangkat Terakhir</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="gaji_berkala_sebelumnya" id="gaji_berkala_sebelumnya" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Gaji Berkala Sebelumnya</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="skp_2tahun_terakhir" id="skp_2tahun_terakhir" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SKP 2tahun Terakhir</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="sk_mutasi" id="sk_mutasi" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">SK Mutasi</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="surat_pengantar_unit_kerja" id="surat_pengantar_unit_kerja" class="form-control" required="required" autocomplete="off">
                                        <label class="form-label">Surat Pengantar Unit Kerja</label>
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
                   DATA KENAIKAN GAJI
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
                                            <th>Gaji</th>
                                            <th>SK CPNS</th>
                                            <th>SK PNS</th>
                                            <th>SK Kenaikan Pangkat Terakhir</th>
                                            <th>Gaji Berkala Sebelumnya</th>
                                            <th>SKP 2tahun Terakhir</th>
                                            <th>SK Mutasi</th>
                                            <th>Surat Pengantar Unit Kerja</th>
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