<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Form Pembayaran
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url()."coba/home_user"?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Pembayaran</li>
    </ol>
    
        <?php $this->session->flashdata('bayar') ?>
        <form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
        <label>Bukti Pembayaran: </label>
        <input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar makanan">
        </div>      
          
          <input type="hidden" name="id_konfirmasi" value="<?php echo $id_konfirmasi; ?>">
           
          <input type="hidden" name="rek_nama" value="<?php echo $rek_nama; ?>">
          <input type="hidden" name="met_transfer" value="<?php echo $met_transfer; ?>">

          <button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
          <a href="<?php echo site_url('coba/makanan_member')?>" class="btn btn-default">Cancel</a>
        </form>
      </div>


</div></div><br><br><br><br></div><br><br><br><br></div><br><br><br><br><br>



<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
