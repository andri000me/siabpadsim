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
<p class="jarak-lh" align="center"><u><b>SURAT PESANAN</u></b></p>
<p class="jarak-lh" align="center">Nomor : <?php echo $ambil->no_suratpesanan; ?></p>
<p class="jarak-lh" align="center">Paket Pekerjaan : <?php echo $ambil->paketpekerjaan; ?> </p>

<p>Yang bertanda tangan di bawah ini :</p>

<table>
<tr><p><td>Nama</td>	<td>:</td> <td><b><?php echo $ambil->nama_kepala; ?><b></td></p></tr>
<tr><p><td>Jabatan</td>	<td>:</td> <td>Kepala <?php echo $ambil->nama_opd; ?> selaku Pejabat Pembuat Komitmen (PPK) <?php echo $ambil->nama_opd; ?> Kota Padang Sidimpuan</td></p></tr>
<tr><p><td>Alamat</td>	<td>:</td> <td><?php echo $ambil->alamat_opd; ?></td></p></tr>
</table>

<p>berdasarkan <?php echo $ambil->spk_paketpekerjaan; ?>, bersama ini memerintahkan:</p>

<table>
<tr><p><td>Nama Penyedia Barang</td>	            <td>:</td> <td><b><?php echo $ambil->nama_rekanan; ?></b></td></p></tr>
<tr><p><td>Alamat</td>	                            <td>:</td> <td><?php echo $ambil->alamat_rekanan; ?></td></p></tr>
<tr><p><td>yang dalam hal ini diwakili oleh</td>	<td>:</td> <td><?php echo $ambil->nama_pimpinan; ?></td></p></tr>
<tr><p><td></td>	                                <td></td>  <td><b>PIMPINAN/PENANGGUNG JAWAB</b> selanjutnya disebut</td></p></tr>
<tr><p><td></td>	                                <td></td>  <td>sebagai <b>Penyedia;</b></td></p></tr>
</table>

<p>untuk mengirimkan barang dengan memperhatikan ketentuan-ketentuan sebagai berikut : </p>

<p> 1. <u>Rincian Barang:</u>

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
                        <td><?php echo $item->Namabarang_ssh;?></td>
                        <td><?php echo $item->total_barang;?></td>
                        <td><?php echo $item->Hargasatuan_ssh;?></td>
                        <td><?php echo ($item->total_barang*$item->Hargasatuan_ssh);?></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="4">Total</td> 
                        <td>Rp</td>
                </tr>
    
            </table>

            <p><b><i>Terbilang : "isi". </b></i></p>

        <table>
        <tr><td>1.</td> <td><u>Tanggal barang diterima :</u> 7 (Tujuh) hari kalender setelah SP disampaikan;</td></tr>
        <tr><td>2.</td> <td><u>Syarat-syarat pekerjaan :</u> sesuai dengan persyaratan dan ketentuan SPK;</td></tr>
        <tr><td>3.</td> <td><u>Alamat Pengiriman Barang :</u> <?php echo $ambil->nama_opd; ?> Kota Padangsidimpuan, <?php echo $ambil->alamat_opd; ?></td></tr>
        <tr><td>4.</td> <td><u>Denda</u><td>
        <tr><td></td>     <td>Terhadap setiap hari keterlambatan penyelesaian pekerjaan Penyedia Jasa akan dikenakan Dengan Keterlambatan sebesar 1/1000 (satu permil) dari Nilai sisa SPK yang belum dilaksanakan (tidak termasuk PPN);</td></tr>
        
        </table>
</body>

<footer>

<table>
    <th><b>Padang Sidempuan, <?php echo format_indo(date('Y-m-d'));?><b></th>
<tr>
<td></td>
<td>Menerima dan menyetujui:</td>
</tr>
<tr>
    <td>Untuk dan atas nama</td>
    <td>Untuk dan atas nama</td>
</tr>
<b>
<tr>
    <td><?php echo $ambil->nama_opd; ?></td>
    <td><?php echo $ambil->nama_rekanan; ?></td>
</tr>
<tr>
    <td>Kota Padangsidimpuan</td>
    <td></td>
</tr>
<tr>
    <td>Pejabat Pembuat Komitmen</td>
    <td></td>
</tr>
<br><br><br>
<tr>
    <td><u><?php echo $ambil->nama_kepala; ?></u></td>
    <td><?php echo $ambil->nama_pimpinan; ?></td>
</tr>
<tr>
    <td>NIP: <?php echo $ambil->nip_kepala; ?></td>
    <td></td>
</tr>
</b>

</table>
</footer>

</html>









   
