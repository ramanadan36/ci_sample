<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css1.css">
	<style type="text/css">

		.border
		{
			border-style: solid;
			border-color: green;
			width: 60%;
			margin-left: 20%;
			margin-top: 10%;
		}
		.register_left_margin{
			margin-left: 10%;
		}
	</style>
</head>
<body>
<div class="border">
	<div class="register_left_margin"><h1>Login Here</h1></div><br>
	<form action="<?php echo base_url().'welcome/login' ?>" method="post">
	<div class="row register_left_margin">
		 <div class="col-sm-2"><label class="control-label  for="pwd">E-Mail:</label></div>
		<div class="col-sm-6">
			<input type="email" name="email" class="form-control" placeholder="Example@gmail.com">
			<?php echo form_error('email'); ?>
		</div>
	</div>
	<br>
	<div class="row register_left_margin">
		<div class="col-sm-2"><label class="control-label  for="pwd">Password:</label></div>
		<div class="col-sm-6">
			<input type="Password" name="password" class="form-control" placeholder="Enter Your Password">
			<?php echo form_error('password'); ?>
		</div>
	</div><br>
	<div class="row register_left_margin">
		<div class="col-sm-2">
			<input type="Submit" class="btn btn-success" value="Submit">
		</div>
	</form>
		<div class="col-sm-2"><a href="<?php echo base_url().'welcome' ?>">Signup</a></div>
	</div><br>
</div>
</body>
</html>