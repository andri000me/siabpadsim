<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('pengurusbarangpengguna')?>"><span>SIABPADSIM</span></a></h1>
     </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('pengurusbarangpengguna')?>">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="drop-down"><a href="">Menu</a>
            <ul>
              <li><a href="#">Aset Tetap</a>
              </li>
              <li><a href="<?php echo base_url('pengurusbarangpengguna/barangpersediaan/index')?>">Barang Persediaan</a>
              </li>
			        <li><a href="<?php echo base_url()?>login/profil/<?php echo $this->session->userdata('username') ?>">Ganti Kata Sandi</a>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('logout'); ?>">Log Out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->