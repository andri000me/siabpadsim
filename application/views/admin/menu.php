<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('admin')?>"><span>SIABPADSIM</span></a></h1>
     </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('admin')?>">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="drop-down"><a href="">Menu</a>
            <ul>
              <li><a href="<?php echo base_url('akun')?>">Data Akun</a>
              </li>
              <li><a href="<?php echo base_url('opd')?>">Data OPD</a>
              </li>
			        <li><a href="<?php echo base_url('ssh')?>">Data SSH</a>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('logout'); ?>">Log Out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->