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
          margin-top:-54px;
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
    <img class="img" src="{{ url('img/logo.png') }}" width="105">
    <center>
      <h2>DEWAN PENGURUS WILAYAH (DPW)</h2>
      <h3 class="up">PERSATUAN PERAWAT NASIONAL INDONESIA (PPNI)</h3>
      <h1 class="up">BANDAR LAMPUNG</h1>
      <p class="up left1 alamat">Sekretariat: Jl. Purnawirawan Gg. Cemara No. 16, Kel. Gedungmeneng,</p>
      <p class="up left1 alamat">Kec. Rajabasa, Bandar Lampung, Telp. 081373038474</p>
      <p class="up left1 alamat">E-mail: info@ppni-bandarlampung.or.id, website: www.ppni-bandarlampung.or.id</p>
    </center>
    <center>
      <h1 class="up2 tebal" style="margin-left:0px;">___________________________________</h1>
      <!-- <h3 class="up3">{{ $data->instruksi }}</h3>
      <p class="up">Nomor : {{ $data->nomorSurat }}</p> -->
    </center>

    <table style="width: 100%;">
        <tr>
          <td width="60">Nomor</td>
          <td width="60%">: sdf</td>
          <td align="right">Bandar Lampung, sdf</td>
        </tr>
        <tr>
          <td>Lampiran</td>
          <td>: -</td>
        </tr>
        <tr>
          <td>Perihal</td>
          <td>: {{ $data->instruksi }}</td>
        </tr>
    </table>

    <table style="margin-top: 25px;">
        <tr>
          <td>Kepada Yth</td>
        </tr>
        <tr>
          <td>sdf</td>
        </tr>
        <tr>
          <td>Di -</td>
        </tr>
        <tr>
          <td><div style="margin-left: 20px;">Tempat</div></td>
        </tr>
    </table>

    <p>Dengan Hormat,</p>
    
    <div>
        sdf
    </div>
    <br>
    <p align="right" style="margin-top:30px;">
      Bandar Lampung, sdf
    </p>
    <center>
      <p>Dewan Pengurus Wilayah</p>
      <p>Persatuan Perawat Nasional Indonesia</p>
      <p>Provinsi Lampung</p>
    </center>
    <br><br>
    <table>
      <tr>
        <td width="325px" align="center" valign="top">sdf</td>
        <td width="325px" align="center" valign="top">sdf</td>
      </tr>
      <tr>
        <td width="325px" height="110px" align="center" valign="middle">
          <img src="{{ url('img/ttd') }}/{{ $data->scanTTD1 }}" alt="" width="100">
        </td>
        <td width="325px" height="110px" align="center" valign="middle">
          <img src="{{ url('img/ttd') }}/{{ $data->scanTTD2 }}" alt="" width="100">
        </td>
      </tr>
      <tr>
        <td width="325px" align="center" valign="top"><u>sdf</u></td>
        <td width="325px" align="center" valign="top"><u>sdf</u></td>
      </tr>
      <tr>
        <td width="325px" align="center" valign="top">NIRA: 18710002574</td>
        <td width="325px" align="center" valign="top">NIRA: 18710091879</td>
      </tr>
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