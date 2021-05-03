

<?php 
$this->load->view('include/header'); 
$this->load->view('admin/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Update OPD</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Data OPD</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('opd/simpan_update')?>" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="id_opd">ID OPD</label>
                    <input value="<?php echo $ambil->id_opd; ?>" class="form-control" id="id_opd" type="text" aria-describedby="nameHelp" name="id_opd" required/>
                  </div>
                           
                  <div class="col-md-6">
                    <label for="kode_opd">Kode OPD</label>
                    <input value="<?php echo $ambil->kode_opd; ?>" class="form-control" id="kode_opd" type="text" aria-describedby="nameHelp" name="kode_opd" required/>
                  </div>
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_opd">Nama OPD</label>
                    <input value="<?php echo $ambil->nama_opd; ?>" class="form-control" id="nama_opd" type="text" aria-describedby="nameHelp" name="nama_opd" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nip_kepala">Nip Kepala</label>
                    <input value="<?php echo $ambil->nip_kepala; ?>" class="form-control" id="nip_kepala" type="text" aria-describedby="nameHelp" name="nip_kepala" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_kepala">Nama Kepala</label>
                    <input value="<?php echo $ambil->nama_kepala; ?>" class="form-control" id="nama_kepala" type="text" aria-describedby="nameHelp" name="nama_kepala" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nip_ppk">Nip Ppk</label>
                    <input value="<?php echo $ambil->nip_ppk; ?>" class="form-control" id="nip_ppk" type="text" aria-describedby="nameHelp" name="nip_ppk" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_ppk">Nama Ppk</label>
                    <input value="<?php echo $ambil->nama_ppk; ?>" class="form-control" id="nama_ppk" type="text" aria-describedby="nameHelp" name="nama_ppk" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nip_bendahara">Nip Bendahara</label>
                    <input value="<?php echo $ambil->nip_bendahara; ?>" class="form-control" id="nip_bendahara" type="text" aria-describedby="nameHelp" name="nip_bendahara" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_bendahara">Nama Bendahara</label>
                    <input value="<?php echo $ambil->nama_bendahara; ?>" class="form-control" id="nama_bendahara" type="text" aria-describedby="nameHelp" name="nama_bendahara" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_opd">Nama OPD</label>
                    <input value="<?php echo $ambil->nama_opd; ?>" class="form-control" id="nama_opd" type="text" aria-describedby="nameHelp" name="nama_opd" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nip_pbp">Nip Pbp</label>
                    <input value="<?php echo $ambil->nip_pbp; ?>" class="form-control" id="nip_pbp" type="text" aria-describedby="nameHelp" name="nip_pbp" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_pbp">Nama Pbp</label>
                    <input value="<?php echo $ambil->nama_pbp; ?>" class="form-control" id="nama_pbp" type="text" aria-describedby="nameHelp" name="nama_pbp" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nip_ppb">Nip Ppb</label>
                    <input value="<?php echo $ambil->nip_ppb; ?>" class="form-control" id="nip_ppb" type="text" aria-describedby="nameHelp" name="nip_ppb" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                                       
                  <div class="col-md-6">
                    <label for="nama_ppb">Nama Ppb</label>
                    <input value="<?php echo $ambil->nama_ppb; ?>" class="form-control" id="nama_ppb" type="text" aria-describedby="nameHelp" name="nama_ppb" required/>
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
          </form>
        </div>
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>


