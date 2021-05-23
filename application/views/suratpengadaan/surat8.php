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
<table align="center" style="width:100%">
<tr>
<td>
<td>
<td>
<h1 class="jarak-lh" align="center">KOP PERUSAHAAN</h1>
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
<table  align="right">
<tr><td>Padangsidimpuan</td></tr>
<tr><td>Kepada </td></tr>
<tr><td>Yth : Kepala BKD</td></tr>
<tr><td>Di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADANGSIDIMPUAN</td></tr>
</table>
<tr>

<table border="1" align="center" style="width:100%">
                    <tr>
                        <th>Banyaknya</th>
                        <th>Nama Barang</th>
                        <th>Harga Satuan</th> 
                        <th>Jumlah</th>
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
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang_in*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                    
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
                <tr>
                        <td align="center" colspan="3">Total</td> 
                        <td align="right"><?= 'Rp'.number_format($total,0,'.','.')?></td>
                </tr>
            </table>

            <table  align="right">
<tr><td>Nama rekanan</td></tr>
<tr height="75px"></tr>
<tr>
<br> <br>
    <td>Nama Pimpinan</td>
    
</table>
           
</body>

</html>









   
