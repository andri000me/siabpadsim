

<?php 
$this->load->view('include/header'); 
$this->load->view('pptk/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pengadaan')?>">Pengadaan</a>
        </li>
  
        <li class="breadcrumb-item active">Detail Pengadaan Barang</li>
      </ol>
      <div class="container">
 <a href="<?php echo base_url()?>detailpengadaan/tambah/<?php echo $hasilparsing; ?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel Detail Pengadaan Barang</div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Barang</th> 
                        <th>Total Barang</th>
                        <th>Satuan</th> 
                        <th>Harga Satuan</th>                        
                        <th>Total Harga</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    $total=0;
                    foreach ($hasil as $item)
                    {
                      $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $item->Namabarang_ssh;?></td>
                        <td align="center"><?php echo $item->total_barang_in;?></td>   
                        <td><?php echo $item->Satuan_ssh;?></td>                    
                        <td align="right"><?= 'Rp'.number_format($item->Hargasatuan_ssh,0,'.','.');?></td>
                        <td align="right"><?= 'Rp'.number_format(($item->total_barang_in)*($item->Hargasatuan_ssh),0,'.','.');?></td>
                        <td align="center"> <a href="<?php echo base_url()?>detailpengadaan/update/<?php echo $item->id_detailmutasi;?>/<?php echo $hasilparsing?>" class="btn btn-warning" role="button">Update</a></td>
                        <td align="center"> <a href="<?php echo base_url()?>detailpengadaan/hapus/<?php echo $item->id_detailmutasi;?>/<?php echo $hasilparsing?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-danger" role="button">Delete</a></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="5">Total</td> 
                        <td align="right"><?= 'Rp'.number_format($total,0,'.','.')?></td>
                </tr>
            </table>
    </div>
</div>
</div>
</div>
</div>
</div>
    </section>

    <?php $this->load->view('include/footer'); ?>

