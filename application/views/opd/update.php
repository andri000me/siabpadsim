<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="<?php echo base_url('theme/mamba/assets/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('theme/mamba/assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('theme/mamba/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('theme/mamba/assets/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('theme/mamba/assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('theme/mamba/assets/vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('theme/mamba/assets/vendor/venobox/venobox.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('theme/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('theme/mamba/assets/vendor/aos/aos.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('theme/mamba/assets/css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: theme/mamba - v2.5.1
  * Template URL: https://bootstrapmade.com/theme/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

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

<!-- Vendor JS Files -->
<script src="<?php echo base_url('theme/mamba/assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/php-email-form/validate.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/jquery-sticky/jquery.sticky.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/venobox/venobox.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/waypoints/jquery.waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/counterup/counterup.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('theme/mamba/assets/vendor/aos/aos.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('theme/mamba/assets/js/main.js')?>"></script>
