

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kibb/menu'); 
?>

</head>

<section id_kibb="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('operator/kibb')?>">KIB B</a>
        </li>

        <li class="breadcrumb-item active"> Data KIB B</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('datakibb/menambahdatadatakibb')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
  
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Data KIB B</div>
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
                  <th>Opsi</th>
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
                  <td> 
                    <a href="<?php echo base_url()?>datakibb/updatedatadatakibb/<?php echo $data->id_kibb; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Edit<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>datakibb/action_deletedatadatakibb/<?php echo $data->id_kibb; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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
