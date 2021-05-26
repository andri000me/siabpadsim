

<?php 
$this->load->view('include/header'); 
$this->load->view('pptk/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('pengadaan')?>">Pengadaan</a>
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

        <form action="<?php echo base_url()?>detailpengadaan/simpan_update/<?php echo $hasilparsing; ?>/<?php echo $ambil->id_detailmutasi; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_detailmutasi"  value="<?php echo $ambil->id_detailmutasi; ?>" />
                    <label for="id_ssh">Nama Barang</label>
                    <select class="theSelect" id="id_ssh" name="id_ssh" required />
                    
                    <option value="<?php echo $ambil->id_ssh; ?>">
                    <?php 
                    $id_ssh = $this->db->query("SELECT * FROM tbl_ssh where id_ssh=$ambil->id_ssh order by Namabarang_ssh");
                    foreach ($id_ssh->result() as $id_ssh) :
                    echo $id_ssh->Namabarang_ssh; 
                    endforeach;
                    ?>
                    </option>
                        <?php $id_ssh = $this->db->query("SELECT * FROM tbl_ssh where id_ssh!=$ambil->id_ssh order by Namabarang_ssh");
                
                        foreach ($id_ssh->result() as $id_ssh) : ?>
                        <option value="<?= $id_ssh->id_ssh?>"><?= $id_ssh->Namabarang_ssh?></option>
                         <?php endforeach; ?>
                       </select>
                        </div>
                        <br>
                  <div class="col-md-5">
                    <label for="total_barang_in">Total Barang</label>
                    <input value="<?php echo $ambil->total_barang_in; ?>" class="form-control" id="total_barang_in" type="text" aria-describedby="nameHelp" name="total_barang_in" required/>
                  </div>
<br>
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
    <script>
		$(".theSelect").select2();
	</script>
<?php $this->load->view('include/footer'); ?>

