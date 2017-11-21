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

<body bgcolor="grey">

  <!-- Navigation -->
  
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Form Pemesanan
      <small></small>
    </h1>

        <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href =  <p> <a href="<?php echo site_url('coba'); ?>"> BACK TO HOME </a> 
      </li>
      <li class="breadcrumb-item active">Pemesanan</li>
    </ol>
    
    
        
        <form action="<?php echo site_url('coba'); ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label>Jumlah</label><br>
            <input type="text" name="jumlah_pesanan" value=""> 
          </div>      
          
          <input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
          <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
          <input type="hidden" name="id_makanan" value="<?php echo $id_makanan; ?>">

          <button class="btn btn-primary" type="submit"><?php echo $button; ?></button>

          <a href="<?php echo site_url('coba/produk_member')?>" class="btn btn-default">Cancel</a>
        </form>
      </div>


</div></div><br><br><br><br></div><br><br><br><br></div><br><br><br><br><br><br>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
  </div>

  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
