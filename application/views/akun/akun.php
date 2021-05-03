

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
  
        <li class="breadcrumb-item active">Manajemen Akun</li>
      </ol>
 <a href="<?php echo base_url('akun/tambah')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
     
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel Akun</div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No</th> 
                        <th>Username</th>
                        <th>Password</th> 
                        <th>Nama</th>                         
                        <th>Jabatan</th> 
                        <th>Level</th>
                        <th>OPD</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach ($hasil as $item)
                    {
    
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $item->username;?></td>
                        <td><?php echo $item->password;?></td>
                        <td><?php echo $item->nama;?></td>
                        <td><?php echo $item->jabatan;?></td>
                        <td><?php echo $item->level;?></td>
                        <td><?php echo $item->id_opd;?></td>
                        <td> <a href="<?php echo base_url()?>akun/update/<?php echo $item->id; ?>" class="btn btn-warning" role="button">Update</a></td>
                        <td> <a href="<?php echo base_url()?>akun/hapus/<?php echo $item->id; ?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-danger" role="button">Delete</a></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>
</div>
</div>
</div>
</div>
    </section>

<?php $this->load->view('include/footer'); ?>

