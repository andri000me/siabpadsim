

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>

<section id_rekanan="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('operator/barangpersediaan')?>">Barang Persediaan</a>
        </li>
  
        <li class="breadcrumb-item active">Data Surat Pengadaan Barang</li>
      </ol>

      <div class="container">
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Surat Pengadaan Barang</div>
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
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->tanggal_pesan ?></td>
                  <td><?= $data->nama_rekanan ?></td>
                  <td><?= $data->belanja ?></td>
                  <td><?= $data->memesan ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td> 
                    <a href="suratpengadaan/update/<?php echo $data->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Surat<i class="fa fa-tag"></i></a>
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
