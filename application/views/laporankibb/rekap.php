

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('operator/kibb')?>">KIB B</a>
        </li>
  
        <li class="breadcrumb-item active">Laporan Rekap</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Laporan Rekap</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">
        <form action="<?php echo base_url()?>laporankibb/printrekap/" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="tahun_pembelian">Tahun</label>
                    <select class="form-control form-control-sm" id="tahun_pembelian" name="tahun_pembelian" required />
                    
                    <option>Silahkan Pilih Tahun</option>
                        <?php $tahun_pembelian = $this->db->query("SELECT * FROM tbl_kibb GROUP BY tahun_pembelian");
                
                        foreach ($tahun_pembelian->result() as $tahun_pembelian) : ?>
                        <option value="<?= $tahun_pembelian->tahun_pembelian?>"><?= $tahun_pembelian->tahun_pembelian?></option>
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


