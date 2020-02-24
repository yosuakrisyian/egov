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
                                            {{ $datas->golongan }}
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
                                                {{ $hasilSKP->nilai_capaian_skp_akhir }} ({{ $hasilSKP->predikat }})
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
                                            <th>Total Nilai</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <tr>
                                                <td>{{ $hasil['rataRataOrientasiPelayanan'] }}</td>
                                                <td>{{ $hasil['rataRataIntegritas'] }}</td>
                                                <td>{{ $hasil['rataRataKomitmen'] }}</td>
                                                <td>{{ $hasil['rataRataDisiplin'] }}</td>
                                                <td>{{ $hasil['rataRataKerjasama'] }}</td>
                                                <td>{{ $hasil['rataRataKepemimpinan'] }}</td>
                                                <td>{{ $hasil['totalSkor'] }}</td>
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
                                                {{ $absen['jumlahhadir'] }}
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                Masukan Nilai Capaian Kerja
                                            </td>
                                            <td>
                                        <form action="{{ route('inputhasilhitungtpp', $datas->nik) }}" method="post">
                                             @csrf
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <select class="form-control" name="nilaiCapaian">
                                                        <option value="100">100%</option>
                                                        <option value="75">75%</option>
                                                        <option value="50">50%</option>
                                                        <option value="25">25%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @if(!$sudahHitungTpp)
                                                <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                                            @endif
                                            </form>
                                            </td>
                                        </tr>
                                                                                  
                                </table>
                                <td>
                                            
                                        </td> 
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
</section>

@endsection