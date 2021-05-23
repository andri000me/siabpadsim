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
<h1 class="jarak-lh" align="center"><?php echo $penyaluran->nama_opd; ?></h1>
<p class="jarak-lh" align="center"><?php echo $penyaluran->alamat_kop_opd; ?></p>
<p class="jarak-lh" align="center"><?php echo $penyaluran->kecamatan_opd; ?></p>
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
<p class="jarak-lh" align="center"><u><b>SURAT PERINTAH PENGELUARAN/PENYALURAN BARANG </u></b></p>
<p class="jarak-lh" align="center">Nomor : <?php echo $penyaluran->no_sppb; ?></p>
<table>
<tr><p><td>Dari</td>	<td>: Pengguna Barang/Kuasa Pengguna Barang</td>
<tr><p><td>Kepada</td>	<td>: Pengurus Barang Pengguna</td>
                        
        </table>

<p>Harap dikeluarkan dari Gudang dan disalurkan barang tersebut dalam daftar dibawah ini untuk <?php echo $penyaluran->untuk; ?><p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Banyaknya</th> 
                        <th>Harga Satuan</th> 
                        <th>Jumlah (Rp.)</th> 
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
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_out;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang_out*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="left"><?= $item->Spesifikasi_ssh;?></td>
                    
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                    
                </tbody>
            </table>
                       
</body>

<footer>
<br>
<br><br><br><br><br><br><br><br>
<table align="right">
<tr><td align="left"></td></tr>
<tr><td align="left">PENGGUNA BARANG</td></tr>
<tr height="75px"></tr><td align="left">(<?php echo $penyaluran->nama; ?>)</td></tr>
<tr><td align="left">NIP. <?php echo $penyaluran->nip_pptk; ?></td></tr>
</footer>

</html>









   
