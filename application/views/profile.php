<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="<?php echo base_url (); ?>assets/js1/js1.js"></script>
<body>
</head>
<body>
<div>
    <div class="header">
	    <div class="float_right" style="margin-right: 2%;">
		    <h1>Header</h1>		
	    </div>
	    <div class="float_left">
		    <span class="open_nev" onclick="openNav()">&#9776; </span>
		    <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="<?php echo base_url().'welcome/home' ?>">Home</a>
                <a href="<?php echo base_url().'welcome/profile' ?>">Profile</a>
                <a href="<?php echo base_url().'welcome/addmoredetail' ?>">Add More Detail</a>
                <a href="<?php echo base_url().'welcome/viewregisterdetail' ?>">View Register Detail</a>
                <a href="<?php echo base_url().'welcome/viewadddetail' ?>">View Add Detail</a>
                <a href="<?php echo base_url().'welcome/logout' ?>">LogOut</a>
		    </div>
	    </div>
    </div>
</div>

<div class="main">
    <div class="row" style="margin-bottom: 5%;">
    	<div class="col-sm-6 image"></div>
    	<div class="col-sm-6" >
    	    <h4>First Name:</h4>
    	    <h4>Last Name: </h4>
            <h4>E-Mail ID: </h4>
            <h4>Mobile NO.: </h4><br>
            <div class="row">
                <div class="col-sm-3"><a href="#" class="w3-button w3-round-large">Update</a></div>
                <div class="col-sm-2"><a href="#" class="w3-button w3-round-large">Back</a></div>
            </div>
    	</div>
    </div>
</div>
</body>
</html>