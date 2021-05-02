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
  
        <li class="breadcrumb-item active">Manajemen OPD</li>
      </ol>
 <a href="<?php echo base_url('opd/tambah')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
     
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel OPD</div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>                       
                        <th>Kode OPD </th> 
                        <th>Nama OPD</th>  
                        <th>Nip Kepala</th>    
                        <th>Nama Kepala</th> 
                        <th>Nip Ppk</th>  
                        <th>Nama Ppk</th> 
                        <th>Nip Bendahara</th> 
                        <th>Nama Bendahara</th>  
                        <th>Nip Pbp</th>
                        <th>Nama Pbp</th>
                        <th>Nip Ppb</th>
                        <th>Nama Ppb</th>
                        <th colspan='2' align="center"><p align="center">Aksi</p></th>
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
                        <td><?php echo $item->kode_opd;?></td>
                        <td><?php echo $item->nama_opd;?></td>
                        <td><?php echo $item->nip_kepala;?></td>
                        <td><?php echo $item->nama_kepala;?></td>  
                        <td><?php echo $item->nip_ppk;?></td>
                        <td><?php echo $item->nama_ppk;?></td>
                        <td><?php echo $item->nip_bendahara;?></td>
                        <td><?php echo $item->nama_bendahara;?></td>  
                        <td><?php echo $item->nip_pbp;?></td>
                        <td><?php echo $item->nama_pbp;?></td>  
                        <td><?php echo $item->nip_ppb;?></td>
                        <td><?php echo $item->nama_ppb;?></td>      
                        <td> <a href="<?php echo base_url()?>opd/update/<?php echo $item->id_opd; ?>" class="btn btn-warning" role="button">Update</a></td>
                        <td> <a href="<?php echo base_url()?>opd/hapus/<?php echo $item->id_opd; ?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-danger" role="button">Delete</a></td>
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
