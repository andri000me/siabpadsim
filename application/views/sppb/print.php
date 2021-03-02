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
</table>
</head>

<body>
<table>
<tr><p><td>Dari</td>	<td>: Pengguna Barang/Kuasa Pengguna Barang</td>
<tr><p><td>Kepada</td>	<td>: Pengurus Barang Pengguna</td>
                        
        </table>

<p>Harap dikeluarkan dari Gudang dan disalurkan barang tersebut dalam daftar dibawah ini untuk.......................</p>

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
                    foreach ($hasilorder as $item)
                    {
                    ?>
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
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp PENGGUNA BARANG</td></tr>
<tr height="75px"></tr><td>&nbsp &nbsp (.....................................................)</td></tr>
<tr><td>&nbsp &nbspNIP.</td></tr>
</footer>

</html>









   
