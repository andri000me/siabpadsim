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
h1{
    text-transform: uppercase;
}
table{
    font-size: 12pt;
    border-collapse: collapse;
}
.hurufkapital{
    text-transform: uppercase;
}
</style>
<table align="center">
<h1 class="jarak-lh" align="center">DAFTAR PENGELUARAN BARANG PERSEDIAAN</h1>
<table>
</head>

<body>
<?php foreach ($hasil as $item){}?>

<table>
<tr><p><td>SKPD</td>	<td>:</td> <td>Badan Keuangan Daerah</td></p></tr>
<tr><p><td>T.A</td>	    <td>:</td> <td>2021</td></p></tr>
</table>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Tanggal</th>
                        <th colspan="2 ">SURAT PERINTAH PENYALURAN</th>                     
                        <th rowspan="2">Nama Barang</th>
                        <th rowspan="2">Unit</th> 
                        <th rowspan="2">Satuan</th> 
                        <th rowspan="2">Harga Satuan</th>
                        <th rowspan="2">Jumlah Harga (Rp)</th>
                        <th rowspan="2">Kepada</th>
                        <th colspan="2 ">Bukti Penerimaan/B.A Penerimaan</th>
                        <th rowspan="2">Ket</th> 
                    </tr>
                    <tr>
                        <th>Nomor</th>                        
                        <th>Tanggal</th>
                        <th>Nomor</th>                        
                        <th>Tanggal</th>    
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th> 
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th> 
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>                        
                        <th>12</th>
                        <th>13</th>
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    $totalbarang = 0;
                    $total = 0;
                    foreach ($hasil as $item)
                    {
                        $totalbarang += $item->total_barang_out;
                        $total += $item->total_barang_out*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->tanggal_pesan;?></td>
                        <td align="center"><?= $item->no_sppb;?></td>
                        <td align="center"><?= $item->tanggal_sppb;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_out;?></td>
                        <td><?= $item->Satuan_ssh;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang_out*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td><?= $item->untuk;?></td>        
                        <td align="center"><?= $item->no_bapenyaluranbarang;?></td>
                        <td align="center"><?= $item->tanggal_bapenyaluranbarang;?></td>
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="5">JUMLAH</td> 
                        <td align="center"><?= $totalbarang?></td>
                        <td></td>
                        <td></td>
                        <td align="right"><?= 'Rp'.number_format($total,0,'.','.')?></td>
                        <td></td>                        
                        <td></td>
                        <td></td>
                        <td></td>
                </tr>
    
            </table>

</body>

<footer>
<br><br><br>
<table align="center" style="width:100%">
<tr>
    <td></td>
    <td></td>
    <td>Padang Sidempuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>
<tr>
    <td>ATASAN LANGSUNG</td>
    <td>PEJABAT PENATAUSAHAAN BARANG</td>
    <td>PENGURUS BARANG PENGGUNA</td>
</tr>
<tr height="75px"></tr>
<tr>
    <td>Sulaiman Lubis, S.E</td>
    <td>Rosti Megawati Harahap</td>
    <td>Siti Armida Siregar, S.H</td>
</tr>

<tr>
    <td>19690501 199303 1 004 </td>
    <td>19730930 199203 2 001</td>
    <td>19851003 200801 2 001</td>
</tr>

</table>
</footer>

</html>









   
