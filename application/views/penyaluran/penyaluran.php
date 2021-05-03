

<?php 
$this->load->view('include/header'); 
$this->load->view('pptk/barangpersediaan/menu'); 
?>

</head>

<section id_rekanan="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pptk/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Penyaluran Barang</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('penyaluran/menambahdatapenyaluran')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Penyaluran Barang</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Diajukan Oleh</th>
                  <th>Keterangan</th>
                  <th>Status Order</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->tanggal_pesan ?></td>
                  <td><?= $data->username ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td><?= $data->statusorder ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>detailpenyaluran/index/<?php echo $data->id_penyaluran; ?>" class="btn btn-warning" style="margin-bottom: 1px;">List Order<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>penyaluran/action_deletedatapenyaluran/<?php echo $data->id_penyaluran; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
                  </td> 
                </tr>
                    <?php
                      $i++;
                    endforeach;
                  ?>
              </tbody>
            </table>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  
<?php $this->load->view('include/footer'); ?>

