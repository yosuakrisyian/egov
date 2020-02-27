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
                                                NIP
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
                                            <th><p align="center">Orientasi Pelayanan</p></th>
                                            <th><p align="center">Integritas</p></th>
                                            <th><p align="center">Komitmen</p></th>
                                            <th><p align="center">Disiplin</p></th>
                                            <th><p align="center">Kerjasama</p></th>
                                            <th><p align="center">Kepemimpinan</p></th>
                                            <th><p align="center">Total Nilai</p></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <tr>
                                                <td><p align="center">{{ $hasil['rataRataOrientasiPelayanan'] }}</p></td>
                                                <td><p align="center">{{ $hasil['rataRataIntegritas'] }}</p></td>
                                                <td><p align="center">{{ $hasil['rataRataKomitmen'] }}</p></td>
                                                <td><p align="center">{{ $hasil['rataRataDisiplin'] }}</p></td>
                                                <td><p align="center">{{ $hasil['rataRataKerjasama'] }}</p></td>
                                                <td><p align="center">{{ $hasil['rataRataKepemimpinan'] }}</p></td>
                                                <td><p align="center">{{ $hasil['totalSkor'] }}</p></td>
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
                    <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th><p align="center">Nilai Sebutan</p></th>
                                            <th><p align="center">Nilai Angka</p></th>
                                            <th><p align="center">Uraian</p></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <tr>
                                                <td><p align="center">Tercapai sesuai Target</p></td>
                                                <td><p align="center">100</p></td>
                                                <td>a. Memiliki disiplin kerja tinggi dan menjadi tauladan, memiliki loyalitas sangat tinggi, mampu melaksanakan tugas pokok dan fungsi dengan sangat baik (bertanggung jawab, jujur, ikhlas, dan tidak pernah menyalahgunakan wewenang).</br>b. Mampu menjabarkan dan menyelesaikan tugas serta memiliki kinerja sangat tinggi dan dapat dipertanggungjawabkan serta menjadi kebijakan pimpinan</br>c. Bekerjasama dengan rekan kerja, atasan, bawahan baik di dalam maupun di luar organisasi serta menghargai dan menerima pendapat orang lain (menciptakan kondisi kerja yang kondusif)</td>
                                            </tr>
                                            <tr>
                                                <td><p align="center">Tercapai</p></td>
                                                <td><p align="center">75</p></td>
                                                <td>a. Memiliki disiplin kerja, tauladan bagi rekan dan institusinya</br>b. Memiliki kinerja dalam melaksanakan tugas dan fungsinya dengan baik.</br>c. Bekerjasama dengan baik dengan rekan kerja, atasan, bawahan baik di dalam maupun di luar organisasi serta menghargai dan menerima pendapat orang lain, bersedia menerima keputusan yang diambil secara sah yang terlah menjadi keputusan bersama.</td>
                                            </tr>
                                            <tr>
                                                <td><p align="center">Cukup Tercapai</p></td>
                                                <td><p align="center">50</p></td>
                                                <td>a. Disiplin kerja masih kurang (sering izin, terlambat dalam penyelesaian pekerjaan.</br>b. Penguasaan pekerjaan kurang maksimal dan sering terbengkalai dan kinerja masih kurang (masih perlu dilakukan pembinaan dan pengawasan.</br>c. Kurang dalam bekerjasama dengan rekan kerja, atasan, bawahan baik didalam maupun di luar organisasi serta adakalanya kurang menghargai dan menerima pendapat orang lain, kadang-kadang menyalahgunakan wewenang dan kurang menerima keputusan yang diambil secara sah yang telah menjadi keputusan bersama</td>
                                            </tr>
                                            <tr>
                                                <td><p align="center">Kurang/tidak tercapai</p></td>
                                                <td><p align="center">25</p></td>
                                                <td>a. Kurang disiplin (sering tidak masuk kerja)</br>b. Kinerja kurang dan tidak pernah melaksanakan tugas dengan baik (sering bertentangan dengan pimpinan bahkan rekan sekerja)</br>c. Kurang mampu bekerjasama dengan rekan kerja, atasan, bawahan baik di dalam maupuna diluer organisasi serta kurang menghargai dan menerima pendapat orang lain (masa bodoh dengan lingkungan kerja)</td>
                                            </tr>
                                    </tbody>
                                </table>

                        
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>

@endsection