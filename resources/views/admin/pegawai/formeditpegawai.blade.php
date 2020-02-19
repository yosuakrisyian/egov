@extends('layouts.MyLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA PEGAWAI                    
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updatepegawai',$data->nik) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nik" value="{{$data->nik}}" id="nip" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">NIK</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="name" value="{{$data->name}}" id="nama_lengkap" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Nama Lengkap</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="email" value="{{$data->email}}" id="email" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">E-Mail</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="tempatLahir" value="{{$data->tempatLahir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Tempat Lahir</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="date" name="tanggalLahir" value="{{$data->tanggalLahir}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Tanggal Lahir</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="form-label">Jabatan</label>
                                                <select class="form-control" name="jabatan">
                                                    <option value="{{$data->jabatan}}">{{$data->jabatan}}</option>
                                                    <option value="Kepala Dinas">Kepala Dinas</option>
                                                    <option value="Kepala Biro">Kepala Biro</option>
                                                    <option value="Kepala Bagian">Kepala Bagian</option>
                                                    <option value="Sekretaris">Kelapa Sub Bagian</option>
                                                    <option value="Sekretaris">Kelapa Seksi</option>
                                                    <option value="Bendahara">Staff Fungsional Umum</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="form-label">Golongan</label>
                                                <select class="form-control" name="golongan" value="{{$data->golongan}}">
                                                    <option value="{{$data->golongan}}">{{$data->golongan}}</option>
                                                    <option value="IA">IIA</option>
                                                    <option value="IB">IIB</option>
                                                    <option value="IC">IIC</option>
                                                    <option value="ID">IID</option>
                                                    <option value="IIA">IIIA</option>
                                                    <option value="IIB">IIIB</option>
                                                    <option value="IIC">IIIC</option>
                                                    <option value="IID">IIID</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="provinsi" value="{{$data->provinsi}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Provinsi</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="kabupaten" value="{{$data->kabupaten}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Kabupaten</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="notelp" value="{{$data->notelp}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">No Telp</label>
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
        </div>

        </div>
</section>

@endsection