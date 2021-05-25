

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kiba/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('datakiba')?>">Data Data KIB A</a>
        </li>
  
        <li class="breadcrumb-item active">Update Data Data KIB A</li>
      </ol>
<!-- Example DataTables Card-->
<?php foreach ($content->result() as $data) {
          # code...
        } ?>

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Data Data KIB A</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/datakiba/action_updatedatadatakiba/<?= $data->id_kiba?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_kiba"  value="<?= $data->id_kiba?>" />
        <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nama_pimpinan">Nama Pimpinan</label>
                    <input value="<?= $data->nama_pimpinan?>"class="form-control" id="nama_pimpinan" type="text" aria-describedby="nameHelp" name="nama_pimpinan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
              
              <div class="col-md-6">
                    <label for="nama_datakiba">Nama datakiba</label>
                    <input value="<?= $data->nama_datakiba?>"class="form-control" id="nama_datakiba" type="text" aria-describedby="nameHelp" name="nama_datakiba" required/>
                  </div>
                           
                  <div class="col-md-6">
                    <label for="alamat_datakiba">Alamat datakiba</label>
                    <input value="<?= $data->alamat_datakiba?>"class="form-control" id="alamat_datakiba" type="text" aria-describedby="nameHelp" name="alamat_datakiba" required/>
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
