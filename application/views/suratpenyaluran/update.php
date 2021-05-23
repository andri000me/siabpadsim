

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('suratpenyaluran')?>">Surat Penyaluran</a>
        </li>
  
        <li class="breadcrumb-item active">Data Surat Penyaluran</li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Data Surat Penyaluran</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('suratpenyaluran/simpan_update')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_mutasi"  value="<?php echo $ambil->id_mutasi; ?>" />
       
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_sppb">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_sppb; ?>"class="form-control" id="tanggal_sppb" type="date" aria-describedby="nameHelp" name="tanggal_sppb" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_sppb">Surat Perintah Penyaluran Barang</label>
                    <input value="<?php echo $ambil->no_sppb; ?>"class="form-control" id="no_sppb" type="text" aria-describedby="nameHelp" name="no_sppb" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpenyaluran/surat1/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapenyaluranbarang">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapenyaluranbarang; ?>"class="form-control" id="tanggal_bapenyaluranbarang" type="date" aria-describedby="nameHelp" name="tanggal_bapenyaluranbarang" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapenyaluranbarang">Berita Acara Penyaluran Barang</label>
                    <input value="<?php echo $ambil->no_bapenyaluranbarang; ?>"class="form-control" id="no_bapenyaluranbarang" type="text" aria-describedby="nameHelp" name="no_bapenyaluranbarang" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpenyaluran/surat2/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
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
