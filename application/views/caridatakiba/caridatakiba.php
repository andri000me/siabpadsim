

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kiba/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('datakiba')?>">Data KIB A</a>
        </li>
  
        <li class="breadcrumb-item active">Cari Data KIB A</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Cari Data KIB A</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('caridatakiba/action_menambahdatacaridatakiba')?>" method="post" enctype="multipart/form-data">
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
                    <label for="keterangan_tanah">Keterangan Tanah</label>
                    <select class="form-control form-control-sm" id="keterangan_tanah" name="keterangan_tanah"/>
                        <option value="">-</option>
                        <option value="TB">TB</option>
                        <option value="TI">TI</option>
                        <option value="TJ/G">TJ/G</option>
                       </select></div></div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nama_barang">Nama Barang</label>
                    <input class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" />
                  </div>
                  <div class="col-md-6">
                    <label for="no_kode_barang">Nomor Kode Barang</label>
                    <input class="form-control" id="no_kode_barang" type="text" aria-describedby="nameHelp" name="no_kode_barang" />
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="no_register">Nomor Register</label>
                    <input class="form-control" id="no_register" type="text" aria-describedby="nameHelp" name="no_register" />
                  </div>
                  <div class="col-md-6">
                    <label for="tahun_pengadaan">Tahun Pengadaan</label>
                    <input class="form-control" id="tahun_pengadaan" type="text" aria-describedby="nameHelp" name="tahun_pengadaan" />
                  </div>
                  
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="hak_status_tanah">Hak Status Tanah</label>
                    <input class="form-control" id="hak_status_tanah" type="text" aria-describedby="nameHelp" name="hak_status_tanah" />
                  </div>
                  
                  <div class="col-md-6">
                    <label for="asal_usul">Asal Usul</label>
                    <input class="form-control" id="asal_usul" type="text" aria-describedby="nameHelp" name="asal_usul" />
                  </div>
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nomor_sertifikat">Nomor Sertifikat</label>
                    <input class="form-control" id="nomor_sertifikat" type="text" aria-describedby="nameHelp" name="nomor_sertifikat" />
                  </div>
                  <div class="col-md-6">
                    <label for="penggunaan">Penggunaan</label>
                    <input class="form-control" id="penggunaan" type="text" aria-describedby="nameHelp" name="penggunaan" />
                  </div>
                  
                </div>
              </div>


              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="keterangan_perolehan">Keterangan Perolehan</label>
                    <input class="form-control" id="keterangan_perolehan" type="text" aria-describedby="nameHelp" name="keterangan_perolehan" />
                  </div>
                  <div class="col-md-6">
                    <label for="keterangan_penguasaan">Keterangan Penguasaan</label>
                    <input class="form-control" id="keterangan_penguasaan" type="text" aria-describedby="nameHelp" name="keterangan_penguasaan" />
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
