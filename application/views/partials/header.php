<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
	<title>Users App</title>
</head>
<body>


	<div id="siteWrapper" class="d-flex flex-column">
		
		<nav class="navbar navbar-expand-sm bg-white shadow-sm">
		  <a class="navbar-brand" href="/">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav ml-auto">
		      <?php if (!$this->ion_auth->logged_in()): ?>
		      	<li class="nav-item">
		    			<a href="<?php echo base_url('auth/login'); ?>" class="nav-link btn btn-sm btn-primary">
			        	Sign in
			    		</a>
			    	</li>
		      	<li class="nav-item pl-1">
		    			<a href="<?php echo base_url('auth/create_user'); ?>" class="nav-link btn btn-sm btn-primary">
			        	Sign up, it's free
			    		</a>
			    	</li>
		    	<?php else: ?>
		    	<li class="nav-item">
	        	<a href="<?php echo base_url('auth/logout'); ?>" class="nav-link btn btn-sm btn-primary">
		        	Sign out
		    		</a>
	    		</li>
		    	<?php endif ?>
		    </ul>
		  </div>  
		</nav>

	<div class="container my-5">