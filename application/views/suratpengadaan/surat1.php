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
<p class="jarak-lh" align="center"><u><b>SURAT PERMOHONAN PERMINTAAN BARANG </u></b></p>
<p class="jarak-lh" align="center">Nomor : 00000001</p>
<br>
 <p>Pada hari ini Senin tanggal Satu bulan Januari tahun 2021 yang bertandatangan di bawah ini : </p>

 <table>
<tr><td>1.</td> <td>Nama</td>	<td>: Nama</td></tr>
<tr><td></td><p><td>Jabatan</td>	<td>: PPTK</td></tr>
        </table>
<p>Selaku Pejabat Pelaksana Teknis Kegiatan (PPTK) </p>
<table>
<tr><td>2. </td> <td>Nama</td>	<td>: NAMA</td></tr>
<tr><td></td><td>Jabatan</td>	<td>: Pengguna Anggaran </td></tr>
        </table>
        <p>Selaku Pejabat Pengguna Anggaran (PA)  </p>
        <p>Sehubungan dengan Pelaksanaan Kegiatan untuk Penyediaan Belanja PENGADAAN BELANJA agar memesan PENGADAAN MEMESAN dengan rincian sebagai berikut : </p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
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
                        <td><?= $item->Satuan_ssh;?></td>
                        <td><?= $item->Spesifikasi_ssh;?></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>   
                </tbody>
            </table>
            <table>
<tr><p><td>Demikian Berita acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya. </p></td></tr>     </table>
                       
</body>

<footer>
<br>
<br><br><br><br><br><br><br><br>
<table align="right">
<tr><td>Padangsidimpuan, 01 Januari 2021</td></tr>
<tr><td>Pejabat Pelaksanaan Teknis Kegiatan </td></tr>
<tr height="75px"></tr><td>(NAMA)</td></tr>
<tr><td>NIP. NIP</td></tr>
</footer>

</html>