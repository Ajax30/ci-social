<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
	<title>ChatApp!</title>
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
						<li class="nav-item d-flex dropdown">
							<a class="nav-link text-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Welcome, <?php echo $this->session->userdata('user_first_name');?>
							</a>
							<div class="dropdown-menu overflow-hidden p-0">
								<?php if($this->ion_auth->is_admin()) : ?>
									<a class="dropdown-item text-secondary" href="<?php echo base_url('/auth') ?>">
										<i class="fa fa-users mr-2"></i> Manage authors
									</a>
								<?php endif; ?>
								<a class="dropdown-item text-secondary" href="<?php echo base_url('/') ?>">
									<i class="fa fa-tachometer mr-2"></i> My dashboard
								</a>
								<a class="dropdown-item text-secondary" href="<?php echo base_url('auth/edit_user/' . $this->session->userdata('user_id')) ?>">
									<i class="fa fa-user-circle-o mr-2"></i> Edit my profile
								</a>
							</div>
						</li>
						<li class="nav-item">
							<span class="pr-2">
								<img src="<?php echo base_url('/assets/img/avatars/') . $this->session->userdata('user_avatar') ?>" alt="<?php echo $this->session->userdata('user_first_name') . ' ' . $this->session->userdata('user_last_name');?>" class="rounded-circle avatar">
							</span>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('auth/logout');?>" class="nav-link btn btn-sm btn-primary">Sign out</a>
						</li>
		    	<?php endif ?>
		    </ul>
		  </div>  
		</nav>

	<div class="container my-5">