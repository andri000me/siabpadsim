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
$this->load->view('sekretaris/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('sekretaris/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Daftar Tabel Kwitansi</li>
      </ol>

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel Kwitansi</li>
      </ol> </div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th> 
                        <th>Tanggal Pesan</th>
                        <th>Rekanan</th>
                        <th>Keterangan</th> 
                        <th>No Kwitansi</th> 
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach ($hasil as $item)
                    {
    
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                        <td><?php echo $item->tanggal_pesan;?></td>
                        <td><?php echo $item->nama_rekanan;?></td>
                        <td><?php echo $item->keterangan;?></td>
                        <td><?php echo $item->no_kwitansi;?></td>
                        <td> <a href="<?php echo base_url()?>kwitansi/update/<?php echo $item->id_faktur; ?>" class="btn btn-warning" role="button">Edit</a></td>
                        <td> <a href="<?php echo base_url()?>kwitansi/print/<?php echo $item->id_faktur; ?>" class="btn btn-warning" role="button">Print</a></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
            </table>
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
