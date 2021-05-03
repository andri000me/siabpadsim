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
h1{
    text-transform: uppercase;
}
table{
    font-size: 12pt;
    border-collapse: collapse;
}
.hurufkapital{
    text-transform: uppercase;
}
.outline{
    outline-style: double;
    }
.kapital{
    text-transform: uppercase;
}
</style>
<?php
$tanggal = $pengadaan->tanggal_kwitansi;
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



$tanggalb = $pengadaan->tanggal_suratperintahpengiriman;
 
$tglb = date("d-m-Y", strtotime($tanggalb));

$harib = date("l", strtotime($tanggalb)); 
$harib = $hari_indonesia[$harib];


$bulanhurufb = date("m", strtotime($tanggalb)); 
$bulanhurufb = $bulanhuruf_indonesia[$bulanhurufb];
$bulannamab = $bulannama_indonesia[$bulanhurufb];

$tanggalhurufb = date("d", strtotime($tanggalb)); 
$tanggalsuratb = date("d", strtotime($tanggalb)); 
$tahunsuratb = date("Y", strtotime($tanggalb)); 
$tanggalhurufb = $tanggalhuruf_indonesia[$tanggalhurufb];

$tahunb = date("y", strtotime($tanggalb)); 
$tahunb = $tahun_indonesia[$tahunb];



?>
<table align="center" style="width:100%">
<tr>
<td>
<b>KWITANSI (TANDA PEMBAYARAN)</b>
</td>
<td style="width:30%">
    <table class="outline">
        <tr><td>Tanggal</td> <td>:</td> <td><?php echo $tanggalsurat; ?> <?php echo $bulannama;?> <?php echo $tahunsurat;?></td></tr>
        <tr><td>Nomor</td> <td>:</td> <td><?php echo $pengadaan->no_kwitansi; ?></td></tr>
        <tr><td>Kode Keg</td> <td>:</td> <td>"Kode Kegiatan"</td></tr>
        <tr><td>Kode Rek</td> <td>:</td> <td>"Kode Rekening"</td></tr>
    </table>
</td>
</tr>
</table>
</head>

<body>


<p class="kapital">SUDAH TERIMA DARI BENDAHARA PENGELUARAN <?php echo $pengadaan->nama_opd; ?> KOTA PADANGSIDIMPUAN</p>



<table align="center" style="width:100%">
<tr>
    <td style="width:25%">Uang Sebanyak</td>
    <td ></td>
</tr>
<tr>
    <td>Rp. "NOMINAL",-</td>
    <td></td>
</tr>
<tr>
    <td>Yaitu Untuk</td>
    <td>Pembayaran Biaya Belanja <?php echo $pengadaan->belanja; ?> pada <?php echo $pengadaan->nama_opd; ?> Kota Padangsidimpuan untuk bulan <?php echo $bulannamab;?> Tahun <?php echo $tahunsuratb;?> Sesuai dengan Surat Pesanan Nomor <?php echo $pengadaan->no_suratperintahpengiriman; ?> tanggal <?php echo $tanggalsuratb; ?> <?php echo $bulannamab;?> <?php echo $tahunsuratb;?></td>
</tr>
</table>
<tr><hr  color="black" size="2px"/></tr>
<table align="center" style="width:100%">
<tr>
    <td></td>
    <td></td>
    <td colspan="2" align="right">Padang Sidempuan, <?php echo $tanggalsurat; ?> <?php echo $bulannama;?> <?php echo $tahunsurat;?></td>
</tr>
<tr>
    <td>Disetujui</td>
    <td>Mengetahui</td>
    <td>Dibayar Oleh</td>
    <td>Penerima</td>
</tr>
<tr>
    <td>Pengguna Anggaran</td>
    <td>PPTK</td>
    <td>Bendahara</td>
    <td></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><?php echo $pengadaan->nama_kepala; ?></td>
    <td><?php echo $pengadaan->nama; ?></td>
    <td><?php echo $pengadaan->nama_bendahara; ?></td>    
    <td><?php echo $pengadaan->nama_pimpinan; ?></td>
</tr>

<tr>
    <td>Pangkat</td>
    <td>Pangkat</td>
    <td>Pangkat</td>    
    <td>Pekerjaan</td>
</tr>

<tr>
    <td>NIP. <?php echo $pengadaan->nip_kepala; ?></td>
    <td>NIP. <?php echo $pengadaan->username; ?></td>
    <td>NIP. <?php echo $pengadaan->nip_bendahara; ?></td>    
    <td><?php echo $pengadaan->nama_rekanan; ?></td>
</tr>

</table>
<br><br><br><br><br><br><br><br>
<p>*untuk belanja di atas 5 juta</p>
</footer>

</html>









   
