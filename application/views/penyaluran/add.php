

<?php 
$this->load->view('include/header'); 
$this->load->view('pptk/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Data Penyaluran</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data Penyaluran</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('penyaluran/action_menambahdatapenyaluran')?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="tanggal_pesan">Tanggal Pesan</label>
                    <input class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_pesan" required/>
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

