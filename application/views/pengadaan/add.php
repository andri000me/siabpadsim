

<?php 
$this->load->view('include/header'); 
$this->load->view('pptk/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Order Barang</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data Order</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('pengadaan/action_menambahdatapengadaan')?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="tanggal_pesan">Tanggal Pesan</label>
                    <input class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_pesan" required/>
                  </div>
                           
                  <div class="col-md-6">
                    <label for="id_rekanan">Nama Rekanan</label>
                    <select class="form-control form-control-sm" id="id_rekanan" name="id_rekanan" required />
                    <option>Silahkan Pilih Nama Rekanan</option>
                        <?php 
                        $username = $this->session->userdata('username');
                        $id_rekanan = $this->db->query("SELECT * FROM tbl_rekanan where username=$username");
                
                        foreach ($id_rekanan->result() as $id_rekanan) : ?>
                        
                        <option value="<?= $id_rekanan->id_rekanan?>"><?= $id_rekanan->nama_rekanan?></option>
                         <?php endforeach; ?>
                       </select>
                      </div>
                </div>
              </div>

            <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="belanja">Belanja</label>
                    <input class="form-control" id="belanja" type="text" aria-describedby="nameHelp" name="belanja" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="memesan">Memesan</label>
                    <input class="form-control" id="memesan" type="text" aria-describedby="nameHelp" name="memesan" required/>
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

