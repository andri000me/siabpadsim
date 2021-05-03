

<?php 
$this->load->view('include/header'); 
$this->load->view('kepala/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('kepala/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Rekapitulasi Barang Persediaan</li>
      </ol>

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Rekapitulasi Barang Persediaan</li>
      </ol> </div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th> 
                    <th>Tanggal</th> 
                    <th>Dari</th> 
                    <th>Nomor Faktur</th> 
                    <th>Tanggal Faktur</th> 
                    <th>No SPP</th> 
                    <th>Tanggal SPP</th> 
                    <th>Nama Barang</th> 
                    <th>Unit</th> 
                    <th>Satuan</th> 
                    <th>Harga Satuan</th> 
                    <th>Jumlah Harga</th> 
                    <th>No Bukti rekapitulasi</th> 
                    <th>Tanggal Bukti rekapitulasi</th> 
                    <th>Keterangan</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach ($hasil as $item)
                    {
    
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                        <td><?php echo $item->tanggal_pesan;?></td>
                        <td><?php echo $item->nama_rekanan;?></td>
                        <td><?php echo $item->no_faktur;?></td>                        
                        <td><?php echo $item->tanggal_faktur;?></td>
                        <td><?php echo $item->no_suratperintahpengiriman;?></td>
                        <td><?php echo $item->tanggal_suratperintahpengiriman;?></td>
                        <td><?php echo $item->Namabarang_ssh;?></td>
                        <td><?php echo $item->total_barang;?></td>
                        <td><?php echo $item->Satuan_ssh;?></td>
                        <td><?php echo $item->Hargasatuan_ssh;?></td>
                        <td><?php echo $item->Hargasatuan_ssh*$item->total_barang;?></td>
                        <td><?php echo $item->no_beritaacarapb;?></td>
                        <td><?php echo $item->tanggal_beritaacarapb;?></td>
                        <td></td>
                     </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>
</div>
</div>
</div>
</div>
    </section>

<?php $this->load->view('include/footer'); ?>

