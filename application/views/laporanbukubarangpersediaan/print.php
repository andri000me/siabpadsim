<html>
<head>
<style>
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
}
.hurufkapital{
    text-transform: uppercase;
}
</style>
<table align="center">
<h1 class="jarak-lh" align="center">BUKU BARANG PERSEDIAAN</h1>
<table>
</head>

<body>

<?php foreach ($hasil as $item){}?>

<table>
<tr><p><td>SKPD</td>	<td>:</td> <td><?= $item->nama_opd;?></td></p></tr>
<tr><p><td>T.A</td>	    <td>:</td> <td><?= $item->tahun_order;?></td></p></tr>
</table>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Tanggal</th>
                        <th rowspan="2">Nama Barang</th>
                        <th colspan="3">MASUK</th>        
                        <th colspan="3">KELUAR</th>        
                        <th colspan="3">SISA</th>      
                        <th rowspan="2">Keterangan</th> 
                    </tr>
                    <tr>
                        <th>Unit</th>                        
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>                        
                        <th>Unit</th>                        
                        <th>Harga Satuan</th>
                        <th>Jumlah</th> 
                        <th>Unit</th>                        
                        <th>Harga Satuan</th>
                        <th>Jumlah</th> 
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
                        $totalbarang += $item->total_barang;
                        $total += $item->total_barang*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->tanggal_input_masuk;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_masuk;?></td>
                        <td align="right"><?= $item->Hargasatuan_ssh;?></td>
                        <td align="right"><?= $item->Hargasatuan_ssh*$item->total_barang_masuk;?></td>                        
                        <td align="center"><?= $item->total_barang;?></td>
                        <td align="right"> <?= $item->Hargasatuan_ssh;?></td>
                        <td align="right"><?= $item->Hargasatuan_ssh*$item->total_barang;?></td>
                        <td align="center"><?= $item->total_barang_masuk-$item->total_barang;?></td>
                        <td align="right"><?= $item->Hargasatuan_ssh;?></td>
                        <td align="right"><?= $item->Hargasatuan_ssh*($item->total_barang_masuk-$item->total_barang);?></td>
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="5">JUMLAH</td> 
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
    <td>NAMA</td>
    <td>NAMA</td>
    <td>NAMA</td>
</tr>

<tr>
    <td>NIP. </td>
    <td>NIP. </td>
    <td>NIP. </td>
</tr>

</table>
</footer>

</html>









   