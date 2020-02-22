@extends('layouts.PenilaiLayout')
@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    HITUNG TPP                  
                </h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                    <div class="body">
                           <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>
                                                NIK
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jabatan
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                </table>
                                </div>
                            </div>
                        </div>



                        <div class="body">
                           <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>
                                                Hasil SKP
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>





                    <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Orientasi Pelayanan</th>
                                            <th>Integritas</th>
                                            <th>Komitmen</th>
                                            <th>Disiplin</th>
                                            <th>Kerjasama</th>
                                            <th>Kepemimpinan</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                    </tbody>
                                </table>

                        
                            </div>
                        </div>

                    </div>

                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                   

                    <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>
                                                Nilai Kehadiran Kerja
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                Nilai SKP
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Masukan Nilai Capaian Kerja
                                            </td>
                                            <td>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <select class="form-control" name="jabatan">
                                                        <option value="1">100%</option>
                                                        <option value="0,75">75%</option>
                                                        <option value="0,5">50%</option>
                                                        <option value="0,25">25%</option>
                                                        <option value="0">0%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </td>
                                        </tr>
                                                                                  
                                </table>
                                <td>
                                            <a href="">
                                                        <button class="btn btn-warning">Hitung TPP</button>
                                            </a>
                                        </td> 
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
</section>

@endsection