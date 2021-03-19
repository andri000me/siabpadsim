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
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('operator/barangpersediaan')?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Data Surat Pengadaan</li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Data Surat Pengadaan</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('suratpengadaan/simpan_update')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pengadaan"  value="<?php echo $ambil->id_pengadaan; ?>" />
       
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpptk">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpptk; ?>"class="form-control" id="tanggal_suratpermohonanpptk" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpptk" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpptk">SURAT PERMOHONAN dari PPTK kepada PA</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpptk; ?>"class="form-control" id="no_suratpermohonanpptk" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpptk" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpenyedia">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpenyedia; ?>"class="form-control" id="tanggal_suratpermohonanpenyedia" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpenyedia" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpenyedia">Surat permohonan dari SKPD yang bersangkutan kepada Penyedia</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpenyedia; ?>"class="form-control" id="no_suratpermohonanpenyedia" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpenyedia" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratbalasan">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratbalasan; ?>"class="form-control" id="tanggal_suratbalasan" type="date" aria-describedby="nameHelp" name="tanggal_suratbalasan" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratbalasan">Surat balasan dari Penyedia</label>
                    <input value="<?php echo $ambil->no_suratbalasan; ?>"class="form-control" id="no_suratbalasan" type="text" aria-describedby="nameHelp" name="no_suratbalasan" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratperintahpengiriman">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratperintahpengiriman; ?>"class="form-control" id="tanggal_suratperintahpengiriman" type="date" aria-describedby="nameHelp" name="tanggal_suratperintahpengiriman" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratperintahpengiriman">Surat Perintah Pengiriman (Surat Pesanan)</label>
                    <input value="<?php echo $ambil->no_suratperintahpengiriman; ?>"class="form-control" id="no_suratperintahpengiriman" type="text" aria-describedby="nameHelp" name="no_suratperintahpengiriman" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapenyedia">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapenyedia; ?>"class="form-control" id="tanggal_bapenyedia" type="date" aria-describedby="nameHelp" name="tanggal_bapenyedia" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapenyedia">Berita Acara Penerimaan Dan Pemeriksaan Dari Penyedia Ke Ppk</label>
                    <input value="<?php echo $ambil->no_bapenyedia; ?>"class="form-control" id="no_bapenyedia" type="text" aria-describedby="nameHelp" name="no_bapenyedia" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bappk">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bappk; ?>"class="form-control" id="tanggal_bappk" type="date" aria-describedby="nameHelp" name="tanggal_bappk" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bappk">Berita Acara Serah Terima Barang dari PPK ke PA/KPA</label>
                    <input value="<?php echo $ambil->no_bappk; ?>"class="form-control" id="no_bappk" type="text" aria-describedby="nameHelp" name="no_bappk" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_kwitansi">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_kwitansi; ?>"class="form-control" id="tanggal_kwitansi" type="date" aria-describedby="nameHelp" name="tanggal_kwitansi" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_kwitansi">Kwitansi</label>
                    <input value="<?php echo $ambil->no_kwitansi; ?>"class="form-control" id="no_kwitansi" type="text" aria-describedby="nameHelp" name="no_kwitansi" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_faktur">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_faktur; ?>"class="form-control" id="tanggal_faktur" type="date" aria-describedby="nameHelp" name="tanggal_faktur" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_faktur">Faktur</label>
                    <input value="<?php echo $ambil->no_faktur; ?>"class="form-control" id="no_faktur" type="text" aria-describedby="nameHelp" name="no_faktur" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpembayaran">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpembayaran; ?>"class="form-control" id="tanggal_suratpermohonanpembayaran" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpembayaran" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpembayaran">Surat Permohonan Pembayaran</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpembayaran; ?>"class="form-control" id="no_suratpermohonanpembayaran" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpembayaran" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapembayaran">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapembayaran; ?>"class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_bapembayaran" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapembayaran">Berita Acara Pembayaran</label>
                    <input value="<?php echo $ambil->no_bapembayaran; ?>"class="form-control" id="no_bapembayaran" type="text" aria-describedby="nameHelp" name="no_bapembayaran" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="suratpengadaan/update/<?php echo $ambil->id_pengadaan; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
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
