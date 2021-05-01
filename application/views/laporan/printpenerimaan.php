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
<h1 class="jarak-lh" align="center">DAFTAR PENERIMAAN BARANG PERSEDIAAN</h1>
<table>
</head>

<body>


<table>
<tr><p><td>SKPD</td>	<td>:</td> <td><?= $hasilatas['nama_opd'] ?></td></p></tr>
<tr><p><td>T.A</td>	    <td>:</td> <td><?php echo date('Y') ?></td></p></tr>
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
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($hasil as $item)
                    {
                        $total += $item->total_barang*$item->Hargasatuan_ssh;
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
                        <td align="center"><?= $item->total_barang;?></td>
                        <td><?= $item->Satuan_ssh;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="center"><?= $item->no_bapenyedia;?></td>
                        <td align="center"><?= $item->tanggal_bapenyedia;?></td>
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="11">JUMLAH</td> 
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
    <td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>
<tr>
    <td>ATASAN LANGSUNG</td>
    <td>PEJABAT PENATAUSAHAAN BARANG</td>
    <td>PENGURUS BARANG PENGGUNA</td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><?= $hasilatas['nama_kepala'] ?></td>
    <td><?= $hasilatas['nama_ppb'] ?></td>
    <td><?= $hasilatas['nama_pbp'] ?></td>
</tr>

<tr>
    <td>NIP. <?= $hasilatas['nip_kepala'] ?></td>
    <td>NIP. <?= $hasilatas['nip_ppb'] ?></td>
    <td>NIP. <?= $hasilatas['nip_pbp'] ?></td>
</tr>

</table>
</footer>

</html>









   
