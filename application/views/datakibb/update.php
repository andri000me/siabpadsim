

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kibb/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('datakibb')?>">Data KIB B</a>
        </li>
  
        <li class="breadcrumb-item active">Update Data KIB B</li>
      </ol>
<!-- Example DataTables Card-->
<?php foreach ($content->result() as $data) {
          # code...
        } ?>

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Data KIB B</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/datakibb/action_updatedatadatakibb/<?= $data->id_kibb?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_kibb"  value="<?= $data->id_kibb?>" />
        
        <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                  <label for="id_opd">Nama OPD</label>
                    <select class="form-control form-control-sm" id="id_opd" name="id_opd" required/>
                        
                        <option value="<?= $data->id_opd?>"> 
                        <?php 
                          $id_opd = $this->db->query("SELECT * FROM tbl_opd where id_opd=$data->id_opd");
                          foreach ($id_opd->result() as $id_opd) :
                          echo $id_opd->nama_opd; 
                          endforeach;
                        ?>
                        </option>
                        <?php $id_opd = $this->db->query("SELECT * FROM tbl_opd where id_opd != $data->id_opd order by id_opd");
                        foreach ($id_opd->result() as $id_opd) : ?>
                        <option value="<?= $id_opd->id_opd?>"><?= $id_opd->nama_opd?></option>
                         <?php endforeach; ?>
                       </select></div>
                  <div class="col-md-6">
                    <label for="no_urut">No Urut</label>
                    <input value="<?= $data->no_urut?>" class="form-control" id="no_urut" type="text" aria-describedby="nameHelp" name="no_urut" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nama_barang">Jenis Barang / Nama Barang</label>
                    <input value="<?= $data->nama_barang?>" class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="roda_dua">Roda 2 (Dua)</label>
                    <input value="<?= $data->roda_dua?>" class="form-control" id="roda_dua" type="text" aria-describedby="nameHelp" name="roda_dua" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="roda_tiga">Roda 3 (Tiga)</label>
                    <input value="<?= $data->roda_tiga?>" class="form-control" id="roda_tiga" type="text" aria-describedby="nameHelp" name="roda_tiga" required/>
                  </div>
                  
                  <div class="col-md-6">
                    <label for="roda_empat">Roda 4 (Empat)</label>
                    <input value="<?= $data->roda_empat?>" class="form-control" id="roda_empat" type="text" aria-describedby="nameHelp" name="roda_empat" required/>
                  </div>

                 
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="roda_enam">Roda 6 (Enam)</label>
                    <input value="<?= $data->roda_enam?>" class="form-control" id="roda_enam" type="text" aria-describedby="nameHelp" name="roda_enam" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="merk">Merk</label>
                    <input value="<?= $data->merk?>" class="form-control" id="merk" type="text" aria-describedby="nameHelp" name="merk" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="type">Type</label>
                    <input value="<?= $data->type?>" class="form-control" id="type" type="text" aria-describedby="nameHelp" name="type" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="bahan">Bahan</label>
                    <input value="<?= $data->bahan?>" class="form-control" id="bahan" type="text" aria-describedby="nameHelp" name="bahan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="tahun_pembelian">Tahun Pembelian</label>
                    <input value="<?= $data->tahun_pembelian?>" class="form-control" id="tahun_pembelian" type="text" aria-describedby="nameHelp" name="tahun_pembelian" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_pabrik">Nomor Pabrik</label>
                    <input value="<?= $data->nomor_pabrik?>" class="form-control" id="nomor_pabrik" type="text" aria-describedby="nameHelp" name="nomor_pabrik" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nomor_rangka">Nomor Rangka</label>
                    <input value="<?= $data->nomor_rangka?>" class="form-control" id="nomor_rangka" type="text" aria-describedby="nameHelp" name="nomor_rangka" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_mesin">Nomor Mesin</label>
                    <input value="<?= $data->nomor_mesin?>" class="form-control" id="nomor_mesin" type="text" aria-describedby="nameHelp" name="nomor_mesin" required/>
                  </div>

                 
                  
                </div>
              </div> 
              <div class="form-group">
              <div class="form-row">
               

                  <div class="col-md-6">
                    <label for="nomor_polisi">Nomor Polisi</label>
                    <input value="<?= $data->nomor_polisi?>" class="form-control" id="nomor_polisi" type="text" aria-describedby="nameHelp" name="nomor_polisi" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="nomor_bpkb">Nomor BPKB</label>
                    <input value="<?= $data->nomor_bpkb?>" class="form-control" id="nomor_bpkb" type="date" aria-describedby="nameHelp" name="nomor_bpkb" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="sumber_perolehan">Sumber Perolehan</label>
                    <input value="<?= $data->sumber_perolehan?>" class="form-control" id="sumber_perolehan" type="text" aria-describedby="nameHelp" name="sumber_perolehan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="harga">Harga  (Rp)</label>
                    <input value="<?= $data->harga?>" class="form-control" id="harga" type="text" aria-describedby="nameHelp" name="harga" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="pejabat_pengguna">Pejabat Pengguna</label>
                    <input value="<?= $data->pejabat_pengguna?>" class="form-control" id="pejabat_pengguna" type="text" aria-describedby="nameHelp" name="pejabat_pengguna" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="keterangan">Ket</label>
                    <input value="<?= $data->keterangan?>" class="form-control" id="keterangan" type="text" aria-describedby="nameHelp" name="keterangan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
              </div>
            </div>
          </div>
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>


