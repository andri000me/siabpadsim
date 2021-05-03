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
h1{
    text-transform: uppercase;
}
</style>
<?php
$tanggal = $pengadaan->tanggal_suratpermohonanpenyedia;
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
<br>
<body>
<table  align="right">
<tr><td>Padangsidimpuan, <?php echo $tanggalsurat; ?> <?php echo $bulannama;?> <?php echo $tahunsurat;?></td></tr>
<tr><td>Kepada :</td></tr>
<tr><td>Yth : Kepala <?php echo $pengadaan->nama_opd; ?></td></tr>
<tr><td>Di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADANGSIDIMPUAN</td></tr>
</table>
<br>
<table>
<tr><p><td>Nomor</td>	<td>:</td> <td><?php echo $pengadaan->no_suratpermohonanpenyedia; ?></td></p></tr>
<tr><p><td>Sifat</td>	<td>:</td> <td>Biasa</td></p></tr>
<tr><p><td>Lampiran</td>	<td>:</td> <td></td></p></tr>
<tr><p><td>Perihal</td>	<td>:</td> <td> Permohonan ke Penyedia </td></p></tr>
</table>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan.......................................*pada <?php echo $pengadaan->nama_opd; ?> Kota Padangsidimpuan Tahun Anggaran <?php echo $tahunsurat;?> </p></td></tr>     </table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Berkenaan dengan hal tersebut di atas bersama ini kami sampaikan kepada Saudara agar kiranya dapat menyediakan................. dengan rincian sebagai berikut  </p></td></tr>     </table>
   
<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th> 
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
                        
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                    
                </tbody>
            </table>
                    
</body>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian disampaikan kepada Saudara, atas bantuan dan kerja sama yang baik diucapkan terimakasih. </p></td></tr>     </table>

<footer>
<br>
<br><br><br><br><br><br><br><br>
<table align="right">
<tr><td>Pengguna Anggaran </td></tr>
<tr><td><?php echo $pengadaan->nama_opd; ?>  </td></tr>
<tr><td>Kota Padangsidimpuan  </td></tr>
<tr height="75"></tr>
<tr><td>  <?php echo $pengadaan->nama_kepala; ?> </td></tr>
<tr><td>PANGKAT.......  </td></tr>
<tr><td> NIP. <?php echo $pengadaan->nip_kepala; ?></td></tr>
</table>
</footer>

</html>