
<?php $this->load->view("partials/header");?>

<div class="row">
  <div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
    <div class="card bg-white shadow-sm">
      <h5 class="card-header text-secondary">
        <?php echo lang('create_user_heading');?>      
      </h5>
      <div class="card-body bg-white">
        <?php if ($message): ?>
          <div id="infoMessage" class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $message;?>
          </div>
        <?php endif ?>

        <p class="d-none"><?php echo lang('create_user_subheading');?></p>

        <?php echo form_open_multipart("auth/create_user");?>

        <div class="form-group">
          <?php $first_name['class'] = 'form-control';
          echo lang('create_user_fname_label', 'first_name');
          echo form_input($first_name);?>
        </div>

        <div class="form-group">
          <?php $last_name['class'] = 'form-control';
          echo lang('create_user_lname_label', 'last_name');
          echo form_input($last_name);?>
        </div>

        <div class="form-group">
          <?php $avatar['class'] = 'form-control';
          echo lang('edit_user_avatar_label', 'avatar');?>
          <input type="file" class="form-control" name="userfile" id="avatar" size="20">
        </div>

        <?php
        if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
        }
        ?>

        <div class="form-group">
          <?php $company['class'] = 'form-control';
          echo lang('create_user_company_label', 'company');
          echo form_input($company);?>
        </div>

        <div class="form-group">
          <?php $email['class'] = 'form-control';
          echo lang('create_user_email_label', 'email');
          echo form_input($email);?>
        </div>

        <div class="form-group">
          <?php $phone['class'] = 'form-control';
          echo lang('create_user_phone_label', 'phone');
          echo form_input($phone);?>
        </div>

        <div class="form-group">
          <?php $password['class'] = 'form-control';
          echo lang('create_user_password_label', 'password');
          echo form_input($password);?>
        </div>

        <div class="form-group">
          <?php $password_confirm['class'] = 'form-control';
          echo lang('create_user_password_confirm_label', 'password_confirm');
          echo form_input($password_confirm);?>
        </div>


        <div class="form-group">
          <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>        
        </div>

        <?php echo form_close();?>

        <p class="text-center mb-0">Already have an account? 
          <a href="<?php echo base_url('auth/login'); ?>">
            <?php echo lang('login_heading');?>              
          </a>
        </p>

      </div>
    </div>
  </div>
</div>

<?php $this->load->view("partials/footer");?>
