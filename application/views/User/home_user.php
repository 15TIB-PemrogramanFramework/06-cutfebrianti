<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Agency - Rumah Catering -- Masakan MAMA  Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Rumah Catering</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#MService">Makanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Galery">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('coba/login'); ?>">Login</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
           <a class="navbar-brand" href="<?php echo site_url('Login');?>" method="POST">
              <p>Selamat Datang <b><?php echo $this->session->userdata('username'); ?></></p>
                    </a>

                    <a class="navbar-brand" href="<?php echo site_url('Login/logout');?>">
                      <p>| Logout</p>
                    </a>
          <div class="intro-lead-in">Selamat Datang di Rumah Catering MAMA :) </div>

          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#Makanan">Pesan Catering Kami -></a>

        </div>
      </div>
    </header>


     <!-- Login -->
    <section class="bg-light" id="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">login</h2>
            <h3 class="section-subheading text-muted">....</h3>
          </div>
        </div>

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
              <span class="sr-only">...</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('Login');?>" method="POST">
              <p>Selamat Datang <b><?php echo $this->session->userdata('username'); ?></b></p>
                    </a>

                    <a class="navbar-brand" href="<?php echo site_url('Login/logout');?>">
                      <p>| Logout</p>
                    </a>

            
              
                    <!--<a class="navbar-brand" href="<?php //echo site_url('home/register'); ?>">
                      <p>Register</p>
                    </a>-->
</div>



    <!-- Makanan -->
    <section id="Services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Makanan</h2>
            <h3 class="section-subheading text-muted">Silahkan Klik (Pesan Makanan) Untuk Pemesanan</h3>
          </div>
        </div>



        <div class="row text-center">
          <?php foreach ($makanan as $key => $value) { ?>
          <div class="col-md-4">    
              
          <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
             <img class="img-fluid" src="<?php echo base_url();?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt="">
            </span>
            <h4 class="service-heading">
            <?php echo $value->jenis_makanan; ?></h4>
             <p><?php echo $value->harga_makanan; ?></p>
           
            <p class="text-muted"><?php echo $value->deskripsi_makanan; ?></p>
             
             <a href="<?php echo base_url()."pesan/tambah/".$value->id_makanan?>" class="btn btn-primary">Pesan Makanan</a>
              <a href="<?php echo base_url()."Bayar/tambah/".$value->id_makanan?>" class="btn btn-primary">Bayar Pesanan</a>

          </div>
          <?php } ?>
        </div>
    </section>

    <!-- Galery Grid -->
    <section class="bg-light" id="Galery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Galery</h2>
            <h3 class="section-subheading text-muted">Galery Rumah Catering ~ MAMA</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal1">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/kepiting.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Food</h4>
              <p class="text-muted">Kepiting goreng Saos Pedas</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal2">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/rendang.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Food</h4>
              <p class="text-muted">Rendang Daging</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal3">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/ayamsaos.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Food</h4>
              <p class="text-muted">Ayam Saos Merah</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal4">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/eslaksamana.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Drink Water</h4>
              <p class="text-muted">Es Laksamana Mengamuk</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal5">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/estimun.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Drink Water</h4>
              <p class="text-muted">Es Mentimun</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal6">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/esteler.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Drink Water</h4>
              <p class="text-muted">Es Teller</p>
            </div>
          </div>

           <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal4">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/seblak1.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Dessert</h4>
              <p class="text-muted">Seblak bandung</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal5">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/mesir2.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Dessert</h4>
              <p class="text-muted">Martabak Mesir</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal6">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/sate2.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Dessert</h4>
              <p class="text-muted">Sate Madura</p>
            </div>
          </div>

           <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal4">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/kue4.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Birthday Cake</h4>
              <p class="text-muted">Choco Tiramisu</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal5">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/kue8.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Birthday cake</h4>
              <p class="text-muted">Choco high oreo</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal6">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/kue7.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Birthday Cake </h4>
              <p class="text-muted">Chocolate</p>
            </div>
          </div>


           <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal4">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/escampur.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Drink Water</h4>
              <p class="text-muted">Es Campur</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal5">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/esmangga.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Drink Water</h4>
              <p class="text-muted">Es Mangga</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal6">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/esjohor.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Drink Water </h4>
              <p class="text-muted">Es Johor</p>
            </div>
          </div>


           <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal4">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/tumpeng1.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Dessert</h4>
              <p class="text-muted">Tumpeng</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal5">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/tmp.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Dessert</h4>
              <p class="text-muted">Tumpeng</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Galery-item">
            <a class="Galery-link" data-toggle="modal" href="#GaleryModal6">
              <div class="Galery-hover">
                <div class="Galery-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/tumpeng2.jpg" alt="">
            </a>
            <div class="Galery-caption">
              <h4>Dessert </h4>
              <p class="text-muted">Tumpeng</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Rumah Catering ~ MAMA.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url();?>assets/img/kue.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Rumah Catering Tahap Pertama</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Rumah Catering berada sejak tahun 2009. awal dari rumah catering adalah sewaktu mendapatkan pesanan makanan rumahan untuk arisan ibu-ibu sebanyak 30 porsi makanan.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url();?>assets/img/tumpeng3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2011-2013</h4>
                    <h4 class="subheading">Rumah Catering Tahap Kedua</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Pada tahap kedua , Rumah Catering semakin meningkat. dari sebelumnya mendapat pesanan hanya 30 pori menjadi 100-150 porsi makanan . dimulai dari acara arisan , hingga acara AQIQAH dan KHITANAN.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url();?>assets/img/ktk.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2013-2015</h4>
                    <h4 class="subheading">Rumah Catering Tahap Ketiga</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Pada tahap ketiga, Rumah Catering semakin meningkat dengan adanya teknologi berupa handphone android. dari sebelumnya mendapat pesanan sebanyak 100-150 porsi, kini semakin pesat dan meningkat menjadi 170-300 porsi makanan .Dimulai dari acara arisan , AQIQAH/KHITANAN, dan juga acara formal lainnya.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url();?>assets/img/paket_6.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2015-2017</h4>
                    <h4 class="subheading">Rumah Catering Tahap Keempat</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Pada tahap keempat , Rumah Catering lebih meningkat dan semakin banyak . dari sebelumnya mendapat pesanan hanya 170-300 porsi makanan. Kini Rumah Catering mendapat pesanan sebanyak 300-700 porsi masakan. dimulai dari acara arisan ,AQIQAH/KHITANAN,penikahan, acara formal, ulang tahun dan lain sebagainya.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>AND
                    <br>Rumah Catering 
                    <br>The Next !!!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Owner Rumah Catering ~ MAMA</h2>
            <h3 class="section-subheading text-muted">.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url();?>assets/img/ayah.jpg" alt="">
              <h4>Fahruddinsyah</h4>
              <p class="text-muted">Owner - 1 </p>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url();?>assets/img/owner1.jpg" alt="">
              <h4>Cut Febrianti</h4>
              <p class="text-muted">Sub - Owner</p>
            
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url();?>assets/img/mama.jpg" alt="">
              <h4>Rubiati</h4>
              <p class="text-muted">Owner - 2</p>
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Ketiga Gambar di atas adalah wajah wajah dari pemilik Usaha Rumah Catering ~ MAMA . diantaranya ada Ibu , Bapak dan Anak Perempuannya .</p>
          </div>
        </div>
      </div>
    </section>

   

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

              
      

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Galery Modals -->

    <!-- Modal 1 -->
    <div class="Galery-modal modal fade" id="GaleryModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/img/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="Galery-modal modal fade" id="GaleryModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/img/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="Galery-modal modal fade" id="GaleryModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/img/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="Galery-modal modal fade" id="GaleryModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/img/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="Galery-modal modal fade" id="GaleryModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/img/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="Galery-modal modal fade" id="GaleryModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/img/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/agency.min.js"></script>

  </body>

</html>