<!DOCTYPE html>
<html>
  <head>
    <style>
      html{
        margin:20px 70px;
        },
        .img {
          float: left;
          margin-top:30px;
          margin-left:20px;
        },
        h2 {
          font-size: 26px;
        },
        .up {
          margin-top:-20px;
        },
        .left1 {
          margin-left: 130px;
        },
        .up2 {
          margin-top:-100px;
        },
        .up3 {
          margin-top:-10px;
        },
        .tebal {
          font-weight: bold;
          font-size: 40px;
        },
        .alamat {
          font-size: 14px;
        },
        .leftbody {
          margin-left: 0px;
        },
        .leftbody2 {
          margin-left: 10px;
        }
    </style>
  </head>
  <body>
    <img class="img" src="{{ url('images/xxx.png') }}" width="80">
    <center>
      <h2>PEMERINTAH PROVINSI LAMPUNG</h2>
      <h3 class="up">BADAN KEPEGAWAIAN DAERAH (BKD)</h3>
      <p class="up left1 alamat"> Jl. Wolter Mongonsidi No. 69</p>
      <p class="up left1 alamat">Telp. (0721)481107) Teluk Betung</p>
      <p class="up left1 alamat">Bandar Lampung, 28 Februari 2019</p>
    </center>
    <center>
      <h1 class="up tebal" style="margin-left:0px;">___________________________________</h1>
     
    </center>

    <table style="width: 100%;">
        <tr>
          
          <td align="right">Bandar Lampung, 28 Februari 2020 </td>
        </tr>
        
    </table>

    <table style="width: 100%;">
        <tr>
          <td>Nama</td>
           <td width="75%">: {{ $data->name }}</td>
        </tr>
        <tr>
          <td>NIP</td> <td>: {{ $data->nik }}</td>
        </tr>
        <tr>
          <td>Pangkat / Golongan</td> <td>: {{ $data->golongan }}</td>
        </tr>
        <tr>
          <td>Jabatan</td> <td>: {{ $data->jabatan }}</td>
        </tr>
    </table>

    <p>Rincian TPP</p>
    <table style="width: 100%;">
        <tr>
          <td>Maksimal Hari Kerja</td>
           <td width="75%">: 24 Hari Kerja</td>
        </tr>
    </table>

                        <div class="body">
                            <div class="table-responsive">
                                <table border="1" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th><p align="center">Jumlah Kehadiran</p></th>
                                            <th><p align="center">Persentase Kehadiran</p></th>
                                            <th><p align="center">Skor Kehadiran</p></th>
                                            <th><p align="center">Nominal Kehadiran</p></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <tr>
                                                <td><p align="center">{{ $data->jumlahabsen }}</p></td>
                                                <td><p align="center">{{ $data->persenabsen }}%</p></td>
                                                <td><p align="center">{{ $data->skorabsen }}</p></td>
                                                <td><p align="center">Rp. {{ $data->nominalabsen }}</p></td>
                                            </tr>
                                    </tbody>
                                </table>

                        
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table border="1" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th><p align="center">Persentase Kinerja</p></th>
                                            <th><p align="center">Skor Kinerja</p></th>
                                            <th><p align="center">Nominal Kinerja</p></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <tr>
                                                <td><p align="center">{{ $data->nilai_capaiankinerja }}%</p></td>
                                                <td><p align="center">{{ $data->skorcapaian }}</p></td>
                                                <td><p align="center">Rp. {{ $data->nominalcapaian }}</p></td>
                                            </tr>
                                    </tbody>
                                </table>

                        
                            </div>
                        </div>
                        <p>TPP :</p> <p>Rp. {{ $data->nominalabsen }} + Rp. {{ $data->nominalcapaian }}</p>
                        <p>Rp. {{ $data->hasiltpp }}</p>

                    </div>

    <!-- <p>Demikian surat permohonan ini saya sampaikan, atas perhatiannya saya ucapkan terima kasih</p>
    <p align="right">Bandar Lampung, </p>
    <p width="325px" valign="top" style="padding-right: 40px;" align="right">Hormat Saya,</p><br>
    <p align="right" style="padding-right: 45px;"><u>{{ $data->name }}</u></p>
    <p width="-75%"style=" margin-top:-10px;padding-right: 40px;" align="right"> NIK. {{ $data->nik }}</p> -->

    <!-- <p>{{ $data->name }}</p>
    <p>{{ $data->name }}</p> -->
    
    
    <!-- <table>
      <tr>
        <td   align="right" >Hormat Saya</td>
      </tr>
      <tr>
      <p  align="right" >NIRA: {{ $data->nama_lengkap }}</p>
      </tr>
      <tr>
        <td width="325px" align="center" valign="top">NIRA: 18710002574</td>
      </tr> -->
     
    </table>
  </body>
</html>
<?php
function tglIndo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }
?>