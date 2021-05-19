

<?php 
$this->load->view('include/header'); 
$this->load->view('sekretaris/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pptk/barangpersediaan')?>">Barang Persediaan</a>
        </li>
  
        <li class="breadcrumb-item active">Update Data Order Barang</li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Data Order Barang</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('orderrekanan/simpan_update')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_orderrekanan"  value="<?php echo $ambil->id_orderrekanan; ?>" />
        <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="tanggal_pesan">Tanggal Pesan</label>
                    <input value="<?php echo $ambil->tanggal_pesan; ?>"class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_pesan" required/>
                  </div>
                           
                  <div class="col-md-6">
                    <label for="id_rekanan">Nama Rekanan</label>
                    <select class="form-control form-control-sm" id="id_rekanan" name="id_rekanan" required />
                    <option value="<?php echo $ambil->id_rekanan; ?>"><?php echo $ambil->id_rekanan; ?></option>
                        <?php $id_rekanan = $this->db->query("SELECT * FROM tbl_rekanan");
                        foreach ($id_rekanan->result() as $id_rekanan) : ?>
                        <option value="<?= $id_rekanan->id_rekanan?>"><?= $id_rekanan->nama_rekanan?></option>
                         <?php endforeach; ?>
                       </select>
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

