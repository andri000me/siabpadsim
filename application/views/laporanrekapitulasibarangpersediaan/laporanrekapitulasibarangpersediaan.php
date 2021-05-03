

<?php 
$this->load->view('include/header'); 
$this->load->view('penggunaanggaran/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('penggunaanggaran/barangpersediaan')?>">Halaman Utama</a>
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
                        <th>Tahun</th> 
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
                        <td><?php echo $item->tahun_pesan;?></td>
                        <td> <a href="<?php echo base_url()?>laporanrekapitulasibarangpersediaan/lihat/<?php echo $item->tahun_pesan; ?>" class="btn btn-warning" role="button">Lihat</a></td>
                        <td> <a href="<?php echo base_url()?>laporanrekapitulasibarangpersediaan/print/<?php echo $item->tahun_pesan; ?>" class="btn btn-warning" role="button">Print</a></td>
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


  <script src="<?php echo base_url('theme/mamba/assets/js/main.js')?>"></script>
