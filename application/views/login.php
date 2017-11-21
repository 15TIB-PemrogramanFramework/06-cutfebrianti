	<!DOCTYPE html>
	<html >
	<head>
	  <meta charset="UTF-8">
	  <title>login</title>
	  
	  
	  
	      <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/style.css">

	  
	</head>

	<body bgcolor="grey">
	  <div class="wrapper">
		<div class="container">
			<h1>Welcome...</h1>
			
			<form class="form" action="<?php echo site_url('Login'); ?>" method="POST">
				<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
				<input class="form-control" placeholder="Password" name="password" type="password" ><br>
				<button type="submit" id="login-button">Login</button>
			</form>
	
			<form class="form" action="<?php echo site_url('coba/daftar'); ?>" method="POST">
				<button type="submit" id="regis-button">Registrasi</button>
			</form>
			<a href =  <p> <a href="<?php echo site_url('coba'); ?>"> BACK TO HOME </a> 

		</div>


		</div>
		
		<ul class="bg-bubbles">
			
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	    <script  src="js/index.js"></script>

	</body>
	</html>
