<html>
<head>
<style>
@media print 
{
   @page 

   {
    size: 12.99in 8.27in ;
  }
}
.jarak-lh{
  line-height:10px;
}
p {
    font-size: 12pt;
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
<h1 class="jarak-lh" align="center">DAFTAR PENERIMAAN BARANG PERSEDIAAN</h1>
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
                        <th rowspan="2">Dari</th> 
                        <th colspan="2 ">Dokumen Faktur</th>   
                        <th colspan="2 ">SPP/SPM</th>                         
                        <th rowspan="2">Nama Barang</th>
                        <th rowspan="2">Unit</th> 
                        <th rowspan="2">Satuan</th> 
                        <th rowspan="2">Harga Satuan</th>
                        <th rowspan="2">Jumlah Harga (Rp)</th>
                        <th colspan="2 ">Bukti Penerimaan/B.A Penerimaan</th>
                        <th rowspan="2">Ket</th> 
                    </tr>
                    <tr>
                        <th>Nomor</th>                        
                        <th>Tanggal</th>
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
                        <th>14</th>                        
                        <th>15</th>
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    $totalbarang = 0;
                    $total = 0;
                    foreach ($hasil as $item)
                    {
                        $totalbarang += $item->total_barang_in;
                        $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td align="center"><?= $item->tanggal_pesan;?></td>
                        <td><?= $item->nama_rekanan;?></td>
                        <td align="center"><?= $item->no_faktur;?></td>
                        <td align="center"><?= $item->tanggal_faktur;?></td>
                        <td align="center"><?= $item->no_suratperintahpengiriman;?></td>
                        <td align="center"><?= $item->tanggal_suratperintahpengiriman;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>                        
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td><?= $item->Satuan_ssh;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang_in*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="center"><?= $item->no_bappk;?></td>
                        <td align="center"><?= $item->tanggal_bappk;?></td>
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="8">JUMLAH</td> 
                        <td align="center"><?= $totalbarang?></td>
                        <td></td>
                        <td></td>
                        <td align="right"><?= 'Rp'.number_format($total,0,'.','.')?></td>
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
    <td>19690501 199303 1 004</td>
    <td>19730930 199203 2 001</td>
    <td>19851003 200801 2 001</td>
</tr>

</table>
</footer>

</html>









   
