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
<table align="center" style="width:100%">
<tr>
<td>
<img src="<?php echo base_url('theme/logopadsim.jpg')?>" width="100px">
<td>
<td>
<h3 class="jarak-lh" align="center">PEMERINTAH KOTA PADANGSIDIMPUAN</h3>
<h1 class="jarak-lh" align="center"><?php echo $ambil->nama_opd; ?></h1>
<p class="jarak-lh" align="center"><?php echo $ambil->alamat_kop_opd; ?></p>
<p class="jarak-lh" align="center"><?php echo $ambil->kecamatan_opd; ?></p>
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
<p class="jarak-lh" align="center"><u><b>BERITA ACARA PENERIMAAN HASIL PEKERJAAN</u></b></p>
<p class="jarak-lh" align="center">Nomor : <?php echo $ambil->no_suratpesanan; ?></p>

<p>Pada hari ini senin TGL, kami yang bertandatangan dibawah ini masing-masing :</p>
<table>
<tr><p><td>Nama</td>	<td>:</td> <td></td></p></tr>
<tr><p><td>Jabatan</td>	<td>: Penyimpan / Pengurus Barang Milik Daerah</td>
<tr><p><td></td>	<td>: Pada Badan/Dinas/Kantor ..... Tahun Anggaran....</td>
                        
        </table>

<p>Sesuai dengan surat pesanan nomor<?php echo $ambil->spk_paketpekerjaan; ?>, Telah menerima barang yang diserahkan oleh rekanan......... dengan rincian sebagai berikut : </p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Jumlah Barang</th>
                        <th>Nama Barang</th> 
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

            <p >Demikian Berita acara ini diperbuat untuk dapat dibuat semestinya. </p>

            <footer>

<table>
<tr>
    <td>Yang Menyerahkan Barang</td>
    <td>Yang Menerima</td>
</tr>
<tr>
    <td>Nama Pengusaha</td>
    <td>Nama</td>
    
</tr>
</table>
</body>

</html>









   
