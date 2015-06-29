<!DOCTYPE html>
<html>
<head>
	<title>Tune - Your Premium Music Destination</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div id="fake" style="width:100%; height:80px; background-color: black;"></div>
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" height="50px" width="50px" style="display: inline">
					<h1 style="font-family: 'Montserrat', sans-serif; display:inline; color: #23527c">tune <small>BETA</small></h1>
				</a>
			</div>

			<div class="navbar-collapse collapse">
				<form class="navbar-form navbar-right" style="padding-top: 10px">
					<div class="form-group">
						<input type="text" autofocus placeholder="Email Address (johndoe@example.com)" class="form-control">
					</div>
					<button type="submit" class="btn btn-default">Play</button>
				</form>
				<ul class="nav navbar-nav navbar-right navbar-ul">
					<li><a href="#about" id="about-link">ABOUT US</a></li>
					<li><a href="#pricing" id="pricing-link">PRICING</a></li>
					<li><a href="#contact" id="contact-link">CONTACT</a></li>
					<li><a href="#team" id="team-link">TEAM</a></li>
				</ul>
				
			</div>
		</div>
			
	</nav>
	<div class="landing slide">
		<div class="landing-img">
			<img src="images/3.jpg" height="500px" width="700px">
		</div>
		<button type="button" id="up-slider" class="btn btn-default round-button" style="position: absolute; bottom: 20px; left: 48%">
			<i class="fa fa-lg fa-angle-down"></i>
		</button>
	</div>
	<div class="about slide" id="about">
		<div class="container">
			<div class="slide-header">ABOUT US</div>
			<div class="slide-body">
			<p class="lead" style="text-align: center">tune aims to bring quality music into your lives.</p>
			<hr>
			<br>
			<div class="row">
				<div class="col-md-3 thumb">
					<img src="images/anywhere.jpg" height="200px">
				</div>
				<div class="col-md-3 thumb">
					<img src="images/unlimited.jpg" height="200px">
				</div>
				<div class="col-md-3 thumb">
					<img src="images/premium.jpg" height="200px">
				</div>
				<div class="col-md-3 thumb">
					<img src="images/simple.jpg" height="200px">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">anywhere.</p>
				</div>
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">ad-free.</p>
				</div>
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">premium.</p>
				</div>
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">simple.</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="slide image-slide">
		<img src="images/purchase.jpg" width="100%">
	</div>
	<div class="pricing slide" id="pricing">
		<div class="container">
			<div class="slide-header">PRICING</div>
			<div class="slide-body">
			<p class="lead" style="text-align: center">simplified payment options, so you can focus on your music</p>
			<hr>
			<br>
			<div class="row custom-row">
				<div class="col-md-4" style="text-align: center; font-size: 26px;">
					individual purchase
				</div>
				<div class="col-md-4 col-md-offset-4" style="text-align: center; font-size: 26px;">
					membership
				</div>
			</div>
			<div class="row custom-row">
				<div class="col-md-4" style="text-align: center; font-size: 20px;">
					buy albums individually
				</div>
				<div class="col-md-4 col-md-offset-4" style="text-align: center; font-size: 20px;">
					become a premium account holder
				</div>
			</div>
			<div class="row custom-row">
				<div class="col-md-4" style="text-align: center; font-size: 20px;">
					prices from ₹99 to ₹2499
				</div>
				<div class="col-md-4 col-md-offset-4" style="text-align: center; font-size: 20px;">
					annual membership for ₹4999 only
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="slide image-slide">
		<img src="images/contact.jpg" width="100%">
	</div>
	<div class="contact slide" id="contact">
		<div class="container">
			<div class="slide-header">GET IN TOUCH</div>
			<div class="slide-body" style="text-align: center">
			<p class="lead" style="text-align: center">let us know what you think</p>
			<hr>
			<br>
			<div style="width: 60%; display:inline-block">
			<form>
				<div class="form-group">
					<input class="form-control" placeholder="Your name, please." type="text">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="And your email address." type="text">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="3" placeholder="So what do you think? Feel free to criticize, if you feel like."></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			</div>
			<div style="width: 30%; display:inline-block; padding: 0px 50px;">
				<iframe width="300" height="200"  style="border:1px solid rgba(81, 76, 76, 0.26)"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD7I0zl-Rfn80eevI_Zq9Bbb6PDUqXAdb4&q=Techno+India+Salt+Lake+Kolkata+India"></iframe>
			</div>
			</div>
		</div>
	</div>
	<div class="slide image-slide">
		<img src="images/knowtheteam.jpg" width="100%">
	</div>
	<div class="team slide" id="team">
		<div class="container">
			<div class="slide-header">MEET THE TEAM</div>
			<div class="slide-body">
			<p class="lead" style="text-align: center">the guys behind tune. join us for a coffee sometime.</p>
			<hr>
			<br>
			<div class="row">
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	<footer>
		<p style="text-align: center">&copy; tune Inc. 2015. All rights reserved.</p>
	</footer>
	<script type="text/javascript">
	var page=$('html,body');
	$("#about-link").click(function(){
		page.animate({scrollTop:710}, '500', 'swing', function(){
			return false;
		});
	});

	$("#pricing-link").click(function(){
		page.animate({scrollTop:2010}, '500', 'swing', function(){
			return false;
		});
	});
	$("#contact-link").click(function(){
		page.animate({scrollTop:3310}, '500', 'swing', function(){
			return false;
		});
	});
	$("#team-link").click(function(){
		page.animate({scrollTop:4610}, '500', 'swing', function(){
			return false;
		});
	});
	$(".navbar-brand").click(function(){
		page.animate({scrollTop:0}, '500', 'swing', function(){
			return false;
		});
	});
	$("#up-slider").click(function(){
		page.animate({scrollTop:710}, '600', 'linear', function(){
			return false;
		});
	});
	(function(){
		setInterval(function(){
			if($(window).scrollTop()>200){
				$(".navbar").css('background', 'rgba(239, 235, 235, 0.88)');
				console.log('Change');
			}
			else{
				$(".navbar").css('background', 'white');
				console.log('Original');
			}
		});
	})();
  

	</script>
</body>
</html>