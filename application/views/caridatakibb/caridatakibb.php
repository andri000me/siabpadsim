

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
  
        <li class="breadcrumb-item active">Cari Data KIB B</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Cari Data KIB B</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('caridatakibb/action_menambahdatacaridatakibb')?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="id_opd">Nama OPD</label>
                    <select class="form-control form-control-sm" id="id_opd" name="id_opd"/>
                        <option value="">-</option>
                        <?php $id_opd = $this->db->query("SELECT * FROM tbl_opd order by id_opd");
                
                        foreach ($id_opd->result() as $id_opd) : ?>
                        <option value="<?= $id_opd->id_opd?>"><?= $id_opd->nama_opd?></option>
                         <?php endforeach; ?>
                       </select></div>
                
                  <div class="col-md-6">
                    <label for="nama_barang">Nama Barang</label>
                    <input class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" />
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="tahun_pembelian">Tahun Pembelian</label>
                    <input class="form-control" id="tahun_pembelian" type="text" aria-describedby="nameHelp" name="tahun_pembelian" />
                  </div>
                  
                  <div class="col-md-6">
                    <label for="pejabat_pengguna">Pejabat Pengguna</label>
                    <input class="form-control" id="pejabat_pengguna" type="text" aria-describedby="nameHelp" name="pejabat_pengguna" />
                  </div>
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nomor_pabrik">Nomor Pabrik</label>
                    <input class="form-control" id="nomor_pabrik" type="text" aria-describedby="nameHelp" name="nomor_pabrik" />
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_rangka">Nomor Rangka</label>
                    <input class="form-control" id="nomor_rangka" type="text" aria-describedby="nameHelp" name="nomor_rangka" />
                  </div>
                  
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  
                  <div class="col-md-6">
                    <label for="nomor_mesin">Nomor Mesin</label>
                    <input class="form-control" id="nomor_mesin" type="text" aria-describedby="nameHelp" name="nomor_mesin" />
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_polisi">Nomor Polisi</label>
                    <input class="form-control" id="nomor_polisi" type="text" aria-describedby="nameHelp" name="nomor_polisi" />
                  </div>
                </div>
                </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nomor_bpkb">Nomor BPKB</label>
                    <input class="form-control" id="nomor_bpkb" type="text" aria-describedby="nameHelp" name="nomor_bpkb" />
                  </div>
                  
                  <div class="col-md-6">
                    <label for="keterangan">Keterangan</label>
                    <input class="form-control" id="keterangan" type="text" aria-describedby="nameHelp" name="keterangan" />
                  </div>
                </div>
                  
              </div>


            


            <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Cari Data" name="btnSimpan" >
              </div>
            </div>
          </div>
          </form>
        </div>
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>
