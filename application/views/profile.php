<?php
    // echo "<pre>";
    // print_r($user_profile);
    // exit();
?>
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
                <a href="<?php echo base_url().'welcome/online' ?>">Online</a>
                <a href="<?php echo base_url().'welcome/logout' ?>">LogOut</a>
		    </div>
	    </div>
    </div>
</div>

<div class="main">
    <div class="row" style="margin-bottom: 5%;">
    	<a href="<?php echo base_url().'welcome/profile_image' ?>"><div class="col-sm-3 image">
            <img src="<?php echo base_url().'upload/'.$user_profile[0]->image; ?>" class="image_src">   
        </div></a>
        <br/>
        <span><?php echo $user_profile[0]->image; ?></span>
    	<div class="col-sm-9" >
    	    
    <div class="register_left_margin"><h1>Profile Details</h1></div><br>
    <form action="<?php echo base_url().'welcome/update' ?>" method="post">
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">First Name:</label></div>
        <div class="col-sm-8">
            <input type="text" name="fname" class="form-control" value="<?php echo $user_profile[0]->fname ?>">
            <?php echo form_error('fname'); ?>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Last Name:</label></div>
        <div class="col-sm-8">
            <input type="text" name="lname" class="form-control" value="<?php echo $user_profile[0]->lname ?>">
            <?php echo form_error('lname'); ?>
        </div>
    </div>
    <br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Mobile NO.:</label></div>
        <div class="col-sm-8">
            <input type="text" name="mobile" class="form-control" value="<?php echo $user_profile[0]->mobile; ?>">
            <?php echo form_error('mobile'); ?>
        </div>
    </div>
    <br>
    <div class="row register_left_margin">
         <div class="col-sm-4"><label class="control-label  for="pwd">E-Mail:</label></div>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control" value="<?php echo $user_profile[0]->email ?>">
            <?php echo form_error('email'); ?>
        </div>
    </div>
    <br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Nick Name:</label></div>
        <div class="col-sm-8">
            <input type="text" name="nickname" class="form-control" value="<?php echo $user_profile[0]->nickname ?>">
            <?php echo form_error('nickname'); ?>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Marital Status:</label></div><br>
        <div class="col-sm-8">
        <?php
            if($user_profile[0]->relation == '1')
            {
                echo '<label class="radio-inline"><input type="radio" name="relation" value="1" checked>Single</label>';
                echo '<label class="radio-inline"><input type="radio" name="relation" value="2">Married</label>';
            }
            else if($user_profile[0]->relation == '2')
            {
                echo '<label class="radio-inline"><input type="radio" name="relation" value="1">Single</label>';
                echo '<label class="radio-inline"><input type="radio" name="relation" value="2" checked>Married</label>';
            } else {
                echo '<label class="radio-inline"><input type="radio" name="relation" value="1" checked>Single</label>';
                echo '<label class="radio-inline"><input type="radio" name="relation" value="2">Married</label>';
            }
        ?>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Gender:</label></div>
        <div class="col-sm-8">
        <?php
            if($user_profile[0]->gender == '1')
            {
                echo '<label class="radio-inline"><input type="radio" name="gender" value="1" checked>Male</label>';
                echo '<label class="radio-inline"><input type="radio" name="gender" value="2">Female</label>';
            }
            else if($user_profile[0]->gender == '2')
            {
                echo '<label class="radio-inline"><input type="radio" name="gender" value="1">Male</label>';
                echo '<label class="radio-inline"><input type="radio" name="gender" value="2" checked>Female</label>';
            } else {
                echo '<label class="radio-inline"><input type="radio" name="gender" value="1" checked>Male</label>';
                echo '<label class="radio-inline"><input type="radio" name="gender" value="2">Female</label>';
            }
        ?>
        </div>
    </div><br>
    <div class="row register_left_margin">
        <div class="col-sm-4"><label class="control-label  for="pwd">Hobbies:</label></div>
        <div class="col-sm-8">
            <input type="text" name="hobbies" class="form-control" value="<?php echo $user_profile[0]->hobbies ?>"><br>
        </div>
    </div><br>

    <div class="row register_left_margin">
        <button type="submit" class="w3-button w3-round-large">Update</button>
    </div>
    </form>
    	</div>
    </div>
</div>
</body>
</html>