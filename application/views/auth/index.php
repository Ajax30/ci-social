
<?php $this->load->view("partials/header");?>

<h2 class="h4"><?php echo lang('index_heading');?></h2>
<p><?php echo lang('index_subheading');?></p>

<div class="table-responsive">
	<table class="table table-sm table-bordered table-hover">
		<thead class="thead-light">
			<tr>
				<th class="py-2"><?php echo lang('index_fname_th');?></th>
				<th class="py-2"><?php echo lang('index_lname_th');?></th>
				<th class="py-2"><?php echo lang('index_photo_th');?></th>
				<th class="py-2"><?php echo lang('index_email_th');?></th>
				<th class="py-2"><?php echo lang('index_groups_th');?></th>
				<th class="py-2"><?php echo lang('index_status_th');?></th>
				<th class="py-2"><?php echo lang('index_action_th');?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
				<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
				<td class="text-center">
					<img src="<?php echo base_url('/assets/img/avatars/') . $user->avatar ?>" alt="<?php echo htmlspecialchars($user->first_name . ' ' . $user->first_name ,ENT_QUOTES,'UTF-8');?>" class="rounded-circle avatar">
				</td>
				<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
				<td>
					<?php foreach ($user->groups as $group):?>
						<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?>,
					<?php endforeach?>
				</td>
				<td>
					<?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?>
				</td>
				<td class="text-center align-middle">
					<a href="<?php echo base_url('auth/edit_user/'. $user->id); ?>" class="badge badge-primary p-2"><i class="fa fa-pencil-square-o"></i> Edit</a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>

<div class="mt-4">
	<?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-sm btn-info"')?>
</div>

<?php $this->load->view("partials/footer");?>