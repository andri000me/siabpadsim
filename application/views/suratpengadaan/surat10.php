<html>
<head>
<style>
@media print 
{
   @page 

   {
    size: 8.27in 12.99in;
  }
}
.jarak-lh{
  line-height:10px;
}
p {
    font-size: 12spt;
}
table{
    font-size: 12pt;
    border-collapse: collapse;
}
</style>
<?php
$tanggal = $pengadaan->tanggal_bapembayaran;
$tgl = date("d-m-Y", strtotime($tanggal));

$hari = date("l", strtotime($tanggal)); 
$hari_indonesia = array('Monday'  => 'senin',
'Tuesday'  => 'selasa',
'Wednesday' => 'rabu',
'Thursday' => 'kamis',
'Friday' => 'jumat',
'Saturday' => 'sabtu',
'Sunday' => 'minggu');
$hari = $hari_indonesia[$hari];


$bulanhuruf = date("m", strtotime($tanggal)); 
$bulanhuruf_indonesia = array(
'01'  => 'satu',
'02'  => 'dua',
'03' => 'tiga',
'04' => 'empat',
'05' => 'lima',
'06' => 'enam',
'07' => 'tujuh',
'08' => 'delapan',
'09' => 'sembilan',
'10' => 'sepuluh',
'11' => 'sebelas',
'12' => 'dua belas');
$bulanhuruf = $bulanhuruf_indonesia[$bulanhuruf];
$bulannama_indonesia = array(
    'satu'  => 'Januari',
    'dua'  => 'Februari',
    'tiga' => 'Maret',
    'empat' => 'April',
    'lima' => 'Mei',
    'enam' => 'Juni',
    'tujuh' => 'Juli',
    'delapan' => 'Agustus',
    'sembilan' => 'September',
    'sepuluh' => 'Oktober',
    'sebelas' => 'November',
    'dua belas' => 'Desember');
$bulannama = $bulannama_indonesia[$bulanhuruf];

$tanggalhuruf = date("d", strtotime($tanggal)); 
$tanggalsurat = date("d", strtotime($tanggal)); 
$tahunsurat = date("Y", strtotime($tanggal)); 
$tanggalhuruf_indonesia = array(
'01'  => 'satu',
'02'  => 'dua',
'03' => 'tiga',
'04' => 'empat',
'05' => 'lima',
'06' => 'enam',
'07' => 'tujuh',
'08' => 'delapan',
'09' => 'sembilan',
'10' => 'sepuluh',
'11' => 'sebelas',
'12' => 'dua belas',
'13' => 'tiga belas',
'14' => 'empat belas',
'15' => 'lima belas',
'16' => 'enam belas',
'17' => 'tujuh belas',
'18' => 'delapan belas',
'19' => 'sembilan belas',
'20' => 'dua puluh',
'21' => 'dua puluh satu',
'22' => 'dua puluh dua',
'23' => 'dua puluh tiga',
'24' => 'dua puluh empat',
'25' => 'dua puluh lima',
'26' => 'dua puluh enam',
'27' => 'dua puluh tujuh',
'28' => 'dua puluh delapan',
'29' => 'dua puluh sembilan',
'30' => 'tiga puluh',
'31' => 'tiga puluh satu');
$tanggalhuruf = $tanggalhuruf_indonesia[$tanggalhuruf];

$tahun = date("y", strtotime($tanggal)); 
$tahun_indonesia = array(
'20'  => 'dua ribu dua puluh',
'21'  => 'dua ribu dua puluh satu',
'22' => 'dua ribu dua puluh dua',
'23' => 'dua ribu dua puluh tiga',
'24' => 'dua ribu dua puluh empat',
'25' => 'dua ribu dua puluh lima',
'26' => 'dua ribu dia puluh enam');
$tahun = $tahun_indonesia[$tahun];
?>
<table align="center">
<tr>
<td>
<img src="<?php echo base_url('theme/logopadsim.jpg')?>" width="100px">
<td>
<td>
<h3 class="jarak-lh" align="center">PEMERINTAH KOTA PADANGSIDIMPUAN</h3>
<h1 class="jarak-lh" align="center"><?php echo $pengadaan->nama_opd; ?></h1>
<p class="jarak-lh" align="center"><?php echo $pengadaan->alamat_kop_opd; ?></p>
<p class="jarak-lh" align="center"><?php echo $pengadaan->kecamatan_opd; ?></p>
<td>
</tr>
<tr>
<td colspan=3>
<hr  color="black" size="2px"/>
</td>
</tr>
</table>
</head>

<body>
<p class="jarak-lh" align="center"><b>BERITA ACARA PEMBAYARAN </b></p>
<p class="jarak-lh" align="center"><b>Nomor : <?php echo $pengadaan->no_bapembayaran; ?></b> </p>
 <p> &nbsp &nbsp Pada hari ini <?php echo $hari;?> tanggal <?php echo $tanggalhuruf;?> bulan <?php echo $bulanhuruf;?> tahun <?php echo $tahun;?>, kami masing-masing yang bertandatangan di bawah ini :  </p>

 <table>
<tr><p><td>&nbsp &nbsp 1.   Nama</td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp:</td> <td><?php echo $pengadaan->nama_ppk; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbsp    &nbsp Jabatan</td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp:</td><td>PPK pada <?php echo $pengadaan->nama_opd; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Alamat</td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp:</td><td><?php echo $pengadaan->alamat_opd; ?> Kota Padangsidimpuan</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp </td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp</td><td>Selanjutnya disebut sebagai Pejabat Penandatangan Kontrak; </td></p></tr>

</table>
<table>
<tr><p><td>&nbsp &nbsp 2.   Nama</td>	<td>:</td> <td><?php echo $pengadaan->nama_pimpinan; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbsp    &nbsp Perusahaan</td>	<td>:</td><td><?php echo $pengadaan->nama_rekanan; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Alamat</td>	<td>:</td><td><?php echo $pengadaan->alamat_rekanan; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nama Kegiatan</td>	<td>:</td><td>Pengadaan</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nama Pekerjaan </td>	<td>:</td><td>Pengadaan</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Sumber Dana </td>	<td>:</td><td>APBD</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nilai Pekerjaan  </td>	<td>:</td><td>Nilai Pekerjaan Rp. ...</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Pelaksana  </td>	<td>:</td><td><?php echo $pengadaan->nama_rekanan; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Alamat  </td>	<td>:</td><td><?php echo $pengadaan->alamat_rekanan; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp NPWP  </td>	<td>:</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nomor Rekening  </td>	<td>:</td><td>Bank</td></p></tr>

</table>
<p> &nbsp &nbsp Dinyatakan bahwa prestasi pekerjaan telah mencapai 100% (seratus persen) atas penagihan sebesar Rp……………….,- (………………) sesuai dengan Surat Perintah Kerja(SPK) / Surat Perintah Pengiriman (SPP)** dari Pejabat Pembuat Komitmen pada <?php echo $pengadaan->nama_opd; ?>. Kota Padangsidimpuan kepada <?php echo $pengadaan->nama_rekanan; ?>, maka PIHAK KEDUA berhak menerima pembayaran dari PIHAK PERTAMA dengan uraian sebagai berikut :  </p>

<table>
<tr><p><td>&nbsp &nbsp &nbsp &nbsp   Nilai Pembayaran</td>	<td>:</td> <td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp &nbsp    &nbsp Potongan Pajak</td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp a. PPN</td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp b. PPh Pasal 22 </td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp c. PPh Pasal 23 </td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp d. Pasal 4 ayat 2 </td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp e. Pajak daerah  </td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Jumlah Potongan  </td>	<td>:</td><td>Rp. ......</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Pembayaran setelah di potong PPN dan PPh </td>	<td>:</td><td>Rp. ......</td></p></tr>
</body>
<footer>
<tr height="30px"><br><br></tr>
<table  align="left">
<tr><td>PIHAK KEDUA</td></tr>
<tr><td><?php echo $pengadaan->nama_rekanan; ?></td></tr>
<tr height="75px"></tr><td>(<?php echo $pengadaan->nama_pimpinan; ?>)</td></tr>
<tr><td><b>Direktur</b></td></tr></table>
    
    <table  align="right">
<tr><td>PIHAK PERTAMA</td></tr>
<tr><td>Pejabat Pembuat Komitmen</td></tr>
<tr height="75px"></tr><td>(<?php echo $pengadaan->nama_ppk; ?>)</td></tr>
<tr><td><b>NIP. <?php echo $pengadaan->nip_ppk; ?></b></td></tr></table>

    </tr>
    <br>
<br><br><br><br><br><br><br><br>
<table align="center"
>
<tr><td align="center"><b>Mengetahui</b></td></tr>
<tr><td align="center"><b>Pengguna Anggaran</b></td></tr>
<tr height="75px"></tr><td align="center">&nbsp &nbsp (<?php echo $pengadaan->nama_kepala; ?>)</td></tr>
<tr><td align="center"><b>&nbsp &nbspNIP. <?php echo $pengadaan->nip_kepala; ?></b></td></tr>
</table>   
</footer>
