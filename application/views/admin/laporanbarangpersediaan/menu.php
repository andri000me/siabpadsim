<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('operator')?>"><span>SIABPADSIM</span></a></h1>
     </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('operator')?>">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="drop-down"><a href="">Menu</a>
            <ul>
			        <li><a href="<?= base_url('laporanpenerimaanbarangpersediaan'); ?>">Laporan Penerimaan</a>
              </li>
			        <li><a href="<?= base_url('laporanpengeluaranbarangpersediaan'); ?>">Laporan Pengeluaran</a>
              </li>
			        <li><a href="<?= base_url('laporanbukubarangpersediaan'); ?>">Laporan Buku</a>  
              </li>
			        <li><a href="<?= base_url('laporanrekapitulasibarangpersediaan'); ?>">Laporan Rekapitulasi</a>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('logout'); ?>">Log Out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->