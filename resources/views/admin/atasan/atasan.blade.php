@extends('layouts.MyLayout')
@section('content')
 
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Data Atasan</h4>
                        </div>
                        <form method="post" action="Atasan/addAtasan">
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
                    DATA ATASAN
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
                                            <th>Nama Atasan</th>
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

@endsecton