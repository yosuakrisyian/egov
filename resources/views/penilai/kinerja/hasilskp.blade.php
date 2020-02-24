@extends('layouts.PenilaiLayout')
@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    HASIL SKP                  
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
                                            {{ $datas[0]['data']['nik_nip'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                            {{ $datas[0]['data']['nama'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                            {{ $datas[0]['data']['golongan'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jabatan
                                            </td>
                                            <td>
                                            {{ $datas[0]['data']['jabatan'] }}
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
                                            <th>Kegiatan Tugas Jabatan</th>
                                            <th>Kuantitas</th>
                                            <th>Kualitas</th>
                                            <th>Waktu</th>
                                            <th>Penghitungaan</th>
                                            <th>Nilai Capaian</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data['data']['kegiatan_tugas_jabatan'] }}</td>
                                                <td>{{ $data['aspekKuantitas'] }}</td>
                                                <td>{{ $data['aspekKualitas'] }}</td>
                                                <td>{{ $data['aspekWaktu'] }}</td>
                                                <td>{{ $data['totalPenghitunganSKP'] }}</td>
                                                <td>{{ $data['total'] }}</td>
                                            </tr>
                                            @endforeach
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
                                                Nilai Capaian Akhir SKP
                                            </td>
                                            <td>
                                                {{ $totalCapaian }}
                                            </td>
                                            <td>
                                                {{ $predikat }}
                                            </td>
                                        </tr>
                                                                                  
                                </table>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
</section>

@endsection