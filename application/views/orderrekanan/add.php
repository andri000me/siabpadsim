

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
  
        <li class="breadcrumb-item active">Tambah Order Barang</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data Order</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('orderrekanan/action_menambahdataorderrekanan')?>" method="post" enctype="multipart/form-data">

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
                  <div class="col-md-6">
                    <label for="id_ssh">Paket Pekerjaan</label>
                    <select class="form-control form-control-sm" id="id_paketpekerjaan" name="id_paketpekerjaan" required />
                    
                    <option>Silahkan Pilih Paket Pekerjaan</option>
                        <?php $id_paketpekerjaan = $this->db->query("SELECT * FROM tbl_paketpekerjaan");
                
                        foreach ($id_paketpekerjaan->result() as $id_paketpekerjaan) : ?>
                        <option value="<?= $id_paketpekerjaan->id_paketpekerjaan?>"><?= $id_paketpekerjaan->paketpekerjaan?></option>
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


