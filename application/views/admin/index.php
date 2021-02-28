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

   <!-- Page level plugin CSS-->
  <link href="<?php echo config_item('datatables'); ?>dataTables.bootstrap4.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: theme/mamba - v2.5.1
  * Template URL: https://bootstrapmade.com/theme/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php 
$this->load->view('include/header'); 
$this->load->view('admin/menu'); 
$this->load->view('admin/home'); 
$this->load->view('include/footer'); 
?>

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

  <!-- Bootstrap core JavaScript-->

    <script src="<?php echo config_item('jquery'); ?>"></script>

    <script src="<?php echo config_item('bootstrapjs'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo config_item('jquery_easing'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo config_item('chart_js'); ?>Chart.min.js"></script>
    <script src="<?php echo config_item('datatables'); ?>jquery.dataTables.js"></script>
    <script src="<?php echo config_item('datatables'); ?>dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo config_item('js'); ?>sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo config_item('js'); ?>sb-admin-datatables.min.js"></script>
    <script src="<?php echo config_item('js'); ?>sb-admin-charts.min.js"></script>