

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kiba/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('datakiba')?>">Data KIB A</a>
        </li>
  
        <li class="breadcrumb-item active">Update Data KIB A</li>
      </ol>
<!-- Example DataTables Card-->
<?php foreach ($content->result() as $data) {
          # code...
        } ?>

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Data KIB A</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/datakiba/action_updatedatadatakiba/<?= $data->id_kiba?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_kiba"  value="<?= $data->id_kiba?>" />
        
        <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="id_opd">Nama OPD</label>
                    <input value="<?= $data->id_opd?>" class="form-control" id="id_opd" type="text" aria-describedby="nameHelp" name="id_opd" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="no_urut">No Urut</label>
                    <input value="<?= $data->no_urut?>" class="form-control" id="no_urut" type="text" aria-describedby="nameHelp" name="no_urut" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nama_barang">Nama Barang</label>
                    <input value="<?= $data->nama_barang?>" class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="no_kode_barang">Nomor Kode Barang</label>
                    <input value="<?= $data->no_kode_barang?>" class="form-control" id="no_kode_barang" type="text" aria-describedby="nameHelp" name="no_kode_barang" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="no_register">Nomor Register</label>
                    <input value="<?= $data->no_register?>" class="form-control" id="no_register" type="text" aria-describedby="nameHelp" name="no_register" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="keterangan_tanah">Keterangan Tanah</label>
                    <input value="<?= $data->keterangan_tanah?>" class="form-control" id="keterangan_tanah" type="text" aria-describedby="nameHelp" name="keterangan_tanah" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="luas_catat_kib">LUAS (M2) YANG DICATAT DI KIB</label>
                    <input value="<?= $data->luas_catat_kib?>" class="form-control" id="luas_catat_kib" type="text" aria-describedby="nameHelp" name="luas_catat_kib" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="luas_sertifikat">LUAS (M2) SESUAI SERTIFIKAT</label>
                    <input value="<?= $data->luas_sertifikat?>" class="form-control" id="luas_sertifikat" type="text" aria-describedby="nameHelp" name="luas_sertifikat" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="koreksi_bertambah">Koreksi Bertambah</label>
                    <input value="<?= $data->koreksi_bertambah?>" class="form-control" id="koreksi_bertambah" type="text" aria-describedby="nameHelp" name="koreksi_bertambah" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="koreksi_berkurang">Koreksi Berkurang</label>
                    <input value="<?= $data->koreksi_berkurang?>" class="form-control" id="koreksi_berkurang" type="text" aria-describedby="nameHelp" name="koreksi_berkurang" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="tahun_pengadaan">TAHUN PENGADAAN</label>
                    <input value="<?= $data->tahun_pengadaan?>" class="form-control" id="tahun_pengadaan" type="text" aria-describedby="nameHelp" name="tahun_pengadaan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="alamat">LETAK/ALAMAT</label>
                    <input value="<?= $data->alamat?>" class="form-control" id="alamat" type="text" aria-describedby="nameHelp" name="alamat" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="hak_status_tanah">HAK STATUS TANAH</label>
                    <input  value="<?= $data->hak_status_tanah?>" class="form-control" id="hak_status_tanah" type="text" aria-describedby="nameHelp" name="hak_status_tanah" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="tanggal_sertifikat">TANGGAL SERTIFIKAT</label>
                    <input  value="<?= $data->tanggal_sertifikat?>" class="form-control" id="tanggal_sertifikat" type="date" aria-describedby="nameHelp" name="tanggal_sertifikat" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nomor_sertifikat">NOMOR SERTIFIKAT</label>
                    <input value="<?= $data->nomor_sertifikat?>" class="form-control" id="nomor_sertifikat" type="text" aria-describedby="nameHelp" name="nomor_sertifikat" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="penggunaan">PENGGUNAAN</label>
                    <input value="<?= $data->penggunaan?>" class="form-control" id="penggunaan" type="text" aria-describedby="nameHelp" name="penggunaan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="asal_usul">ASAL USUL</label>
                    <input value="<?= $data->asal_usul?>" class="form-control" id="asal_usul" type="text" aria-describedby="nameHelp" name="asal_usul" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="harga">HARGA</label>
                    <input value="<?= $data->harga?>" class="form-control" id="harga" type="text" aria-describedby="nameHelp" name="harga" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="keterangan_perolehan">KETERANGAN PEROLEHAN</label>
                    <input value="<?= $data->keterangan_perolehan?>" class="form-control" id="keterangan_perolehan" type="text" aria-describedby="nameHelp" name="keterangan_perolehan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="keterangan">KETERANGAN</label>
                    <input value="<?= $data->keterangan?>" class="form-control" id="keterangan" type="text" aria-describedby="nameHelp" name="keterangan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="jumlah_sertifkat">JUMLAH SERTIFIKAT</label>
                    <input value="<?= $data->jumlah_sertifkat?>" class="form-control" id="jumlah_sertifkat" type="text" aria-describedby="nameHelp" name="jumlah_sertifkat" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="jumlah_tanah">JUMLAH TANAH</label>
                    <input value="<?= $data->jumlah_tanah?>" class="form-control" id="jumlah_tanah" type="text" aria-describedby="nameHelp" name="jumlah_tanah" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="keterangan_penguasaan">KETERANGAN PENGUASAAN</label>
                    <input value="<?= $data->keterangan_penguasaan?>" class="form-control" id="keterangan_penguasaan" type="text" aria-describedby="nameHelp" name="keterangan_penguasaan" required/>
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
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>


