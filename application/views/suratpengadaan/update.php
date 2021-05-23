

<?php 
$this->load->view('include/header'); 
$this->load->view('operator/barangpersediaan/menu'); 
?>

</head>
<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('suratpengadaan')?>">Surat Pengadaan</a>
        </li>
  
        <li class="breadcrumb-item active">No Surat Pengadaan</li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> No Surat Pengadaan</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('suratpengadaan/simpan_update')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_mutasi"  value="<?php echo $ambil->id_mutasi; ?>" />
       
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpptk">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpptk; ?>"class="form-control" id="tanggal_suratpermohonanpptk" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpptk" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpptk">Surat Permohonan dari PPTK kepada PA</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpptk; ?>"class="form-control" id="no_suratpermohonanpptk" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpptk" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat1/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpenyedia">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpenyedia; ?>"class="form-control" id="tanggal_suratpermohonanpenyedia" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpenyedia" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpenyedia">Surat Permohonan dari SKPD kepada Penyedia</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpenyedia; ?>"class="form-control" id="no_suratpermohonanpenyedia" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpenyedia" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat2/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratbalasan">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratbalasan; ?>"class="form-control" id="tanggal_suratbalasan" type="date" aria-describedby="nameHelp" name="tanggal_suratbalasan" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratbalasan">Surat Balasan dari Penyedia</label>
                    <input value="<?php echo $ambil->no_suratbalasan; ?>"class="form-control" id="no_suratbalasan" type="text" aria-describedby="nameHelp" name="no_suratbalasan" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat3/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratperintahpengiriman">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratperintahpengiriman; ?>"class="form-control" id="tanggal_suratperintahpengiriman" type="date" aria-describedby="nameHelp" name="tanggal_suratperintahpengiriman" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratperintahpengiriman">Surat Perintah Pengiriman (Surat Pesanan)</label>
                    <input value="<?php echo $ambil->no_suratperintahpengiriman; ?>"class="form-control" id="no_suratperintahpengiriman" type="text" aria-describedby="nameHelp" name="no_suratperintahpengiriman" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat4/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapenyedia">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapenyedia; ?>"class="form-control" id="tanggal_bapenyedia" type="date" aria-describedby="nameHelp" name="tanggal_bapenyedia" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapenyedia">Berita Acara Penerimaan Dan Pemeriksaan Dari Penyedia Ke PPK</label>
                    <input value="<?php echo $ambil->no_bapenyedia; ?>"class="form-control" id="no_bapenyedia" type="text" aria-describedby="nameHelp" name="no_bapenyedia" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat5/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bappk">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bappk; ?>"class="form-control" id="tanggal_bappk" type="date" aria-describedby="nameHelp" name="tanggal_bappk" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bappk">Berita Acara Serah Terima Barang dari PPK ke PA/KPA</label>
                    <input value="<?php echo $ambil->no_bappk; ?>"class="form-control" id="no_bappk" type="text" aria-describedby="nameHelp" name="no_bappk" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat6/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_kwitansi">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_kwitansi; ?>"class="form-control" id="tanggal_kwitansi" type="date" aria-describedby="nameHelp" name="tanggal_kwitansi" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_kwitansi">Kwitansi</label>
                    <input value="<?php echo $ambil->no_kwitansi; ?>"class="form-control" id="no_kwitansi" type="text" aria-describedby="nameHelp" name="no_kwitansi" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat7/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_faktur">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_faktur; ?>"class="form-control" id="tanggal_faktur" type="date" aria-describedby="nameHelp" name="tanggal_faktur" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_faktur">Faktur</label>
                    <input value="<?php echo $ambil->no_faktur; ?>"class="form-control" id="no_faktur" type="text" aria-describedby="nameHelp" name="no_faktur" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat8/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpembayaran">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpembayaran; ?>"class="form-control" id="tanggal_suratpermohonanpembayaran" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpembayaran" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpembayaran">Surat Permohonan Pembayaran</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpembayaran; ?>"class="form-control" id="no_suratpermohonanpembayaran" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpembayaran" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat9/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
                  </div>

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapembayaran">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapembayaran; ?>"class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_bapembayaran" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapembayaran">Berita Acara Pembayaran</label>
                    <input value="<?php echo $ambil->no_bapembayaran; ?>"class="form-control" id="no_bapembayaran" type="text" aria-describedby="nameHelp" name="no_bapembayaran" />
                  </div>  

                  <div class="col-md-4">
                  <tr><a href="<?php echo base_url('suratpengadaan/surat10/')?><?php echo $ambil->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Print<i class="fa fa-tag"></i></a></tr>
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
