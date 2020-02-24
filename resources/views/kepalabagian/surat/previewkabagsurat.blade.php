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
      <p class="up left1 alamat">Bandar Lampung</p>
    </center>
    <center>
      <h1 class="up tebal" style="margin-left:0px;">___________________________________</h1>
      <!-- <h3 class="up3">{{ $data->instruksi }}</h3>
      <p class="up">Nomor : {{ $data->nomorSurat }}</p> -->
    </center>

    <table style="width: 100%;">
        <tr>
          <td width="60">Nomor</td>
          <td width="60%">: {{ $data->nik_nip }}</td>
          <td align="right">Bandar Lampung, </td>
          <td>: {{ $data->tanggal }}</td>
        </tr>
        <tr>
          <td>Lampiran</td>
          <td>: -</td>
        </tr>
        <tr>
          <td>Perihal</td>
          <td>:</td>
        </tr>
    </table>

    <table style="margin-top: 5px;">
        <tr>
          <td>Kepada Yth</td>
        </tr>
        <tr>
          <td>Gubernur Lampung</td>
        </tr>
        <tr>
          <td>Di -</td>
        </tr>
        <tr>
          <td><div style="margin-left: 20px;">Tempat</div></td>
        </tr>
    </table>

    <p>Dengan Hormat,</p>
    
    <p>Yang bertanda tangan dibawah ini:</p>
    <table style="width: 100%;">
        <tr>
          <td>Nama</td>
           <td width="75%">: {{ $data->nama_lengkap }}</td>
        </tr>
        <tr>
          <td>NIP</td> <td>: {{ $data->nik_nip }}</td>
        </tr>
        <tr>
          <td>Pangkat / Golongan</td> <td>: {{ $data->pangkat_gol }}</td>
        </tr>
        <tr>
          <td>Jabatan</td> <td>: {{ $data->jabatan }}</td>
        </tr>
    </table>

    <p>Menerangkan Bahwa :</p>

    <table style="width: 100%;">
        <tr>
          <td>Nama</td>
           <td width="75%">: {{ $data->nama_pegawai }}</td>
        </tr>
        <tr>
          <td>Nip</td> <td>: {{ $data->nip_pegawai }}</td>
        </tr>
        <tr>
          <td>Golongan</td> <td>: {{ $data->golongan_pegawai }}</td>
        </tr>
        <tr>
          <td>Jabatan</td> <td>: {{ $data->jabatan_pegawai }}</td>
        </tr>
        <tr>
          <td>Unit Kerja</td> <td>: {{ $data->unitkerja_pegawai }}</td>
        </tr>
    </table> 

    <p> Untuk mendapatkan persetujuan Melanjutkan Pendidikan {{ $data->jenjang}} di {{ $data->perguruan_tinggi }}:</p>
    <p> Rekomendasi persetujuan belajar ini kami berikan dengan pertimbangan :</p>
    
    <div>1. upaya peningkatan kesejahteraan PNS melalui peningkatan dan pengembangan Sumber Daya Manusia (SDM) </div>
    <div>2. Kegiatan pendidikan dilaksanakan diluar jam kerja dan tidak mengganggu pelaksanaan tugas kedinasan sesuai dengan ketentuan jam kerja yang berlaku</div>

    <p>Demikian surat rekomendasi ini kami berikan, untuk dapat digunakan sebagai mestinya.</p>
    <p align="right">Bandar Lampung, {{$data->tanggal}} </p>
    <p width="325px" valign="top" style="padding-right: 40px;" align="right">Hormat Kami,</p><br>
    <p align="right" style="padding-right: 45px;"><u>{{ $data->nama_lengkap }}</u></p>
    <p width="-75%"style=" margin-top:-10px;padding-right: 40px;" align="right"> NIK. {{ $data->nik_nip }}</p>

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