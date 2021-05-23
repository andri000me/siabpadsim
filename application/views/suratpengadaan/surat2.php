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
<br>
<body>
<table  align="right">
<tr><td>Padangsidimpuan, Satu Januari 2021</td></tr>
<tr><td>Kepada :</td></tr>
<tr><td>Yth : Kepala NAMA</td></tr>
<tr><td>Di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADANGSIDIMPUAN</td></tr>
</table>
<br>
<table>
<tr><p><td>Nomor</td>	<td>:</td> <td>00000001</td></p></tr>
<tr><p><td>Sifat</td>	<td>:</td> <td>Biasa</td></p></tr>
<tr><p><td>Lampiran</td>	<td>:</td> <td></td></p></tr>
<tr><p><td>Perihal</td>	<td>:</td> <td> Permohonan ke Penyedia </td></p></tr>
</table>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan.......................................*pada Badan Keuangan Daerah Kota Padangsidimpuan Tahun Anggaran 2021 </p></td></tr>     </table>
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
                        $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        
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
<tr><td>Badan Keuangan Daerah  </td></tr>
<tr><td>Kota Padangsidimpuan  </td></tr>
<tr height="75"></tr>
<tr><td> Nama Kepala</td></tr>
<tr><td>PANGKAT.......  </td></tr>
<tr><td> NIP. </td></tr>
</table>
</footer>

</html>