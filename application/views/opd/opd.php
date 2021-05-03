

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
  
        <li class="breadcrumb-item active">Manajemen OPD</li>
      </ol>
 <a href="<?php echo base_url('opd/tambah')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Data</a></i>
     
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Tabel OPD</div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>                       
                        <th>Kode OPD </th> 
                        <th>Nama OPD</th>  
                        <th>Nip Kepala</th>    
                        <th>Nama Kepala</th> 
                        <th>Nip Ppk</th>  
                        <th>Nama Ppk</th> 
                        <th>Nip Bendahara</th> 
                        <th>Nama Bendahara</th>  
                        <th>Nip Pbp</th>
                        <th>Nama Pbp</th>
                        <th>Nip Ppb</th>
                        <th>Nama Ppb</th>
                        <th colspan='2' align="center"><p align="center">Aksi</p></th>
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
                        <td><?php echo $item->kode_opd;?></td>
                        <td><?php echo $item->nama_opd;?></td>
                        <td><?php echo $item->nip_kepala;?></td>
                        <td><?php echo $item->nama_kepala;?></td>  
                        <td><?php echo $item->nip_ppk;?></td>
                        <td><?php echo $item->nama_ppk;?></td>
                        <td><?php echo $item->nip_bendahara;?></td>
                        <td><?php echo $item->nama_bendahara;?></td>  
                        <td><?php echo $item->nip_pbp;?></td>
                        <td><?php echo $item->nama_pbp;?></td>  
                        <td><?php echo $item->nip_ppb;?></td>
                        <td><?php echo $item->nama_ppb;?></td>      
                        <td> <a href="<?php echo base_url()?>opd/update/<?php echo $item->id_opd; ?>" class="btn btn-warning" role="button">Update</a></td>
                        <td> <a href="<?php echo base_url()?>opd/hapus/<?php echo $item->id_opd; ?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-danger" role="button">Delete</a></td>
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


