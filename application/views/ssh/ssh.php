<?php 
$level=$this->session->userdata('level');
$this->load->view('include/header'); 
if ($level=="Admin"){
  $this->load->view('admin/menu');
}else if ($level=="PPTK"){
  $this->load->view('pptk/barangpersediaan/menu');
}
?>

</head>

<section id_ssh="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Tabel SSH</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('ssh/menambahdatassh')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel SSH</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Kelompok SSH</th>
                  <th>Jenis Barang</th>
                  <th>Nama Barang</th>                  
                  <th>Ukuran</th>
                  <th>Spesifikasi</th>
                  <th>Satuan</th>
                  <th>Harga Satuan</th>
                  <th>Tahun </th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->Kelompok_ssh ?></td>
                  <td><?= $data->Jenisbarang_ssh ?></td>
                  <td><?= $data->Namabarang_ssh ?></td>
                  <td><?= $data->Ukuran_ssh ?></td>
                  <td><?= $data->Spesifikasi_ssh ?></td>
                  <td><?= $data->Satuan_ssh ?></td>
                  <td><?= 'Rp'.number_format($data->Hargasatuan_ssh,0,'.','.')?></td>
                  <td><?= $data->Tahun_ssh ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>ssh/updatedatassh/<?php echo $data->id_ssh; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Edit<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>ssh/action_deletedatassh/<?php echo $data->id_ssh; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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
