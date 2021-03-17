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
  
        <li class="breadcrumb-item active">Tambah Data SSH</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data SSH</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('ssh/action_menambahdatassh')?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
              <div class="form-row">
              
                           
                  <div class="col-md-6">
                    <label for="Kelompok_ssh">Kelompok Barang</label>
                    <select class="form-control" name="Kelompok_ssh">
                <option value="Umum">Umum</option>
                <option value="Industri">Industri</option>                
                <option value="Kesehatan">Kesehatan</option>                
                <option value="Pertanian">Pertanian</option>  
                <option value="Pekerjaan Umum">Pekerjaan Umum</option>  
                <option value="Lain Lain">Lain Lain</option>         
            </select>
                  </div>
                  <div class="col-md-6">
                    <label for="Namabarang_ssh">Nama Barang</label>
                    <input class="form-control" id="Namabarang_ssh" type="text" aria-describedby="nameHelp" name="Namabarang_ssh" required/>
                  </div>
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
              
                           
                  
                  <div class="col-md-6">
                    <label for="Jenisbarang_ssh">Jenis Barang</label>
                    <input class="form-control" id="Jenisbarang_ssh" type="text" aria-describedby="nameHelp" name="Jenisbarang_ssh"/>
                  </div>
                  <div class="col-md-6">
                    <label for="Ukuran_ssh">Ukuran</label>
                    <input class="form-control" id="Ukuran_ssh" type="text" aria-describedby="nameHelp" name="Ukuran_ssh"/>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
              <div class="form-row">
              
                           
                  
                  <div class="col-md-6">
                    <label for="Spesifikasi_ssh">Spesifikasi Barang</label>
                    <input class="form-control" id="Spesifikasi_ssh" type="text" aria-describedby="nameHelp" name="Spesifikasi_ssh"/>
                  </div>
                  <div class="col-md-6">
                    <label for="Satuan_ssh">Satuan</label>
                    <input class="form-control" id="Satuan_ssh" type="text" aria-describedby="nameHelp" name="Satuan_ssh"/>
                  </div>
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                                     
                  

                  <div class="col-md-6">
                    <label for="Hargasatuan_ssh">Harga Satuan</label>
                    <input class="form-control" id="Hargasatuan_ssh" type="text" aria-describedby="nameHelp" name="Hargasatuan_ssh" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="Tahun_ssh	">Tahun SSH</label>
                    <select class="form-control" name="Tahun_ssh">               
                <option value="2021">2021</option>
                <option value="2022">2022</option>                
                <option value="2023">2023</option>                
                <option value="2024">2024</option>                
                <option value="2025">2025</option>      
            </select></div>


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
