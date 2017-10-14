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
                <a href="<?php echo base_url().'welcome/online' ?>">Online</a>
                <a href="<?php echo base_url().'welcome/resatpassword' ?>">Resat Password </a>
                <a href="<?php echo base_url().'welcome/logout' ?>">LogOut</a>
		    </div>
	    </div>
    </div>
</div>

<div class="main">
    <div class="row" style="margin-bottom: 5%;">
    	<div class="col-sm-3 image"></div>
    	<div class="col-sm-9" >
    	    
    <div class="register_left_margin"><h1>Profile Details</h1></div><br>
    <form action="<?php echo base_url().'welcome' ?>" method="post">
         <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">First Name:</label></div>
        <div class="col-sm-8">
            <input type="text" name="fname" class="form-control" placeholder="Enter Your First Name">
            <?php echo form_error('fname'); ?>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Last Name:</label></div>
        <div class="col-sm-8">
            <input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name">
            <?php echo form_error('lname'); ?>
        </div>
    </div>
    <br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Mobile NO.:</label></div>
        <div class="col-sm-8">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number">
            <?php echo form_error('mobile'); ?>
        </div>
    </div>
    <br>
    <div class="row register_left_margin">
         <div class="col-sm-4"><label class="control-label  for="pwd">E-Mail:</label></div>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control" placeholder="Example@gmail.com">
            <?php echo form_error('email'); ?>
        </div>
    </div>
    <br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Nick Name:</label></div>
        <div class="col-sm-8">
            <input type="Password" name="password" class="form-control" placeholder="Enter Your NickName">
            <?php echo form_error('password'); ?>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Marital Status:</label></div><br>
        <div class="col-sm-8">
           <label class="radio-inline">
           <input type="radio" name="optradio">Marrige
           </label>
           <label class="radio-inline">
           <input type="radio" name="optradio">Un Marrige
           </label>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Gender:</label></div>
        <div class="col-sm-8">
            <select class="form-control" id="sel1">
           <option>Select</option>
           <option>Male</option>
           <option>Female</option>
           </select>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Date of Birth:</label></div>
        <div class="col-sm-8">
            <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Hobbyies:</label></div>
        <div class="col-sm-8">
            <input type="text" name="nickname" class="form-control" placeholder="Enter Hobbyies"><br>
        </div>
    </div><br>


        <div class="row register_left_margin">
                <div class="col-sm-3"><a href="#" class="w3-button w3-round-large">Update</a></div>
                <div class="col-sm-2"><a href="#" class="w3-button w3-round-large">Back</a></div>
            </div>
    	</div>
    </div>
</div>
</body>
</html>