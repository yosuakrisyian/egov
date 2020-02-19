@extends('layouts.MyLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA TARGET SKP               
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updaterealisasiskp',$data->nik_nip) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nik_nip" value="{{$data->nik_nip}}" id="nip" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">NIK NIP</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nama" value="{{$data->nama}}" id="nama" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Nama</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="golongan" value="{{$data->golongan}}" id="golongan" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Golongan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="jabatan" value="{{$data->jabatan}}" id="jabatan" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Jabatan</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="kegiatan_tugas_jabatan" value="{{$data->kegiatan_tugas_jabatan}}" id="kegiatan_tugas_jabatan" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Kegiatan Tugas Jabatan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="kuantitas" value="{{$data->kuantitas}}" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Kuantitas</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="form-label">Kualitas</label>
                                                <select class="form-control" name="kualitas">
                                                    <option value="{{$data->kualitas}}">{{$data->kualitas}}</option>
                                                    <option value="1">100%</option>
                                                    <option value="0,75">75%</option>
                                                    <option value="0,50">50%</option>
                                                    <option value="0,25">25%</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="date" name="waktu" value="{{$data->waktu}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Waktu</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number"  name="biaya" value="{{$data->biaya}}" class="form-control" required="required" autocomplete="off">
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
        </div>

        </div>
</section>

@endsection