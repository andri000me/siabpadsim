
<?php 
$this->load->view('include/header'); 
$this->load->view('admin/menu'); 
?>

</head>

<section id_opd="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Tabel OPD</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('opd/tambah')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel OPD</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Kode OPD</th>
                  <th>Nama OPD</th>
                  <th>Alamat</th>                  
                  <th>Kecamatan</th>
                  <th>Alamat Kop Surat</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->id_opd ?></td>
                  <td><?= $data->nama_opd ?></td>
                  <td><?= $data->alamat_opd ?></td>
                  <td><?= $data->kecamatan_opd ?></td>
                  <td><?= $data->alamat_kop_opd ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>opd/updatedataopd/<?php echo $data->id_opd; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Edit<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>opd/action_deletedataopd/<?php echo $data->id_opd; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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
