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
          <td width="60%">: {{ $data->nik }}</td>
          <td align="right">Bandar Lampung, </td>
          <td>:</td>
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
          <td>Kepala Bagian</td>
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
        <!-- <tr>
          <td>Unit Kerja</td> <td>: {{ $data->unit_kerja }}</td>
        </tr>
        <tr>
          <td>Instansi</td> <td>: {{ $data->instansi }}</td>
        </tr> -->
    </table>

    <p>Dengan ini mengajukan permohonan izin belajar untuk melanjutkan studi pada :</p>
<!-- 
    <table style="width: 100%;">
        <tr>
          <td>Perguruan Tinggi</td>
           <td width="75%">: {{ $data->perguruan_tinggi }}</td>
        </tr>
        <tr>
          <td>Fakultas</td> <td>: {{ $data->fakultas }}</td>
        </tr>
        <tr>
          <td>Program Studi</td> <td>: {{ $data->program_studi }}</td>
        </tr>
        <tr>
          <td>Jenjang</td> <td>: {{ $data->jenjang }}</td>
        </tr>
    </table>  -->

    <p>Sebagai bahan pertimbangan bersama ini saya lampirkan :</p>
    
    <div>1. Fotocopy SK Pengangkatan CPNS</div>
    <div>2. Fotocopy SK Kenaikan Pangkat Terakhir</div>
    <div>3. Fotocopy DP3 Terakhir</div>
    <div>4. Daftar Riwayat Hidup</div>
    <div>5. Surat Keterangan Tidak Menganggu Tugas Kedinasan</div>
    <div>6. Surat Keterangan Mahasiswa Aktif</div>
    <div>7. Jadwal Kuliah</div>
    <div>8. Fotocopy Sertifikat Akreditas Perguruan Tinggi</div>
    <div>9. Fotocopy Ijazah Terakhir</div>
    <div>10. Fotocopy Sk Mutasi</div>
    <div>11. Fotocopy Kartu Mahasiswa</div>

    <p>Demikian surat permohonan ini saya sampaikan, atas perhatiannya saya ucapkan terima kasih</p>
    <p align="right">Bandar Lampung, </p>
    <p width="325px" valign="top" style="padding-right: 40px;" align="right">Hormat Saya,</p><br>
    <p align="right" style="padding-right: 45px;"><u>{{ $data->name }}</u></p>
    <p width="-75%"style=" margin-top:-10px;padding-right: 40px;" align="right"> NIK. {{ $data->nik }}</p>

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