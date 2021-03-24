<html>
<head>
<style>
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
$tanggal = $pengadaan->tanggal_bapenyedia;
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

$tanggalhuruf = date("d", strtotime($tanggal)); 
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
<p class="jarak-lh" align="center"><b>BERITA ACARA SERAH TERIMA BARANG</b></p>
<p class="jarak-lh" align="center"><b>Nomor : <?php echo $pengadaan->no_bapenyedia; ?> </b></p>
<br>
 <p>Pada hari ini <?php echo $hari;?> tanggal <?php echo $tanggalhuruf;?> bulan <?php echo $bulanhuruf;?> tahun <?php echo $tahun;?>, bertempat di <?php echo $pengadaan->nama_opd; ?> Kota Padangsidimpuan, berdasarkan Keputusan Kepala <?php echo $pengadaan->nama_opd; ?> Kota Padangsidimpuan Nomor : ...../......../20….tanggal ……20….., yang bertandatangan dibawah ini :  </p>

 <table>
<tr><p><td>Nama</td>	<td>:</td> <td><?php echo $pengadaan->nama_pimpinan; ?></td></p></tr>
<tr><p><td>Nip</td>	<td>:</td> <td>-</td></p></tr>
<tr><p><td>Pekerjaan</td>	<td>:</td> <td>-</td></p></tr>
<tr><p><td>Alamat</td>	<td>:</td> <td><?php echo $pengadaan->alamat_rekanan; ?></td></p></tr>
</table>
<p class="jarak-lh">Selaku Penyedia Barang / Jasa </p>
<table>
<tr><p><td>Nama</td>	<td>:</td> <td><b><?php echo $pengadaan->nama_ppk; ?></b></td></p></tr>
<tr><p><td>Jabatan</td>	<td>:</td> <td> ................ </td></p></tr>
</table>
<p class="jarak-lh">Selaku Pejabat Pembuat Komitmen (PPK)  </p>
<p> Dengan ini menyatakan dengan sebenarnya telah melaksanakan pemeriksaan terhadap penyerahan barang/jasa pengadaan <?php echo $pengadaan->belanja; ?> yang dipesan dari <?php echo $pengadaan->nama_rekanan; ?> dengan jumlah/jenis sebagai berikut : </p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Satuan Ukuran</th> 
                        <th>Kuantitas</th> 
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
                        <td><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td><?= $item->total_barang;?></td>
                        <td><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td><?= 'Rp'.number_format($item->total_barang*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                x
            </table>
            <table>
<tr><p>Hasil pemeriksaan dinyatakan : </p></tr>  
<p><b>&nbsp &nbsp “Baik / Cukup / Baru” </b> </p>  
<p> Demikian Berita Acara Serah Terima Barang/Jasa ini dibuat untuk dapat dipergunakan sebagaimana mestinya.  </p>                      
</table> 
</body>


<footer>
<br><br>
<table  align="left">
<tr><td>Penyedia Barang/Jasa </td></tr>
<tr><td><?php echo $pengadaan->nama_rekanan; ?></td></tr>
<tr height="75px"></tr><td><u><?php echo $pengadaan->nama_pimpinan; ?></u></td></tr>
<tr><td>Direktur</td></tr></table>
    
    <table  align="right">
<tr><td>PEJABAT PEMBUAT KOMITMEN </td></tr>
<tr height="75px"></tr><td><u><?php echo $pengadaan->nama_ppk; ?></u></td></tr>
<tr><td>NIP. <?php echo $pengadaan->nip_ppk; ?></td></tr></table>

    </tr>
    <br>
<br><br><br><br><br><br>
<table align="center">
<tr><td>Mengetahui</td></tr>
<tr><td>Pengguna Anggaran</td></tr>
<tr height="75px"></tr><td><?php echo $pengadaan->nama_kepala; ?></td></tr>
<tr><td>NIP. <?php echo $pengadaan->nip_kepala; ?></td></tr>
</table>
</footer>

</html>