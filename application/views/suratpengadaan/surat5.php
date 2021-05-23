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
h1{
    text-transform: uppercase;
}
</style>

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
<p class="jarak-lh" align="center"><b>BERITA ACARA SERAH TERIMA BARANG</b></p>
<p class="jarak-lh" align="center"><b>Nomor : 000001 </b></p>
<br>
 <p>Pada hari ini Senin tanggal Satu bulan Januari tahun 2021, bertempat di Badan keuangan daerah Kota Padangsidimpuan, berdasarkan Keputusan Kepala Badan Keuangan daerah Kota Padangsidimpuan Nomor : ...../......../20….tanggal ……20….., yang bertandatangan dibawah ini :  </p>

 <table>
<tr><p><td>Nama</td>	<td>:</td> <td>Nama Pimpinan</td></p></tr>
<tr><p><td>Nip</td>	<td>:</td> <td>-</td></p></tr>
<tr><p><td>Pekerjaan</td>	<td>:</td> <td>-</td></p></tr>
<tr><p><td>Alamat</td>	<td>:</td> <td>Alamat rekanan</td></p></tr>
</table>
<p class="jarak-lh">Selaku Penyedia Barang / Jasa </p>
<table>
<tr><p><td>Nama</td>	<td>:</td> <td><b>Nama PPK</b></td></p></tr>
<tr><p><td>Jabatan</td>	<td>:</td> <td> ................ </td></p></tr>
</table>
<p class="jarak-lh">Selaku Pejabat Pembuat Komitmen (PPK)  </p>
<p> Dengan ini menyatakan dengan sebenarnya telah melaksanakan pemeriksaan terhadap penyerahan barang/jasa pengadaan belanja yang dipesan dari nama rekanan dengan jumlah/jenis sebagai berikut : </p>

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
                        $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td><?= $item->total_barang_in;?></td>
                        <td><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td><?= 'Rp'.number_format($item->total_barang_in*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
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
<tr><td>Nama Rekanan</td></tr>
<tr height="75px"></tr><td><u>Nama pimpinan</u></td></tr>
<tr><td>Direktur</td></tr></table>
    
    <table  align="right">
<tr><td>PEJABAT PEMBUAT KOMITMEN </td></tr>
<tr height="75px"></tr><td><u>Nama</u></td></tr>
<tr><td>NIP. </td></tr></table>

    </tr>
    <br>
<br><br><br><br><br><br>
<table align="center">
<tr><td>Mengetahui</td></tr>
<tr><td>Pengguna Anggaran</td></tr>
<tr height="75px"></tr><td>Nama Kepala</td></tr>
<tr><td>NIP.</td></tr>
</table>
</footer>

</html>