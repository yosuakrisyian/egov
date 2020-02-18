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
                                                    <option value="Sekretaris">Sekretaris</option>
                                                    <option value="Bendahara">Bendahara</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="form-label">Pangkat/Golongan</label>
                                                <select class="form-control" name="pangkat" value="{{$data->pangkat}}">
                                                    <option value="{{$data->pangkat}}">{{$data->pangkat}}</option>
                                                    <option value="IIA">IIA</option>
                                                    <option value="IIA">IIB</option>
                                                    <option value="IIA">IIC</option>
                                                    <option value="IIA">IID</option>
                                                    <option value="IIA">IIIA</option>
                                                    <option value="IIA">IIIB</option>
                                                    <option value="IIA">IIIC</option>
                                                    <option value="IIA">IIID</option>
                                                </select>
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