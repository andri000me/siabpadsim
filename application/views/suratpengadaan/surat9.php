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
<?php
                    $noa = 1 ;
                    $totala = 0;
                    foreach ($detailpengadaan as $itema)
                    {
                        $totala += $itema->total_barang*$itema->Hargasatuan_ssh;
?>
<?php
                            $noa++;
                    }
?>
<?php

function penyebut($nilai) {
$nilai = abs($nilai);
$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
$temp = "";
if ($nilai < 12) {
    $temp = " ". $huruf[$nilai];
} else if ($nilai <20) {
    $temp = penyebut($nilai-10). "  belas";
} else if ($nilai <100) {
    $temp = penyebut($nilai/10). "  puluh". penyebut($nilai % 10);
} else if ($nilai <200) {
    $temp = " seratus" . penyebut($nilai - 100);
} else if ($nilai <1000) {
    $temp = penyebut($nilai/100). "  ratus". penyebut($nilai % 100);
} else if ($nilai <2000) {
    $temp = " seribu" . penyebut($nilai - 1000);
} else if ($nilai <1000000) {
    $temp = penyebut($nilai/1000). "  ribu". penyebut($nilai % 1000);
} else if ($nilai <1000000000) {
    $temp = penyebut($nilai/1000000). "  juta". penyebut($nilai % 1000000);
} else if ($nilai <1000000000000) {
    $temp = penyebut($nilai/1000000000). "  miliar". penyebut(fmod($nilai % 1000000000));
} else if ($nilai <1000000000000000) {
    $temp = penyebut($nilai/1000000000000). "  triliun". penyebut(fmod($nilai % 1000000000000));
}
return $temp;
}

function terbilang($nilai) {
    if ($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    } return $hasil;
}
$angka = 1530093;
//echo terbilang($angka);
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
<tr><td>Kepada :</td></tr>
<tr><td>Yth : Kepala <?php echo $pengadaan->nama_opd; ?></td></tr>
<tr><td>Di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Padangsidimpuan</td></tr>
</table>
<br>
<table>
<tr><p><td>Hal</td>	<td>:</td> <td> Permohonan Pembayaran </td></p></tr>
</table>
<br> <br>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menindak lanjuti surat kami terdahulu pada Nomor…....../...……/......... tanggal..../bulan..../tahun....,  perihal..........* pada <?php echo $pengadaan->nama_opd; ?> untuk ...................................dapat disampaikan kepada Bapak/Ibu bahwa dana yang ditagihkan kepada Bapak/Ibu adalah sebesar <?= 'Rp'.number_format($totala,0,'.','.'); ?>   (<?php echo terbilang($totala); ?>) dimana harga tersebut sudah termasuk pajak dengan rincian sebagai berikut:  </p></td></tr>     </table>
 
<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Banyaknya</th>
                        <th>Nama Barang</th> 
                        <th>@Rp.</th> 
                        <th>Jumlah</th> 
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
                        <td align="center"><?= $item->total_barang;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="4">JUMLAH TOTAL</td> 
                        <td align="right"><?= 'Rp'.number_format($total,0,'.','.'); ?></td>
                </tr>
            </table>
            <p>Adapun Jumlah Pajak adalah </p>

<table>
<tr><p><td>1. PPN</td><td>&nbsp &nbsp &nbsp &nbsp Rp. ……………. </td></p></tr>
<tr><p><td>2. PPh Pasal 22</td> <td>&nbsp &nbsp &nbsp &nbsp Rp. ……………. </td></p></tr>
<tr><p><td>3. PPh Pasal 23</td>	<td>&nbsp &nbsp &nbsp &nbsp Rp. ……………. </td> </p></tr>
<tr><p><td>4. Pasal 4 ayat 2 </td>  <td>&nbsp &nbsp &nbsp &nbsp Rp. ……………. </td> </p></tr>
<tr><p><td>5. Pajak Daerah</td> <td>&nbsp &nbsp &nbsp &nbsp <u> Rp. ……………. </u></td></p></tr>
<tr><p><td>&nbsp &nbsp Jumlah Pajak yang harus dibayarkan</td> <td>&nbsp &nbsp &nbsp &nbsp Rp. ……………. </td></p></tr>

</table>
                    
</body>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian kami sampaikan jumlah dana .........................................agar dapat dibayarkan dan atas kerja sama yang baik diucapkan terima kasih.  </p></td></tr>     </table>

<footer>
<br>
<br><br><br><br><br><br>

<table  align="right">
<tr><td><?php echo $pengadaan->nama_rekanan; ?></td></tr>
<tr height="75px"></tr>
<tr>
<br> <br>
    <td><?php echo $pengadaan->nama_pimpinan; ?></td>
    
</table>
</footer>

</html>