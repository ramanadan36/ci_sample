<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<body >
<div class="border">
	<form action="loginDone.php" method="post">
		<div style="margin-left: 10%"><h1>Login Here</h1></div><br>
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
		<div class="col-sm-2"><a href="<?php echo base_url().'welcome/index' ?>">New User</a></div>
	</div><br>
	</form>
</div>

</body>
</html>