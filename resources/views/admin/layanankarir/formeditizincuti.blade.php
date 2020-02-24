@extends('layouts.MyLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA IZIN CUTI                  
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updateadminizincuti',$data->nik_nip) }}" >
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
                                                <input type="text" name="nama_lengkap" value="{{$data->nama_lengkap}}" id="nama_lengkap" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Nama Lengkap</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="pangkat_gol" value="{{$data->pangkat_gol}}" id="pangkat_gol" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Pangkat Gol</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="jabatan" value="{{$data->jabatan}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Jabatan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" name="satuan_organisasi" value="{{$data->satuan_organisasi}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Satuan Organisasi</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" name="jumlah_hari" value="{{$data->jumlah_hari}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Jumlah Hari</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="date"  name="tanggal_cuti" value="{{$data->tanggal_cuti}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Tanggal Cuti</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="date"  name="batas_tanggalcuti" value="{{$data->batas_tanggalcuti}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Sampai Dengan</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="form-label">Kategori Cuti</label>
                                                <select class="form-control" name="kategori_cuti" value="{{$data->kategori_cuti}}">
                                                    <option value="{{$data->kategori_cuti}}">{{$data->kategori_cuti}}</option>
                                                    <option value="Cuti Tahunan">Cuti Tahunan</option>
                                                    <option value="Cuti Besar">Cuti Besar</option>
                                                    <option value="Cuti Sakit">Cuti Sakit</option>
                                                    <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                                    <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                                                    <option value="Cuti Bersama">Cuti Bersama</option>
                                                    <option value="Cuti di Luar Tanggungan Negara">Cuti di Luar Tanggungan Negara</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="alasan_cuti" value="{{$data->alasan_cuti}}" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Alasan Cuti</label>
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