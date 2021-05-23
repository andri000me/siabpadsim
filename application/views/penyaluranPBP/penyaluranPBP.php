

<?php 
$this->load->view('include/header'); 
$this->load->view('pengurusbarangpengguna/barangpersediaan/menu'); 
?>

</head>

<section id_rekanan="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pengurusbarangpengguna/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Data Penyaluran Barang</li>
      </ol>

      <div class="container">
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Penyaluran Barang</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal Pesan</th>
                  <th>Diajukan Oleh</th>
                  <th>Keterangan</th>
                  <th>Status Penyaluran</th>           
                  <th>Tanggal Terima</th>                               
                  <th>Detail Order</th>
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
                  <td><?= $data->nama ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td><?= $data->statuspenyaluran ?></td>
                  <td><?= $data->tanggalpenyaluran ?></td>
                  <td> 
                    <a href="penyaluranPBP/lihatlistpenyaluran/<?php echo $data->id_mutasi; ?>" class="btn btn-success" style="margin-bottom: 1px;">Lihat<i class="fa fa-tag"></i></a>
                      </td> 
                  <td> 
                    <a href="penyaluranPBP/updateketerangan/<?php echo $data->id_mutasi; ?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-warning" style="margin-bottom: 1px;">Konfirmasi Setuju<i class="fa fa-tag"></i></a>
                    <a href="penyaluranPBP/updatestatusorder/<?php echo $data->id_mutasi; ?>" onclick="return confirm('Apakah anda sudah memeriksa barang dan ingin konfirmasi selesai?');" class="btn btn-danger" style="margin-bottom: 1px;">Konfirmasi Selesai<i class="fa fa-tag"></i></a>
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
