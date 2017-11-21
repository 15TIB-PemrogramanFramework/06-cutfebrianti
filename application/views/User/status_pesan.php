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
      <?php $this->load->view('menu_member');?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Daftar Status Pemesanan
        <small></small>
      </h1>

      <ol class="breadcrumb">
      
        
        </li>
        <li class="breadcrumb-item active">Status Pemesanan</li>
      </ol>
      
        
    
      <div class="row">
       <table id="example" class="table table-striped table-bordered">

      <thead>
        <tr>
          <th>ID Pemesanan</th>
          <th>Id Member</th>
          <th>Id makanan</th>
          <th>Jumlah Pesanan</th>
          <th>Status pesan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pesan as $key => $value) { ?>
        <tr>
          <td><?php echo $value->id_pesan; ?></td>
          <td><?php echo $value->id_member; ?></td>
          <td><?php echo $value->id_makanan; ?></td>
          <td><?php echo $value->jumlah_pesanan; ?></td>
          <td><?php echo $value->status_pesan; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 
      </div>

      <!-- Pagination -->
      
    </div>




    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
