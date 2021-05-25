

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
  
        <li class="breadcrumb-item active">Tambah Data Data KIB A</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data Data KIB A</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('Data KIB A/action_menambahdatakiba')?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="form-row">
              
                           
                  
                  <div class="col-md-6">
                    <label for="nama_pimpinan">Nama Pimpinan</label>
                    <input class="form-control" id="nama_pimpinan" type="text" aria-describedby="nameHelp" name="nama_pimpinan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="namadatakiba">Nama Data KIB A</label>
                    <input class="form-control" id="namadatakiba" type="text" aria-describedby="nameHelp" name="namadatakiba" required/>
                  </div>          
                  

                  <div class="col-md-6">
                    <label for="alamatdatakiba">Alamat Data KIB A</label>
                    <input class="form-control" id="alamatdatakiba" type="text" aria-describedby="nameHelp" name="alamatdatakiba" required/>
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
