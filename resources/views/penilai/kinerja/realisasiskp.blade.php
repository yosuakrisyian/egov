@extends('layouts.PenilaiLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    BERI NILAI REALISASI SKP                   
                </h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                        </div>


                        <div class="body">
                           <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-responsive table-bordered">
                                    <tr>
                                            <td>
                                                NIK
                                            </td>
                                            <td>
                                                {{ $datas->nik }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                                 {{ $datas->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                                 {{ $datas->golongan}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jabatan
                                            </td>
                                            <td>
                                                {{ $datas->jabatan }}
                                            </td>
                                        </tr>
                                    </table>

                                    <form method="post" action="{{ route('inputrealisasiskp', $datas->nik) }}">
                                    @csrf
                           
                                <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="kegiatan_tugas_jabatan" id="kegiatan_tugas_jabatan" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Kegiatan Tugas Jabatan</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="kuantitas" id="kuantitas" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Kuantitas</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-line">
                                <label class="form-label">Kualitas</label>
                                <select class="form-control" name="kualitas">
                                    <option value="1">100%</option>
                                    <option value="0,75">75%</option>
                                    <option value="0,5">50%</option>
                                    <option value="0,25">25%</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="waktu" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Waktu</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" name="biaya" class="form-control" required="required" autocomplete="off">
                                <label class="form-label">Biaya</label>
                            </div>
                        </div>
                                           
                               <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# Basic Examples -->
        </div>
    </section>

 @endsection