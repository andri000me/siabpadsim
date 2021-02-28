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
<table>
</head>

<body>
<p align="center">SURAT PERINTAH PENGELUARAN/PENYALURAN BARANG</p>
<p align="center">NO. <?php echo $hasilpenyaluran->no_sppb; ?></p>
<table>
<tr><p><td>Dari</td>	<td>:</td> <td></td></p></tr>
<tr><p><td>Kepada</td>	<td>:</td> <td><?php echo $hasilpenyaluran->pemberi; ?></td></p></tr>
</table>

<p>Harap dikeluarkan dari Gudang dan disalurkan barang tersebut dalam daftar dibawah ini untuk <?php echo $hasilpenyaluran->penerima; ?></p>

<table border="1" align="center">              
                    <tr>
                        <th>No</th> 
                        <th>Nama Barang</th>
                        <th>Banyaknya</th> 
                        <th>Harga Satuan</th>
                        <th>Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
    $no=1;
    foreach ($hasilorder as $item)
    {
        ?>
    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $item->id_ssh;?></td>
                        <td><?php echo $item->total_barang;?></td>
                        <td><?php echo $item->id_ssh;?></td>
                        <td><?php echo $item->total_harga;?></td>
    </tr>
    <?php
            $no++;
    }
        ?>
                </tbody>
            </table>

	
</body>

<footer>
<table>
<tr>
<td>
</td>
<td align="center">
<p>Padang Sidempuan, <?php echo format_indo(date('Y-m-d'));?><p>

	
   <p> PENGGUNA BARANG </p>




<p>(......................................)</p>
<p>NIP.<p>
</td>
</tr>
</table>
</footer>

</html>









   
