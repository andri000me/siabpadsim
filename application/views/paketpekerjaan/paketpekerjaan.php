

<?php 
$this->load->view('include/header'); 
$this->load->view('sekretaris/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('sekretaris/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Manajemen Paket Pekerjaan</li>
      </ol>
 <a href="<?php echo base_url('paketpekerjaan/tambah')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
     
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel Paket Pekerjaan</div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Paket Pekerjaan</th>
                        <th>Keterangan</th> 
                        <th colspan='2'>Aksi</th>
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
                        <td><?php echo $item->paketpekerjaan;?></td>
                        <td><?php echo $item->spk_paketpekerjaan;?></td>
                        <td> <a href="<?php echo base_url()?>paketpekerjaan/update/<?php echo $item->id_paketpekerjaan; ?>" class="btn btn-warning" role="button">Edit</a></td>
                        <td> <a href="<?php echo base_url()?>paketpekerjaan/hapus/<?php echo $item->id_paketpekerjaan; ?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-danger" role="button">Delete</a></td>
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


