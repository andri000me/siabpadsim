

<?php 
$this->load->view('include/header'); 
$this->load->view('pengurusbarangpengguna/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pengurusbarangpengguna/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Tabel Konfirmasi Penyaluran Barang</li>
      </ol>

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel Konfirmasi Penyaluran Barang </div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Tanggal Pesan</th>
                        <th>No Berita Acara Penyaluran Barang</th>
                        <th>Tanggal Terima</th>
                        <th>Status Order</th>
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
                        <td><?php echo $item->tanggal_pesan;?></td>
                        <td><?php echo $item->no_beritaacarapb;?></td>                        
                        <td><?php echo $item->tanggalterimabarang;?></td>
                        <td><?php echo $item->statusorder;?></td>
                        <td> <a href="<?php echo base_url()?>konfirmasipenyaluranditerima/updatebarangditerima/<?php echo $item->id_penyaluran; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-warning" role="button">Sudah Diterima</a></td>
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

