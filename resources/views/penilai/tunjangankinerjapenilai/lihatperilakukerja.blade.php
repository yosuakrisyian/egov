@extends('layouts.PenilaiLayout')
@section('content')
                  
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DAFTAR NILAI PERILAKU KERJA                    
                </h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>                                            
                                            <th>NIP Dinilai</th>
                                            <th>Orientasi Pelayanan</th>
                                            <th>Integritas</th>
                                            <th>Komitmen</th>
                                            <th>Disiplin</th>
                                            <th>Kerjasama</th>
                                            <th>Kepemimpinan</th>
                                            <th>Total Skor</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>                                                
                                                <td>{{ $data['data'][0]['nik_dinilai'] }}</td>
                                                <td>{{ $data['rataRataOrientasiPelayanan'] }}</td>
                                                <td>{{ $data['rataRataIntegritas'] }}</td>
                                                <td>{{ $data['rataRataKomitmen'] }}</td>
                                                <td>{{ $data['rataRataDisiplin'] }}</td>
                                                <td>{{ $data['rataRataKerjasama'] }}</td>
                                                <td>{{ $data['rataRataKepemimpinan'] }}</td>
                                                <td>{{ $data['totalSkor'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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