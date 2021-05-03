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
}
.hurufkapital{
    text-transform: uppercase;
}
</style>
<?php
$tanggal = $pengadaan->tanggal_suratperintahpengiriman;
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
<table align="center" style="width:100%">
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
<table>
</head>

<body>
<p class="jarak-lh" align="center"><u><b>SURAT PERINTAH PENGIRIMAN (SPP)</u></b></p>
<p class="jarak-lh" align="center">Nomor : <?php echo $pengadaan->no_suratperintahpengiriman; ?></p>
<p class="jarak-lh" align="center">Paket Pekerjaan : </p>   
<p class="jarak-lh" align="center"><?php echo $pengadaan->paketpekerjaan; ?> </p>  


<p>Yang bertanda tangan di bawah ini :</p>

<table>
<tr><td><b><?php echo $pengadaan->nama_kepala; ?></b><td></tr>
<tr><td>KEPALA <?php echo $pengadaan->nama_opd; ?> KOTA PADANG SIDIMPUAN<td></tr>
<tr><td><?php echo $pengadaan->alamat_opd; ?><td></tr>
<tr><td>selanjutnya disebut sebagai <b>Pejabat Pembuat Komitmen;</b><td></tr>
</table>

<p>berdasarkan <?php echo $pengadaan->spk_paketpekerjaan; ?>, bersama ini memerintahkan:</p>

<table>
<tr><td><b><?php echo $pengadaan->nama_rekanan; ?></b><td></tr>
<tr><td><?php echo $pengadaan->alamat_rekanan; ?><td></tr>
<tr><td>yang dalam hal ini diwakili oleh : <b><?php echo $pengadaan->nama_pimpinan; ?>, Pimpinan/Penanggung Jawab</b><td></tr>
<tr><td>selanjutnya disebut sebagai <b>Penyedia;</b><td></tr>
</table>

<p>untuk mengirimkan barang dengan memperhatikan ketentuan-ketentuan sebagai berikut : </p>

<p> 1. <u>Rincian Barang:</u>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>      
                        <th>Harga Satuan</th>                   
                        <th>Pajak</th> 
                        <th>Jumlah Harga Satuan(Rp)</th>
                        <th>Jumlah Harga (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right">... pajak</td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right">....</td>
                    
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
                <tr>
                        <td align="center" colspan="6">JUMLAH TOTAL</td> 
                        <td align="right">Rp</td>
                </tr>
                <tr>
                        <td align="center" colspan="6">JUMLAH TOTAL DIBULATKAN</td> 
                        <td align="right">Rp</td>
                </tr>
    
            </table>

        <table>
        <tr><td>2.</td> <td><u>Tanggal barang diterima :</u> 7 (Tujuh) hari kalender setelah SP disampaikan;</td></tr>
        <tr><td>3.</td> <td><u>Syarat-syarat pekerjaan :</u> sesuai dengan persyaratan dan ketentuan SPK;</td></tr>
        <tr><td>4.</td> <td><u>Waktu penyelesaian :</u> "tanggal penerimaan"</td></tr>
        <tr><td>5.</td> <td><u>Alamat Pengiriman Barang :</u>  "nama opd" Kota Padangsidimpuan</td></tr>
        <tr><td></td> <td><u></u>  "alamat opd"</td></tr>
        <tr><td>6.</td> <td><u>Denda :</u>  Terhadap setiap hari keterlambatan penyelesaian pekerjaan Penyedia Jasa akan dikenakan Dengan Keterlambatan sebesar 1/1000 (satu permil) dari Nilai sisa SPK yang belum dilaksanakan (tidak termasuk PPN);</td></tr>
      
        
        </table>
</body>

<footer>

<table align="center" style="width:100%">
<tr>
    <td>Padang Sidempuan, <?php echo $tanggalsurat; ?> <?php echo $bulannama;?> <?php echo $tahunsurat;?></td>
    <td>Menerima dan menyetujui</td>
</tr>
<tr>
    <td>Untuk dan atas nama</td>
    <td>Untuk dan atas nama</td>
</tr>
<tr>
    <td><?php echo $pengadaan->nama_opd; ?> Kota Padangsidimpuan</td>
    <td><?php echo $pengadaan->nama_rekanan; ?></td>
</tr>
<tr>
    <td>PEJABAT PEMBUAT KOMITMEN</td>
    <td></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><b><?php echo $pengadaan->nama_kepala; ?></b></td>
    <td><b><?php echo $pengadaan->nama_pimpinan; ?></b></td>
</tr>

<tr>
    <td><b>Kepala <?php echo $pengadaan->nama_opd; ?> Kota Padang Sidempuan</b></td>
    <td><b>PIMPINAN/PENANGGUNG JAWAB</b></td>
</tr>

<tr>
    <td><b>NIP. <?php echo $pengadaan->nip_kepala; ?></b></td>
    <td></td>
</tr>

</table>
</footer>

</html>









   
