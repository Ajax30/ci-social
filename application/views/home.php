<?php $this->load->view("partials/header");?>

	<div class="row">
		<?php $this->load->view("partials/sidebar");?>
		
		<div class="col-sm-7 col-md-8 col-lg-9">
			<div class="row">
				<?php foreach ($users as $user):?>
					<div class="col-sm-6 col-lg-4 col-xl-3 mb-4 px-sm-2">
						<div class="card h-100 shadow-sm p-2">
							<div class="p-3">
								<img src="<?php echo base_url('/assets/img/avatars/') . $user->avatar ?>" alt="<?php echo htmlspecialchars($user->first_name . ' ' . $user->first_name ,ENT_QUOTES,'UTF-8');?>" class="img-fluid img-thumbnail rounded-circle">
							</div>
							<div class="mt-auto">
								<h2 class="card-title display-4 px-1 pt-2 text-center"><?php echo $user->first_name . ' ' . $user->last_name; ?></h2>
							</div>
							<div class="read-more">
								<a class="btn btn-block btn-sm btn-success" href="#">Connect</a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>

	</div>
	
<?php $this->load->view("partials/footer");?>
		