<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
	<link rel="stylesheet" href="frontend/css/login/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="frontend/css/login/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
	<div class="background">
		<div class="header-w3l">
			<h1 style="padding: 40px; margin:0">Login Lighting</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
			<!--form-stars-here-->
			<div class="wthree-form">
				<h2>Fill out the form below to login</h2>
				@if(isset($alert))
					<section class="alert alert-danger">{{$alert}}</section>
				@endif
				<form method="post">
					@csrf
					<div class="form-sub-w3">
						<input type="text" name="email" placeholder="Email " required="" />
						<div class="icon-w3">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</div>
					<div class="form-sub-w3">
						<input type="password" name="password" placeholder="Password" required="" />
						<div class="icon-w3">
							<i class="fa fa-unlock-alt" aria-hidden="true"></i>
						</div>
					</div>
					<label class="anim">
						<span></span> 
						<a href="#">Forgot Password</a>
					</label> 
					<label class="anim" style="float: left;">
						<span></span> 
						<a href="#">Registration</a>
					</label>
					<div class="clear"></div>
					<div class="submit-agileits">
						<input type="submit" value="Login">
					</div>
				</form>

			</div>
			<!--//form-ends-here-->

		</div>
	</div>
</body>
</html>