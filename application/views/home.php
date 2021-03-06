<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css1.css">
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
                <a href="<?php echo base_url().'welcome/online' ?>">Online</a>
                <a href="<?php echo base_url().'welcome/logout' ?>">LogOut</a>
		    </div>
	    </div>
    </div>
</div>

<div class="main">
    <div class="row">
    	<div class="col-sm-6 image">
         <img src="<?php echo base_url().'upload/'.$user_data[0]->image; ?>" class="image_src">   
        </div>
    	<div class="col-sm-6" >
    	    <h2>Welcome</h2>
    	    <h4>User Mail-ID: <?php echo $user_data[0]->email; ?></h4>
    	    <h4>User Name: <?php echo $user_data[0]->fname." ".$user_data[0]->lname; ?></h4>
    	</div>
    </div>
</div>
</body>
</html>