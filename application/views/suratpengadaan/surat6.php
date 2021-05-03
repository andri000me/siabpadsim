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
}
</style>
<?php
$tanggal = $pengadaan->tanggal_bappk;
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
<p class="jarak-lh" align="center"><u>BERITA ACARA SERAH TERIMA BARANG</u></p>
<p class="jarak-lh" align="center">Nomor : <?php echo $pengadaan->no_bappk; ?> </p>
<br>
 <p> Pada hari ini <?php echo $hari;?> tanggal <?php echo $tanggalhuruf;?> bulan <?php echo $bulanhuruf;?> tahun <?php echo $tahun;?>, kami yang bertandatangan di bawah ini :   </p>

 <table>
<tr><p><td>&nbsp &nbsp &nbspNama</td>	<td>:</td> <td><?php echo $pengadaan->nama_ppk; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbspJabatan</td>	<td>:</td> <td> Pejabat Pembuat Komitmen </td></p></tr>
</table>
<p class="jarak-lh"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Selaku Pejabat Pembuat Komitmen (PPK)  </p>
<table>
<tr><p><td>&nbsp &nbsp &nbspNama</td>	<td>:</td> <td><?php echo $pengadaan->nama_kepala; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbspJabatan</td>	<td>:</td><td> Pengguna Anggaran</td></p></tr>
</table>
<p class="jarak-lh"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Selaku Pengguna Anggaran (PA)  </p>
<p>Sesuai dengan Surat Perintah Pengiriman (SPP) / Surat Perintah Kerja (SPK) / Surat Perjanjian (SP) Nomor : <?php echo $pengadaan->no_suratperintahpengiriman; ?> Tanggal <?php echo date("d-m-Y", strtotime($pengadaan->tanggal_suratperintahpengiriman)) ; ?> telah menerima barang yang diserahkan oleh rekanan <?php echo $pengadaan->nama_rekanan; ?> dalam keadaan baik dan cukup sebagaimana tersebut dibawah ini :  </p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Uraian/Nama Barang</th>
                        <th>Banyaknya</th> 
                        <th>Satuan</th> 
                        <th>Keterangan</th> 
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
                        <td align="center"><?= $item->Satuan_ssh;?></td>
                        <td align="center"><?= $item->Spesifikasi_ssh;?></td>
                        
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
            </table>
<p> Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya.   </p>                      
<table  align="right">
<tr><td>Padangsidimpuan, <?php echo $tanggalsurat; ?> <?php echo $bulannama;?> <?php echo $tahunsurat;?></td></tr>
</table>
</body>

<footer>
<br><br>
<table  align="left">
<tr><td>Yang Menyerahkan </td></tr>
<tr><td>Pejabat Pembuat Komitmen </td></tr>
<tr height="75px"></tr><td><u><?php echo $pengadaan->nama_ppk; ?></u></td></tr>
<tr><td>Direktur</td></tr></table>
    
    <table  align="right">
<tr><td>Diterima </td></tr>
<tr><td> Pengguna Anggaran </td></tr>
<tr height="75px"></tr><td><?php echo $pengadaan->nama_kepala; ?></td></tr>
<tr><td>NIP. <?php echo $pengadaan->nip_kepala; ?></td></tr></table>
</footer>

</html>