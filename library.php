<!DOCTYPE html>
<html>
<head>
	<title>Tune - Your Premium Music Destination</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/jquery.sidr.min.js"></script>
</head>
<body>
	<div id="fake" style="width:100%; height:80px; background-color: white;"></div>
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" height="50px" width="50px" style="display: inline">
					<h1 style="font-family: 'Montserrat', sans-serif; display:inline; color: #23527c">tune <small>BETA</small></h1>
				</a>
			</div>

			<div class="navbar-collapse collapse" style="text-align: center">
				<form class="navbar-form" role="search" style="padding-top: 10px;">
					<div class="form-group" style="width:40%">
						<input type="text" placeholder="What would you like to hear?" class="form-control" style="width:100%!important">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
				<div class="nav navbar-nav navbar-right">
				<img src="images/user.png" height='50px' width='50px' style="float: right">	
				</div>
			</div>

		</div>
			
	</nav>
	<!--
	<div class="container no-margin">
		<div class="left-sidebar">
			<div class="left-menu">
				<ul>
					<li>recent releases</li>
					<li>hot 20</li>
					<li>
				</ul>
			</div>
		</div>
		<div class="right-sidebar"></div>
		<div class="library"></div>
	</div>
	-->
	<!--
	<div class="wrapper no-margin">
		<div id="recommendations">
			<div class="section-header row">
				<div class="col-md-12">recommendations</div>
			</div>
			<div class="section-body row">
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
				<a href="#"><img src="images/albums/1.png" class="album-thumb"></a>
			</div>
		</div>
	</div>-->
	<script type="text/javascript">
		   jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,

                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 50, 					                //Space between each slide in pixels
                $DisplayPieces: 5,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 100,                                //The offset position to park slide (this options applys only when slideshow disabled).

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var slider = new $JssorSlider$("slider", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = slider.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    slider.$ScaleWidth(Math.min(parentWidth, 800));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
</script>
		 <div id="slider" style="position: relative; top: 0px; left: 0px; width: 1200px;
        height: 200px; overflow: hidden; margin: 0 auto">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 200px;
            overflow: hidden;">
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
            <div><img u="image" src="images/albums/1.png" /></div>
        </div>
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 13 css */
            /*
            .jssora13l                  (normal)
            .jssora13r                  (normal)
            .jssora13l:hover            (normal mouseover)
            .jssora13r:hover            (normal mouseover)
            .jssora13l.jssora13ldn      (mousedown)
            .jssora13r.jssora13rdn      (mousedown)
            */
            .jssora13l, .jssora13r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 50px;
                cursor: pointer;
                background: url(images/a13.png) no-repeat;
                overflow: hidden;
            }
            .jssora13l { background-position: -10px -35px; }
            .jssora13r { background-position: -70px -35px; }
            .jssora13l:hover { background-position: -130px -35px; }
            .jssora13r:hover { background-position: -190px -35px; }
            .jssora13l.jssora13ldn { background-position: -250px -35px; }
            .jssora13r.jssora13rdn { background-position: -310px -35px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora13l" style="top: 123px; left: 30px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora13r" style="top: 123px; right: 30px;">
        </span>
    </div>

    <div id="left-sidebar" class="right-sidebar">
    	<div class="section-header">recent purchases</div>	
    	<ul>
    		<li>Unfaithful</li>
    		<li>Shake it Off</li>
    		<li>Compass</li>
    		<li>Animals</li>
    	</ul>
    </div>
    <div id="right-sidebar" style="text-align: center">
    	<img src="images/user.png" height="100px" width="100px">
    	<h3>John Doe</h3>
    	<h5>john.doe@example.com</h5>
    	<p>Purchase history</p>
    </div>
    <button id="right-menu" href="#right-menu" class="btn btn-default">Right Menu</button>
    <script type="text/javascript">
    	$(document).ready(function() {	
    		$('#right-menu').sidr({ name: 'sidr-right', side: 'right' , source: '#right-sidebar'});
    	}); 
    </script>