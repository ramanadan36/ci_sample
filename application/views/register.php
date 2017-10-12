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
	<form action="registerDone.php" method="post">
		 <div class="row" style="margin-left: 10%">
		<div class="col-sm-2"><label class="control-label  for="pwd">First Name:</label></div>
		<div class="col-sm-6"><input type="text" name="fname" class="form-control" placeholder="Enter Your First Name"></div>
	</div><br>
	<div class="row" style="margin-left: 10%">
		<div class="col-sm-2"><label class="control-label  for="pwd">Last Name:</label></div>
		<div class="col-sm-6"><input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name"></div>
	</div>
	<br>
	<div class="row" style="margin-left: 10%">
	    <div class="col-sm-2"><label class="control-label  for="pwd">Mobile NO.:</label></div>
		<div class="col-sm-6"><input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number"></div>
	</div>
	<br>
	<div class="row" style="margin-left: 10%">
		 <div class="col-sm-2"><label class="control-label  for="pwd">E-Mail:</label></div>
		<div class="col-sm-6"><input type="email" name="email" class="form-control" placeholder="Example@gmail.com"></div>
	</div>
	<br>
	<div class="row" style="margin-left: 10%">
		<div class="col-sm-2"><label class="control-label  for="pwd">Password:</label></div>
		<div class="col-sm-6"><input type="Password" name="password" class="form-control" placeholder="Enter Your Password"></div>
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