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
  
        <li class="breadcrumb-item active">Update Data Penyaluran</li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Data Order Penyaluran</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url()?>detailpenyaluran/simpan_update/<?php echo $hasilparsing; ?>/<?php echo $ambil->id_detailpenyaluran; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_detailpenyaluran"  value="<?php echo $ambil->id_detailpenyaluran; ?>" />
       
              
            
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="id_ssh">Nama Barang</label>
                    <select class="form-control form-control-sm" id="id_ssh" name="id_ssh" required />
                    
                    <option value="<?php echo $ambil->id_ssh; ?>"><?php echo $ambil->id_ssh; ?></option>
                        <?php $id_ssh = $this->db->query("SELECT * FROM tbl_ssh");
                
                        foreach ($id_ssh->result() as $id_ssh) : ?>
                        <option value="<?= $id_ssh->id_ssh?>"><?= $id_ssh->Namabarang_ssh?></option>
                         <?php endforeach; ?>
                       </select>
                        </div>
                  <div class="col-md-6">
                    <label for="total_barang">Total Barang</label>
                    <input value="<?php echo $ambil->total_barang; ?>" class="form-control" id="total_barang" type="text" aria-describedby="nameHelp" name="total_barang" required/>
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

