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
      <h1 class="mt-4 mb-3">Rumah Catering - MAMA
        <br><small>"Untuk pembayaran harus melakukan pemesanan terlebih dahulu"</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index_member">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url()."coba/status_member/".$this->session->userdata('username'); ?>">Status Pemesanan</a>
      </ol>
      
        
    
      <div class="row">
        <?php foreach ($makanan as $key => $value) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                
              </h4>
                <ul class="list-group list-group-flush">
                   
                    <li class="list-group-item"> <?php echo $value->nama_makanan; ?></li>
                    <li class="list-group-item"> <?php echo $value->jenis_makanan; ?></li>
                    <li class="list-group-item"><?php echo $value->harga_makanan; ?></li>
                     <li class="list-group-item"><?php echo $value->deskripsi_makanan; ?></li>

                    <li class="list-group-item">
                        <center><a href="<?php echo base_url()."Pesan/tambah/".$value->id_makanan?>" class="btn btn-primary">Pesan</a>
                        <a href="<?php echo base_url()."Bayar/tambah/".$value->id_barang?>" class="btn btn-primary">Bayar</a></center>
                    </li>
                </ul>
            </div>
          </div>
          
        </div><?php } ?>
 
      </div>

      <!-- Pagination -->
      
    </div>
    <!-- /.container -->

    <!-- Footer -->
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
