
<?php 
$this->load->view('include/header'); 
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('nomorsk/nomorsk')?>">SK Walikota</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Data SK Walikota</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data SK Walikota</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('nomorsk/action_menambahdatanomorsk')?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
              <div class="form-row">
              
                           
                  <div class="col-md-6">
                    <label for="no_sk">Nomor SK</label>
                    <input class="form-control" id="no_sk" type="text" aria-describedby="nameHelp" name="no_sk" required/>

                  </div>
                  <div class="col-md-6">
                    <label for="tanggal_sk">Tanggal SK</label>
                    <input class="form-control" id="tanggal_sk" type="date" aria-describedby="nameHelp" name="tanggal_sk" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="tanggal_skberakhir">Tanggal Berakhir</label>
                    <input class="form-control" id="tanggal_skberakhir" type="date" aria-describedby="nameHelp" name="tanggal_skberakhir" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="nama">Nama</label>
                    <input class="form-control" id="nama" type="text" aria-describedby="nameHelp" name="nama" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="nip">Nip</label>
                    <input class="form-control" id="nip" type="text" aria-describedby="nameHelp" name="nip" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="jabatan">Jabatan</label>
                    <input class="form-control" id="jabatan" type="text" aria-describedby="nameHelp" name="jabatan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="gol_jabatan">Golongan Jabatan</label>
                    <input class="form-control" id="gol_jabatan" type="text" aria-describedby="nameHelp" name="gol_jabatan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="gol">Level</label>
                    <input class="form-control" id="gol" type="text" aria-describedby="nameHelp" name="gol" required/>
                  </div>
                  </div>
                  <br>
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

 