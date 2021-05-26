

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kibb/menu'); 
?>

</head>

<section id_kibb="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('caridatakibb')?>">Cari Data KIB B</a>
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
                  <th>Nama OPD</th>
                  <th>No</th>
                  <th>Jenis Barang / Nama Barang</th>
                  <th>Roda 2 (Dua)</th>
                  <th>Roda 3 (Tiga)</th>
                  <th>Roda 4 (Empat)</th>
                  <th>Roda 6 (Enam)</th>
                  <th>Merk</th>
                  <th>Type</th>
                  <th>Bahan</th>
                  <th>Tahun Pembelian</th>
                  <th>Nomor Pabrik</th>
                  <th>Nomor Rangka</th>
                  <th>Nomor Mesin</th>
                  <th>Nomor Polisi</th>
                  <th>Nomor BPKB</th>
                  <th>Sumber Perolehan</th>
                  <th>HARGA  (Rp)</th>
                  <th>Pejabat Pengguna</th>
                  <th>Ket</th>
                  <th>Nomor STNK</th>
                  <th>STNK Berlaku Sampai</th>
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
                  <td><?= $data->roda_dua ?></td>
                  <td><?= $data->roda_tiga ?></td>
                  <td><?= $data->roda_empat  ?></td>
                  <td><?= $data->roda_enam ?></td>
                  <td><?= $data->merk ?></td>
                  <td><?= $data->type ?></td>
                  <td><?= $data->bahan ?></td>
                  <td><?= $data->tahun_pembelian ?></td>
                  <td><?= $data->nomor_pabrik ?></td>
                  <td><?= $data->nomor_rangka ?></td>
                  <td><?= $data->nomor_mesin ?></td>
                  <td><?= $data->nomor_polisi ?></td>
                  <td><?= $data->nomor_bpkb ?></td>
                  <td><?= $data->sumber_perolehan ?></td>
                  <td><?= $data->harga ?></td>
                  <td><?= $data->pejabat_pengguna ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td><?= $data->no_stnk ?></td>
                  <td><?= $data->berlaku_sampai ?></td>
                  
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
