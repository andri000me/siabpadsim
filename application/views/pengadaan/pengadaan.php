

<?php 
$this->load->view('include/header'); 
$this->load->view('pptk/barangpersediaan/menu'); 
?>

</head>

<section id_rekanan="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pptk/barangpersediaan')?>">Barang Persediaan</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Pengadaan Barang</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('pengadaan/menambahdatapengadaan')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Pengadaan Barang</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal Pesan</th>
                  <th>Nama Rekanan</th>
                  <th>Belanja</th>
                  <th>Memesan</th>
                  <th>Keterangan</th>
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
                  <td><?= $data->nama_rekanan ?></td>
                  <td><?= $data->belanja ?></td>
                  <td><?= $data->memesan ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>detailpengadaan/index/<?php echo $data->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">List Order<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>pengadaan/action_deletedatapengadaan/<?php echo $data->id_pengadaan; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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

