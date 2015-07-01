<?php
	$admin = false;
	if($_POST['password']==="open")
		$admin=true;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<title></title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


	<script type="text/javascript" src="js/jquery.sidr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css">
	<link rel="stylesheet" type="text/css" href="css/sidr.dark.custom.css">

		<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css">

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div style="height:80px; width: 100%"></div>
	 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container no-margin" style="width:100%">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
					<img src="images/logo.png" height="50px" width="50px" style="display: inline">
					<h1 style="font-family: 'Montserrat', sans-serif; display:inline; color: #23527c">tune <small>BETA</small></h1>
		  </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="nav navbar-right" style="padding-top: 10px; width:50%">
          	<h3 class="navbar-text">Admin Panel</h3>
          </div>
         
        </div>
      </div>
    </nav>
    <?php if(!admin): ?>
    <div id="admin-login" class="container admin-login">
    <div class="user-card" style="text-align: center">
    	<form method="POST" action="admin.php">
    	<div class="form-group">
    		<input class="form-control" placeholder="Please enter the passcode to continue." name="password" type="password">
    		</div>
    		<br>
    		<button type="submit" class="btn btn-default">Login</button>
    	</form>
    </div>
    </div>
<?php endif; ?>
    <!--Navigation Ends-->
    <?php if($admin): ?>
    <div style="padding:20px">
    	<div style="width:30%">
    	<ul class="nav nav-pills nav-stacked">
    	<li role="presentation"><a data-toggle="collapse" role="button" href="#users-group" aria-expanded="false" aria-controls="users-group">Users</a></li>
	    	<div class="collapse well" id="users-group">
	    	<ul>
	    		<li><a href="#" class="nav nav-pills nav-stacked">View All</a></li>
	    		<li><a href="#" class="nav nav-pills nav-stacked">Add user</a></li>
	    		<li><a href="#" class="nav nav-pills nav-stacked">Delete user</a></li>
	    		<li><a href="#" class="nav nav-pills nav-stacked">Modify user</a></li>
	    	</ul>
	    	</div>
    	<li role="presentation"><a  data-toggle="collapse" role="button" href="#songs-group" aria-expanded="false" aria-controls="songs-group">Songs</a></li>
       	
	    	<div class="collapse well" id="songs-group">
	    	<ul>
	    		<li><a href="#" class="nav nav-pills nav-stacked">View All</a></li>
	    		<li><a href="#" class="nav nav-pills nav-stacked">Add song</a></li>
	    		<li><a href="#" class="nav nav-pills nav-stacked">Delete song</a></li>
	    		<li><a href="#" class="nav nav-pills nav-stacked">Modify song</a></li>
	    	</ul>
	    	</div>
    	</ul>
    	</div>
    </div>
<?php endif; ?>
</body>
</html>