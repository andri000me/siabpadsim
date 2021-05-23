

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('operator/barangpersediaan')?>">Barang Persediaan</a>
        </li>
  
        <li class="breadcrumb-item active">Laporan Buku Barang Persediaan</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Laporan Buku Barang Persediaan</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">
        <form action="<?php echo base_url()?>laporanbukubarangpersediaan/print/" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="tahun_order">Tahun</label>
                    <select class="form-control form-control-sm" id="tahun_order" name="tahun_order" required />
                    
                    <option>Silahkan Pilih Tahun</option>
                        <?php $tahun_order = $this->db->query("SELECT * FROM tbl_detailmutasi GROUP BY tahun_order");
                
                        foreach ($tahun_order->result() as $tahun_order) : ?>
                        <option value="<?= $tahun_order->tahun_order?>"><?= $tahun_order->tahun_order?></option>
                         <?php endforeach; ?>
                       </select>
                        </div>
                  
                </div>
              </div>

              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Print" name="btnSimpan" >
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


