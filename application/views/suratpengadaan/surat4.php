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
<table>
</head>

<body>
<p class="jarak-lh" align="center"><u><b>SURAT PERINTAH PENGIRIMAN (SPP)</u></b></p>
<p class="jarak-lh" align="center">Nomor : 000000001</p>
<p class="jarak-lh" align="center">Paket Pekerjaan : </p>   
<p class="jarak-lh" align="center">Paket Pekerjaan </p>  


<p>Yang bertanda tangan di bawah ini :</p>

<table>
<tr><td><b>Sulaiman Lubis</b><td></tr>
<tr><td>KEPALA Badan Keuangan Daerah KOTA PADANG SIDIMPUAN<td></tr>
<tr><td>Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling<td></tr>
<tr><td>selanjutnya disebut sebagai <b>Pejabat Pembuat Komitmen;</b><td></tr>
</table>

<p>berdasarkan SPK (Paker pekerjaan), bersama ini memerintahkan:</p>

<table>
<tr><td><b>NAMA REKANAN</b><td></tr>
<tr><td>ALAMAT REKANAN<td></tr>
<tr><td>yang dalam hal ini diwakili oleh : <b>NAMA PIMPINAN, Pimpinan/Penanggung Jawab</b><td></tr>
<tr><td>selanjutnya disebut sebagai <b>Penyedia;</b><td></tr>
</table>

<p>untuk mengirimkan barang dengan memperhatikan ketentuan-ketentuan sebagai berikut : </p>

<p> 1. <u>Rincian Barang:</u>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>      
                        <th>Harga Satuan</th>                   
                        <th>Pajak</th> 
                        <th>Jumlah Harga Satuan(Rp)</th>
                        <th>Jumlah Harga (Rp)</th>
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
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right">... pajak</td>
                        <td align="right"><?= 'Rp'.number_format($item->total_barang_in*$item->Hargasatuan_ssh,0,'.','.'); ?></td>
                        <td align="right">....</td>
                    
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
                <tr>
                        <td align="center" colspan="6">JUMLAH TOTAL</td> 
                        <td align="right">Rp</td>
                </tr>
                <tr>
                        <td align="center" colspan="6">JUMLAH TOTAL DIBULATKAN</td> 
                        <td align="right">Rp</td>
                </tr>
    
            </table>

        <table>
        <tr><td>2.</td> <td><u>Tanggal barang diterima :</u> 7 (Tujuh) hari kalender setelah SP disampaikan;</td></tr>
        <tr><td>3.</td> <td><u>Syarat-syarat pekerjaan :</u> sesuai dengan persyaratan dan ketentuan SPK;</td></tr>
        <tr><td>4.</td> <td><u>Waktu penyelesaian :</u> "tanggal penerimaan"</td></tr>
        <tr><td>5.</td> <td><u>Alamat Pengiriman Barang :</u>  "nama opd" Kota Padangsidimpuan</td></tr>
        <tr><td></td> <td><u></u>  "alamat opd"</td></tr>
        <tr><td>6.</td> <td><u>Denda :</u>  Terhadap setiap hari keterlambatan penyelesaian pekerjaan Penyedia Jasa akan dikenakan Dengan Keterlambatan sebesar 1/1000 (satu permil) dari Nilai sisa SPK yang belum dilaksanakan (tidak termasuk PPN);</td></tr>
      
        
        </table>
</body>

<footer>

<table align="center" style="width:100%">
<tr>
    <td>Padang Sidempuan, 01 Januari 2021</td>
    <td>Menerima dan menyetujui</td>
</tr>
<tr>
    <td>Untuk dan atas nama</td>
    <td>Untuk dan atas nama</td>
</tr>
<tr>
    <td>Badan Keuangan Daerah Kota Padangsidimpuan</td>
    <td>Nama Rekanan</td>
</tr>
<tr>
    <td>PEJABAT PEMBUAT KOMITMEN</td>
    <td></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><b>NAMA KEPALA</b></td>
    <td><b>NAMA PIMPINAN</b></td>
</tr>

<tr>
    <td><b>Kepala Badan Keuangan Daerah Kota Padang Sidempuan</b></td>
    <td><b>PIMPINAN/PENANGGUNG JAWAB</b></td>
</tr>

<tr>
    <td><b>NIP. </b></td>
    <td></td>
</tr>

</table>
</footer>

</html>









   
