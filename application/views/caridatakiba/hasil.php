

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kiba/menu'); 
?>

</head>

<section id_kiba="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('caridatakiba')?>">Cari Data KIB A</a>
        </li>

        <li class="breadcrumb-item active"> Hasil Pencarian</li>
      </ol>

      <div class="container">
     
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Hasil Pencarian</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>NAMA OPD</th>
                  <th>NOMOR URUT</th>
                  <th>JENIS/NAMA BARANG</th>
                  <th>NOMOR KODE BARANG</th>
                  <th>NOMOR REGISTER</th>
                  <th>KETERANGAN TANAH</th>
                  <th>LUAS (M2)YANG DICATAT DI KIB</th>
                  <th>KOREKSI BERTAMBAH</th>
                  <th>KOREKSI BERKURANG</th>
                  <th>LUAS (M2) SESUAI SERTIFIKAT</th>
                  <th>TAHUN PENGADAAN</th>
                  <th>LETAK/ALAMAT</th>
                  <th>HAK STATUS TANAH</th>
                  <th>TANGGAL SERTIFIKAT</th>
                  <th>NOMOR SERTIFIKAT</th>
                  <th>PENGGUNAAN</th>
                  <th>ASAL USUL</th>
                  <th>HARGA  (Rp)</th>
                  <th>KETERANGAN PEROLEHAN</th>
                  <th>KETERANGAN</th>
                  <th>JUMLAH SERTIFIKAT</th>
                  <th>JUMLAH TANAH</th>
                  <th>KETERANGAN PENGUASAAN</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->nama_opd ?></td>
                  <td><?= $data->no_urut ?></td>
                  <td><?= $data->nama_barang ?></td>
                  <td><?= $data->no_kode_barang ?></td>
                  <td><?= $data->no_register ?></td>
                  <td><?= $data->keterangan_tanah ?></td>
                  <td><?= $data->luas_catat_kib ?></td>
                  <td><?= $data->koreksi_bertambah ?></td>
                  <td><?= $data->koreksi_berkurang ?></td>
                  <td><?= $data->luas_sertifikat ?></td>
                  <td><?= $data->tahun_pengadaan ?></td>
                  <td><?= $data->alamat ?></td>
                  <td><?= $data->hak_status_tanah ?></td>
                  <td><?= $data->tanggal_sertifikat ?></td>
                  <td><?= $data->nomor_sertifikat ?></td>
                  <td><?= $data->penggunaan ?></td>
                  <td><?= $data->asal_usul ?></td>
                  <td><?= $data->harga ?></td>
                  <td><?= $data->keterangan_perolehan ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td><?= $data->jumlah_sertifkat ?></td>
                  <td><?= $data->jumlah_tanah ?></td>
                  <td><?= $data->keterangan_penguasaan ?></td>
                  
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
