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
        <div class="col-sm-12">
            <div class="col-sm-12">
                <h1>User Online</h1>
            </div>
            <?php
                foreach($user_online as $user):
            ?>
            <div class="col-sm-9">
                <span>
                    <?=
                        $user->fname.' '.$user->lname;
                    ?>
                </span>
            </div>
            <div class="col-sm-3">
                <?php
                    if($user->status == '0'){
                        echo '<div style="height: 8px;width:8px;background-color: red;margin-top: 4px;"></div>';
                    } else {
                        echo '<div style="height: 8px;width:8px;background-color: green;margin-top: 4px;"></div>';
                    }
                ?>
            </div>
            <?php
                endforeach;
            ?>
        </div>
    </div>
</div>
</body>
</html>