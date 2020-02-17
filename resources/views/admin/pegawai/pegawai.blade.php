@extends('layouts.MyLayout')
@section('content')


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA PEGAWAI                    
                </h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <button type="button" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah</button>
                            </h2>
                        </div>

                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">DATA PEGAWAI</h4>
                        </div>
                        <form method="post" action="">
                        <div class="modal-body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nik_nip" id="nik_nip" required="required" autocomplete="off">
                                        <label class="form-label">NIK/NIP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_lengkap" required="required" autocomplete="off">
                                        <label class="form-label">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempat_lahir" required="required" autocomplete="off">
                                        <label class="form-label">Tempat Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="pangkat_gol" required="required" autocomplete="off">
                                        <option value="">-- Pilih Pangkat Golongan --</option>
                                        <option value="GOLONGAN IV (Pembina)">GOLONGAN IV (Pembina)</option>
                                        <option value="GOLONGAN III (Penata)">GOLONGAN III (Penata)</option>
                                        <option value="GOLONGAN II (Pengatur)">GOLONGAN II (Pengatur)</option>
                                        <option value="GOLONGAN I (Juru)">GOLONGAN I (Juru)</option>
                                        <option value="GOLONGAN II (Juru)">GOLONGAN II (Juru)</option>
                                    </select>
                                </div>
                                </div><br>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="jabatan" required="required" autocomplete="off">
                                        <option value="">-- Pilih Jabatan --</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Sekretaris">Sekretaris</option>
                                        <option value="OB">OB</option>
                                        <option value="CEO">CEO</option>
                                        <option value="Bendahara">Bendahara</option>
                                    </select>
                                </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_jalan" required="required" autocomplete="off">
                                        <label class="form-label">Nama Jalan</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="provinsi" required="required" autocomplete="off">
                                        <option value="">-- Pilih Provinsi --</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Jambi">Jambi</option>
                                    </select>
                                </div>
                                </div><br>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="kabupaten" required="required" autocomplete="off">
                                        <option value="">-- Pilih Kabupaten --</option>
                                        <option value="Pringsewu">Pringsewu</option>
                                        <option value="Pesawaran">Pesawaran</option>
                                        <option value="Bandar Lampung">Bandar Lampung</option>
                                        <option value="Metro">Metro</option>
                                        <option value="Mesuji">Mesuji</option>
                                    </select>
                                </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode_pos" required="required" autocomplete="off">
                                        <label class="form-label">Kode Pos</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="notelp" required="required" autocomplete="off">
                                        <label class="form-label">No Telpon</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required="required" autocomplete="off">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Pas Foto</label><br>
                                        <input type="file" class="form-control" name="pasfoto" id="pasfoto" onchange="simpanFoto()" required>
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
            

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIK/NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pangkat/Golongan</th>
                                            <th>Jabatan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

    <script>
    function simpanFoto(){
        var nip = document.getElementById("nik_nip").value;
        var fileSelect = document.getElementById("pasfoto");
        var files = fileSelect.files[0];
        form_data = new FormData(); // added
        form_data.append('nip', nip); // added
        form_data.append('pasfoto', files); // added
        console.log(nip);
        //console.log(files);
        
            $.ajax({
            type: 'POST',
            data: form_data,
            url: 'http://egov.ubl.ac.id/ApiEgov/Admin/addBiodata',
            contentType : false, // added
            processData : false, // added
            success: function(data) {
                console.log("Success");
            },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.responseText);
                        console.log("Error !");
                    }
            });
        }
    </script>
 @endsecton                  