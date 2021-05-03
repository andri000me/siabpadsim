

<?php 
$this->load->view('include/header'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Ganti Password</li>
      </ol>
<!-- Example DataTables Card-->
<?php foreach ($ambil->result() as $data) {
          # code...
        } ?>

<div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-plus"></i> Ganti Password </div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/gantipassword/simpan_updatepassword/<?= $data->id?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id"  value="<?= $data->id?>" />
        <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="passwordlama">Password Lama</label>
                    <input class="form-control" id="passwordlama" type="text" aria-describedby="nameHelp" name="passwordlama" required/>
                  </div>
                  <div class="col-md-6">
                    <input value="<?= $data->password?>" type="hidden" class="form-control" id="password" type="text" aria-describedby="nameHelp" name="password" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">

              
                  <div class="col-md-6">
                    <label for="passwordbaru1">Password Baru</label>
                    <input class="form-control" id="passwordbaru1" type="text" aria-describedby="nameHelp" name="passwordbaru1" required/>
                  </div>
              
                  <div class="col-md-6">
                    <label for="passwordbaru2">Konfirmasi Password Baru</label>
                    <input class="form-control" id="passwordbaru2" type="text" aria-describedby="nameHelp" name="passwordbaru2" required/>
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

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?>"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url('assets/js/sb-admin-datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/sb-admin-charts.min.js'); ?>"></script>