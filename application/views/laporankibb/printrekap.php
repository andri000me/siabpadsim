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
<h3 class="jarak-lh" align="center">TAHUN ANGGARAN "TAHUN"</h1>
<table>
</head>

<body>
<br>

<?php foreach ($hasil as $item){}?>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama OPD</th>
                        <th colspan="4">SALDO AWAL PER 1 JANUARI "TAHUN"</th>        
                        <th rowspan="2">Total</th>   
                        <th colspan="4">MUTASI BERTAMBAH "TAHUN"</th>        
                        <th rowspan="2">Total</th>   
                        <th colspan="4">MUTASI BERKURANG "TAHUN"</th>        
                        <th rowspan="2">Total</th>   
                        <th colspan="4">SALDO AKHIR PER 31 DESEMBER "TAHUN"</th>        
                        <th rowspan="2">Total</th>        
                    </tr>
                    <tr>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>   
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>
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
                        <th>8</th> 
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>                        
                        <th>12</th>
                        <th>13</th>
                        <th>14</th> 
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>                        
                        <th>18</th>
                        <th>19</th>
                        <th>20</th> 
                        <th>21</th>
                        <th>22</th>
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    foreach ($hasil as $item)
                    {

                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="2">JUMLAH</td> 
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                        
                        <td></td>
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



</html>









   
