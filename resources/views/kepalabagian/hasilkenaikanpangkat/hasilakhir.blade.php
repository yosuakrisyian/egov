@extends('layouts.KepalabagianLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA Hasil Akhir                    
                </h2>
            </div>

            @if(session('adaAksi'))
                @if(session('sukses'))
                    <div class="alert bg-teal alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{ session('pesan') }}
                    </div>
                @else
                    <div class="alert bg-pink alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{ session('pesan') }}
                    </div>
                @endif
            @endif

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            
                            </h2>
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
                                                {{ Auth()->user()->nik }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                                {{ Auth()->user()->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                                {{ Auth()->user()->golongan }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jabatan
                                            </td>
                                            <td>
                                                {{ Auth()->user()->jabatan }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NIK/NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Masa Kerja</th>
                                            <th>SKP 2Tahun Terakhir</th>
                                            <th>Predikat</th>
                                            <th>Jenjang</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data['data']['nik'] }}</td>
                                                <td>{{ $data['data']['name'] }}</td>
                                                <td>{{ $data['data']['age'] }}</td>
                                                <td>{{ $data['data']['nilai_capaian_skp_akhir'] }}</td>
                                                <td>{{ $data['data']['predikat'] }}</td>
                                                <td>{{ $data['data']['pendidikanTerakhir'] }}</td>
                                                <td>
                                                    {{ $data['hasil']}}
                                                </td>
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

</script>

 @endsection