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
<h3 class="jarak-lh" align="center">DAFTAR KENDARAAN DINAS DI LINGKUNGAN PEMERINTAH KOTA PADANGSIDIMPUAN</h1>
<h3 class="jarak-lh" align="center">TAHUN ANGGARAN <?= $tahun_pembelian;?></h1>
<table>
</head>

<body>
<br>

<?php foreach ($hasil as $item){}?>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama OPD</th>
                        <th colspan="4">JENIS KENDARAAN</th>        
                        <th rowspan="2">Total</th>        
                    </tr>
                    <tr>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th> 
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th> 
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    $total_roda_dua = 0;
                    $total_roda_tiga = 0;
                    $total_roda_empat = 0;
                    $total_roda_enam = 0;
                    $total_global_roda_dua = 0;
                    $total_global_roda_tiga = 0;
                    $total_global_roda_empat = 0;
                    $total_global_roda_enam = 0;
                    $total_global = 0;
                    foreach ($hasil as $item)
                    {
                        $total_roda_dua =+ $item->roda_dua;
                        $total_roda_tiga =+ $item->roda_tiga;
                        $total_roda_empat =+ $item->roda_empat;
                        $total_roda_enam =+ $item->roda_enam;
                        
                        
                        

                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->nama_opd;?></td>
                        <td align="center"><?= $item->roda_dua;?></td>
                        <td align="center"><?= $item->roda_tiga;?></td>
                        <td align="center"><?= $item->roda_empat;?></td>
                        <td align="center"><?= $item->roda_enam;?></td>
                        <td align="center"><?= $item->roda_dua+$item->roda_tiga+$item->roda_empat+$item->roda_enam;?></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="2">JUMLAH</td> 
                        <td align="center"><?= $total_global_roda_dua;?></td>
                        <td align="center"><?= $total_global_roda_tiga;?></td>
                        <td align="center"><?= $total_global_roda_empat;?></td>
                        <td align="center"><?= $total_global_roda_enam  ?></td>
                        <td align="center"><?= $total_global  ?></td>  
                </tr>
    
            </table>

</body>



</html>









   
