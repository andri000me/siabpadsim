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
<p> 1. Julham Efendi    : Ketua </p>

<p>Berdasarkan keputusan Badan Kepala Keuangan Daerah Kota Padangsidimpuan<?php echo $ambil->spk_paketpekerjaan; ?>, selaku panitia penerimaan hasil pekerjaan pada badan keuangan daerah kota padangsidimpuan Tahun anggaran 2020 telah memeriksa dengan teliti sebagaimana tersebut dibawah ini :</p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Uraian</th>
                        <th>Volume</th> 
                        <th>Satuan</th>
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

            <p>Barang - barang tersebut diserahkan oleh : </p>

        <table>
        <tr> <td>Nama            : </td></tr>
        <tr><td>Jabatan            : </td></tr>  
        </table>
        <p>Daftar Pesanan Nomor ............ : </p>
        <p>Selanjutnya diserahkan oleh rekanan kepada pengurus barang pengguna.</p>
</body>

</html>









   
