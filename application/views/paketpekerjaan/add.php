

<?php 
$this->load->view('include/header'); 
$this->load->view('sekretaris/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Paket Pekerjaan</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data Paket Pekerjaan</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('paketpekerjaan/simpan_paketpekerjaan')?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="paketpekerjaan">Paket Pekerjaan</label>
                    <input class="form-control" id="paketpekerjaan" type="text" aria-describedby="nameHelp" name="paketpekerjaan" required/>
                  </div>
                           
                  <div class="col-md-6">
                    <label for="spk_paketpekerjaan">Keterangan SPK</label>
                    <input class="form-control" id="spk_paketpekerjaan" type="text" aria-describedby="nameHelp" name="spk_paketpekerjaan" required/>
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

