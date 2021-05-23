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
<p class="jarak-lh" align="center"><u>BERITA ACARA SERAH TERIMA BARANG</u></p>
<p class="jarak-lh" align="center">Nomor : 000000001 </p>
<br>
 <p> Pada hari ini Senin tanggal Satu bulan Januari tahun 2021, kami yang bertandatangan di bawah ini :   </p>

 <table>
<tr><p><td>&nbsp &nbsp &nbspNama</td>	<td>:</td> <td>Nama PPK</td></p></tr>
<tr><p><td>&nbsp &nbsp &nbspJabatan</td>	<td>:</td> <td> Pejabat Pembuat Komitmen </td></p></tr>
</table>
<p class="jarak-lh"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Selaku Pejabat Pembuat Komitmen (PPK)  </p>
<table>
<tr><p><td>&nbsp &nbsp &nbspNama</td>	<td>:</td> <td>Nama Kepala</td></p></tr>
<tr><p><td>&nbsp &nbsp &nbspJabatan</td>	<td>:</td><td> Pengguna Anggaran</td></p></tr>
</table>
<p class="jarak-lh"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Selaku Pengguna Anggaran (PA)  </p>
<p>Sesuai dengan Surat Perintah Pengiriman (SPP) / Surat Perintah Kerja (SPK) / Surat Perjanjian (SP) Nomor : 0001 Tanggal 01 Januari 2021 telah menerima barang yang diserahkan oleh rekanan Nama Rekanan dalam keadaan baik dan cukup sebagaimana tersebut dibawah ini :  </p>

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
                        $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
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
<tr><td>Padangsidimpuan, 01 Januari 2021 </td></tr>
</table>
</body>

<footer>
<br><br>
<table  align="left">
<tr><td>Yang Menyerahkan </td></tr>
<tr><td>Pejabat Pembuat Komitmen </td></tr>
<tr height="75px"></tr><td><u>Nama PPK</u></td></tr>
<tr><td>Direktur</td></tr></table>
    
    <table  align="right">
<tr><td>Diterima </td></tr>
<tr><td> Pengguna Anggaran </td></tr>
<tr height="75px"></tr><td>Nama Kepala</td></tr>
<tr><td>NIP.</td></tr></table>
</footer>

</html>