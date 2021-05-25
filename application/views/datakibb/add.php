

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/kibb/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('datakibb')?>">Data KIB B</a>
        </li>
  
        <li class="breadcrumb-item active">Tambah Data KIB B</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Data KIB B</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('datakibb/action_menambahdatadatakibb')?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="id_opd">Nama SKPD</label>
                    <input class="form-control" id="id_opd" type="text" aria-describedby="nameHelp" name="id_opd" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="no_urut">No Urut</label>
                    <input class="form-control" id="no_urut" type="text" aria-describedby="nameHelp" name="no_urut" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nama_barang">Jenis Barang / Nama Barang</label>
                    <input class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="roda_dua">Roda 2 (Dua)</label>
                    <input class="form-control" id="roda_dua" type="text" aria-describedby="nameHelp" name="roda_dua" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="roda_tiga">Roda 3 (Tiga)</label>
                    <input class="form-control" id="roda_tiga" type="text" aria-describedby="nameHelp" name="roda_tiga" required/>
                  </div>
                  
                  <div class="col-md-6">
                    <label for="roda_empat">Roda 4 (Empat)</label>
                    <input class="form-control" id="roda_empat" type="text" aria-describedby="nameHelp" name="roda_empat" required/>
                  </div>

                 
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="roda_enam">Roda 6 (Enam)</label>
                    <input class="form-control" id="roda_enam" type="text" aria-describedby="nameHelp" name="roda_enam" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="merk">Merk</label>
                    <input class="form-control" id="merk" type="text" aria-describedby="nameHelp" name="merk" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="type">Type</label>
                    <input class="form-control" id="type" type="text" aria-describedby="nameHelp" name="type" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="bahan">Bahan</label>
                    <input class="form-control" id="bahan" type="text" aria-describedby="nameHelp" name="bahan" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="tahun_pembelian">Tahun Pembelian</label>
                    <input class="form-control" id="tahun_pembelian" type="text" aria-describedby="nameHelp" name="tahun_pembelian" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_pabrik">Nomor Pabrik</label>
                    <input class="form-control" id="nomor_pabrik" type="text" aria-describedby="nameHelp" name="nomor_pabrik" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="nomor_rangka">Nomor Rangka</label>
                    <input class="form-control" id="nomor_rangka" type="text" aria-describedby="nameHelp" name="nomor_rangka" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_mesin">Nomor Mesin</label>
                    <input class="form-control" id="nomor_mesin" type="text" aria-describedby="nameHelp" name="nomor_mesin" required/>
                  </div>

                 
                  
                </div>
              </div> 
              <div class="form-group">
              <div class="form-row">
               

                  <div class="col-md-6">
                    <label for="nomor_polisi">Nomor Polisi</label>
                    <input class="form-control" id="nomor_polisi" type="text" aria-describedby="nameHelp" name="nomor_polisi" required/>
                  </div>

                  <div class="col-md-6">
                    <label for="nomor_bpkb">Nomor BPKB</label>
                    <input class="form-control" id="nomor_bpkb" type="date" aria-describedby="nameHelp" name="nomor_bpkb" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="sumber_perolehan">Sumber Perolehan</label>
                    <input class="form-control" id="sumber_perolehan" type="text" aria-describedby="nameHelp" name="sumber_perolehan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="harga">Harga  (Rp)</label>
                    <input class="form-control" id="harga" type="text" aria-describedby="nameHelp" name="harga" required/>
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="pejabat_pengguna">Pejabat Pengguna</label>
                    <input class="form-control" id="pejabat_pengguna" type="text" aria-describedby="nameHelp" name="pejabat_pengguna" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="keterangan">Ket</label>
                    <input class="form-control" id="keterangan" type="text" aria-describedby="nameHelp" name="keterangan" required/>
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
