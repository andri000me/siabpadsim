<?php 
$this->load->view('include/header'); 
$this->load->view('admin/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo config_item('base_url'); ?>">Halaman Utama</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Akun</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data Akun</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('akun/simpan_akun')?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="id_opd">OPD</label>
                     <select class="form-control form-control-sm" id="id_opd" name="id_opd" required />
                        <?php $id_opd = $this->db->query("SELECT * FROM tbl_opd");
                
                        foreach ($id_opd->result() as $id_opd) : ?>
                        <option value="<?= $id_opd->id_opd?>"><?= $id_opd->nama_opd?></option>
                         <?php endforeach; ?>
                       </select>
                     </div>
                           
                  <div class="col-md-6">
                    <label for="username">Nomor Induk Pegawai</label>
                    <input class="form-control" id="username" type="text" aria-describedby="nameHelp" name="username" required/>
                  </div>
                </div>
              </div>

            <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nama">Nama</label>
                    <input class="form-control" id="nama" type="text" aria-describedby="nameHelp" name="nama" required/>
                  </div>
      
                  <div class="col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" type="text" aria-describedby="nameHelp" name="password" required/>
                  </div>
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="jabatan">Jabatan</label>
                    <input class="form-control" id="jabatan" type="text" aria-describedby="nameHelp" name="jabatan" required/>
                  </div>

                <div class="col-md-6">
                    <label for="level">Level</label>
                    <select class="form-control" name="level">
                      <option value="Admin">Admin</option>
                      <option value="Pengguna Anggaran">Pengguna Anggaran</option>                   
                      <option value="PPTK">PPTK</option>             
                      <option value="Pengurus Barang Pengguna">Pengurus Barang Pengguna</option>                           
                      <option value="Operator">Operator</option>  
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