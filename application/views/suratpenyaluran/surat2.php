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
$tanggal = $penyaluran->tanggal_bapenyaluranbarang;
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
<h1 class="jarak-lh" align="center">BADAN KEUANGAN DAERAH</h1>
<p class="jarak-lh" align="center">Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling Telp (0634)27075 Fax. (0634) 27075</p>
<p class="jarak-lh" align="center">Kec. Padangsidimpuan Tenggara</p>
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
<table  align="right">
<tr><td>No <?php echo $penyaluran->no_bapenyaluranbarang; ?></td></tr>
</table>
<table align="left">
<tr><td><?php echo $penyaluran->nama_opd; ?></td></tr>
</table>
<br>
<br>
<table align="center">
<tr><td>BUKTI PENYALURAN BARANG</td></tr>
</table>
<br><br><br>
<tr>

<table border="1" align="center" style="width:100%">
                    <tr>
                        <th>Tanggal Penyerahan Barang Menurut Permintaan</th>
                        <th>Nama Barang</th>
                        <th>Unit</th>
                        <th>Harga Satuan</th> 
                        <th>Jumlah (Rp.)</th>
                        <th>Kepada</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($detailpenyaluran as $item)
                    {
                        $total += $item->total_barang_out*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?php echo $penyaluran->tanggal_bapenyaluranbarang; ?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_out;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang_out*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="left"><?= $item->nama;?></td>
                        <td align="left"><?= $item->Spesifikasi_ssh;?></td>
                    
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
            </table>
<tr height="30"><br></tr>
            <table  align="right">
<tr><td>Dibuat di Padang Sidempuan, <?php echo $tanggalsurat; ?> <?php echo $bulannama;?> <?php echo $tahunsurat;?></td></tr>
</table>
<br><br>
<table  align="left">
<tr><td>Yang Menerima</td></tr>
<tr height="75px"></tr><td>(<?php echo $penyaluran->nama; ?>)</td></tr>
<tr><td>NIP. <?php echo $penyaluran->nip_pptk; ?></td></tr></table>
    
    <table  align="right">
<tr><td>Yang Menyerahkan</td></tr>
<tr><td>Pengurus Barang</td></tr>
<tr height="75px"></tr><td>(NAMA)</td></tr>
<tr><td>NIP. </td></tr></table>

    </tr>
    <br>
<br><br><br><br><br><br><br><br>
<table align="center"
>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspMengetahui</td></tr>
<tr><td>PEJABAT PENATAUSAHAAN BARANG</td></tr>
<tr height="75px"></tr><td align="center">&nbsp &nbsp (NAMA)</td></tr>
<tr><td align="center">&nbsp &nbspNIP. </td></tr>
</table>

    
           
</body>

</html>









   
