<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">	
	<title><?php echo $company[0]->CompanyName; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'content/img/cloud-icon.png'; ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/landing-page.css"?>">
</head>
<body>
<!-- Header -->
<header id="top" class="header">
	<div class="text-vertical-center">
		<div class="container">
			<div class="row">
				<div class="headertext col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="panel-body">
						<?php $attributes = array("id" => "loginform", "name" => "loginform");
						echo form_open("index.php/Common/Login/Login", $attributes);?>
						<div class="form-horizontal">
							<div class="form-group" align="center">
								<label class="forgetPw col-md-12"><b>Welcome to <?php echo $company[0]->CompanyName; ?> Community Portal. Please enter your Username and Password to sign in.</b></label>
							</div>
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3">
									<div class="form-group">
										<label for="Username" class="create-label col-md-3">Username</label>
										<div class="col-md-9">
											<input id="Username" name="Username" placeholder="Username" type="text" class="form-control" value="" />
											<span class="text-danger"><?php echo form_error('Username'); ?></span>
										</div>
									</div>
									<div class="form-group">
										<label for="Password" class="create-label col-md-3">Password</label>
										<div class="col-md-9">
											<input id="Password" name="Password" placeholder="Password" type="password" class="form-control" value="" />
											<span class="text-danger"><?php echo form_error('Password'); ?></span>
										</div>
									</div>
									<div class="loginForgetPw" align="left">
										<a href="<?php echo base_url()."index.php/Common/ForgetPassword/Index";?>">Forget Password</a>
									</div>
									<div align="center">
										<input type="submit" value="Submit" class="submit btn btn-submit" />
										<a href="<?php echo base_url(); ?>" style="text-align:center" class="btn btn-submit">Back</a>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-vertical-center copyright">
				<span>&copy; Advelsoft (M) Sdn Bhd [855271-W]. All Rights Reserved</span>
			</div>
		</div>
	</div>
</footer>
<?php echo $this->session->flashdata('msg'); ?>
<script src="<?php echo base_url()."scripts/plugins/jquery/jquery.min.js"?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>