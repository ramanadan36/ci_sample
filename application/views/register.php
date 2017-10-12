<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">

		.border
		{
			border-style: solid;
			border-color: green;
			width: 60%;
			margin-left: 20%;
			margin-top: 10%;
		}
	</style>
</head>
<body>
<div class="border">
	<div style="margin-left: 10%"><h1>Register Here</h1></div><br>
	<form action="<?php echo base_url().'welcome' ?>" method="post">
		 <div class="row" style="margin-left: 10%">
		<div class="col-sm-2"><label class="control-label  for="pwd">First Name:</label></div>
		<div class="col-sm-6">
			<input type="text" name="fname" class="form-control" placeholder="Enter Your First Name">
			<?php echo form_error('fname'); ?>
		</div>
	</div><br>
	<div class="row" style="margin-left: 10%">
		<div class="col-sm-2"><label class="control-label  for="pwd">Last Name:</label></div>
		<div class="col-sm-6">
			<input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name">
			<?php echo form_error('lname'); ?>
		</div>
	</div>
	<br>
	<div class="row" style="margin-left: 10%">
	    <div class="col-sm-2"><label class="control-label  for="pwd">Mobile NO.:</label></div>
		<div class="col-sm-6">
			<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number">
			<?php echo form_error('mobile'); ?>
		</div>
	</div>
	<br>
	<div class="row" style="margin-left: 10%">
		 <div class="col-sm-2"><label class="control-label  for="pwd">E-Mail:</label></div>
		<div class="col-sm-6">
			<input type="email" name="email" class="form-control" placeholder="Example@gmail.com">
			<?php echo form_error('email'); ?>
		</div>
	</div>
	<br>
	<div class="row" style="margin-left: 10%">
		<div class="col-sm-2"><label class="control-label  for="pwd">Password:</label></div>
		<div class="col-sm-6">
			<input type="Password" name="password" class="form-control" placeholder="Enter Your Password">
			<?php echo form_error('password'); ?>
		</div>
	</div><br>
	<div class="row" style="margin-left: 10%">
		<div class="col-sm-2">
			<input type="Submit" class="btn btn-success" value="Submit">
		</div>
	</form>
		<div class="col-sm-2"><a href="<?php echo base_url().'welcome/login' ?>">Login</a></div>
	</div><br>
</div>
</body>
</html>