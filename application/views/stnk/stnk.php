

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kibb/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('operator/kibb')?>">KIB B</a>
        </li>
  
        <li class="breadcrumb-item active">Cari Data STNK</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Cari Data STNK</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('stnk/action_caridatastnk')?>" method="post" enctype="multipart/form-data">
            

              <div class="form-group">
              <div class="form-row">
                  
                  <div class="col-md-6">
                    <label for="berlaku_sampai">Berlaku Sampai</label>
                    <input class="form-control" id="berlaku_sampai" type="date" aria-describedby="nameHelp" name="berlaku_sampai" />
                  </div>
                  
                </div>
                  
              </div>


            


            <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Cari Data" name="btnSimpan" >
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
