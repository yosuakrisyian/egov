@extends('layouts.MyLayout')
@section('content')
                  

    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Data Golongan</h4>
                        </div>
                        <form method="post" action="Golongan/addGolongan">
                        <div class="modal-body">
                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jenis_golongan" required="required" autocomplete="off">
                                        <label class="form-label">Jenis Golongan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pangkat" required="required" autocomplete="off">
                                        <label class="form-label">Pangkat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="golongan" required="required" autocomplete="off">
                                        <label class="form-label">Golongan</label>
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
                    DATA GOLONGAN
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
                                        <th>ID GOLONGAN</th>
                                            <th>JENIS GOLONGAN</th>
                                            <th>PANGKAT</th>
                                            <th>GOLONGAN</th>
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