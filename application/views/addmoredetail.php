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
                <a href="<?php echo base_url().'welcome/resatepassword' ?>">Resat Password </a>
                <a href="<?php echo base_url().'welcome/logout' ?>">LogOut</a>
		    </div>
	    </div>
    </div>
</div>

<div class="main">
  <form action="addmoredetailDone.php" method="post">
    <div class="addmoredetail">
        <label>Nick Name: </label>
        <input type="text" name="nickname" class="form-control" placeholder="Enter Your Nick Name"><br>
        <label>Marital Status: </label>
           <br><label class="radio-inline">
           <input type="radio" name="optradio">Marrige
           </label>
           <label class="radio-inline">
           <input type="radio" name="optradio">Un Marrige
           </label><br>
           <br><label for="sel1">Gender:</label>
           <select class="form-control" id="sel1">
           <option>Select</option>
           <option>Male</option>
           <option>Female</option>
           </select><br>
           <label>Date of Birth</label>
            <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"><br>
           <label>Hobbyies:</label>
           <input type="text" name="nickname" class="form-control" placeholder="Enter Hobbyies"><br>
           <div class="row">
                <div class="col-sm-3"><button type="submit" class="btn btn-default">Submit</button></div>          
                <div class="col-sm-2"><a href="#" class="w3-button w3-round-large">Back</a></div>
            </div>
    </div>
  </form>  
</div>
</body>
</html>