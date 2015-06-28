<!DOCTYPE html>
<html>
<head>
	<title>Tune - Your Premium Music Destination</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
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
	<div class="container">
	<div class="section-header">registration</div>
	<hr>
	<form id="registration-form">
		<div class="form-group">
			<label>Your email address.</label>
			<p class="form-control-static" id="tbEmail">john.doe@example.com</p>
		</div>
		<div class="form-group">
			<label>Your name, please</label>
			<input class="form-control" placeholder="John Doe" type="text" id="tbName">
		</div>
		
		<div class="form-group">
			<label>Please enter a strong password</label>
			<input class="form-control" placeholder="Password must be atleast 6 chars in length" type="text" id="tbPassword">
		</div>
		<div class="form-group">
			<label>Please enter the password again to confirm</label>
			<input class="form-control" placeholder="Password must be atleast 6 chars in length" type="text" id="tbConfirmPassword">
		</div>
		<div class="form-group">
			<label>Your mobile number, please. We won't spam you, we promise.</label>
			<input class="form-control" placeholder="10 digits only." type="text" id="tbMobile">
		</div>
		<div class="form-group">
			<label>Sex</label><br>
			<input type="radio" id="rbSexF" value="F" name="sex">Female
			<input type="radio" id="rbSexM" value="M" name="sex">Male
			<input type="radio" id="rbSexO" value="O" name="sex">Others
		</div>
		<div class="form-group">
			<label>Choose a picture for your profile.</label>
			<input type="file" id="fuProfilePicture">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox">I have read the terms and conditions, and I agree to them.
			</label>
		</div>
		<button type="submit" class="btn btn-default" id="btnSubmit">Submit</button>
	</form>
	</div>
	<script type="text/javascript">
		var errors=[];
		
		$("#btnSubmit").click(function(e){
			e.preventDefault();
			var formdata=false;
			if(window.FormData)
				formdata=new FormData();
			var name = $("#tbName").val();
			var password = $("#tbPassword").val();
			var confirmPassword = $("#tbConfirmPassword").val();
			var email = $("tbEmail").text(); /*Email will be passed to registration page via GET*/
			var mobile = $("tbMobile").val();
			var sex = $("#registration-form input[name='sex']:checked").val();
			if(validateEmail(email) && validatePassword(password, confirmPassword) && validateMobile(mobile)){
				console.log(name, password, email, mobile, sex);
				$.ajax({
							url: "register.php",
							method: "POST",
							data: { username: name, password: password, email: email, mobile: mobile, sex: sex},
							dataType: "json",
							success:function(result){
								console.log(result);
							},
							error:function(xhr, desc, err){
								console.log(desc);
								console.log(err);
							}
					});
				});
			}
			else{
				console.log(errors);
			}
		});
				

		validatePassword = function(password, confirmPassword){
			/* Check if passwords are same */
			errors['password']={'status':0, 'message':''};
			if(password !== confirmPassword)
				errors['password']['message']="The two passwords don't match. Please enter them again.";
			else if(validatePassword(password))
				errors['password']['message']="The password you have chosen in less than 6 chars in length.";
			else{
				errors['password']['status']=1;
				return true;
			}
			return false;
		}

		/* Mobile Number should begin with a 7,8,9 and must have ten digits */
		validateMobile = function(mobile){
			email['mobile']={'status':0, 'message':''};
			var pattern = /^[7-9]\d\d\d\d\d\d\d\d\d$/
			if(pattern.test(mobile)){
				errors['mobile']['status']=1;
				return true;
			}
			else{
				errors['mobile']['status']=0;
				errors['mobile']['message']="Please enter a valid mobile number.";
			}
			return false;
		}

		validateEmail = function(email){
			/* Email to be validated */
			errors['email']={'status':1};
			return true;
		}


		
		
	</script>
</body>
</html>