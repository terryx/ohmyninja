<!DOCTYPE html>
<html lang="en" ng-app="App">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Oh My</title>

	<!-- Bootstrap Core CSS -->
	<link href="components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link href="components/components-font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="styles/scrolling-nav.css" rel="stylesheet">
	<link href="styles/sign-in.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ng-controller="PublicCtrl">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Oh My Ninja</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden">
						<a class="page-scroll" href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#sign-up">Sign up</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Intro Section -->
	<section id="login" class="login-section">
		<div class="container">

			<div class="container text-center">
				<form class="form-signin" data-ember-action="2">
					<h2 class="form-signin-heading">Sign in</h2>

					<br>
					<p>
						<button class="btn btn-primary social-login-btn social-facebook" ng-click="facebookLogin()"><i class="fa fa-facebook"></i></button>
						<button class="btn btn-primary social-login-btn social-google" ng-click="googlePlusLogin()"><i class="fa fa-google-plus"></i></button>
					</p>

					<br><br>
					<input id="ember360" class="ember-view ember-text-field form-control login-input" placeholder="Email Address" type="text">
					<input id="ember361" class="ember-view ember-text-field form-control login-input-pass" placeholder="Password" type="password">

					<button class="btn btn-lg btn-primary btn-block btn-center" type="submit" data-bindattr-3="3">Sign in</button>
					<br><br/>
					<small class="create-account text-muted">Dont have a ninja or social network account? <a id="ember363" href="#sign-up" class="page-scroll ember-view btn btn-sm btn-default"> Sign Up </a> </small>
				</form>
			</div>
		</section>

		<!-- About Section -->
		<section id="about" class="about-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>About Oh...</h1>
						<h1>Task manager that provide easy bookmark and to do list</h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Services Section -->
		<section id="sign-up" class="services-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Sign Up</h1>
						<form role="form" name="form" id="sign-up-form" class="text-center">

							<div class="col-md-6 col-md-offset-3">
								<div class="form-group has-feedback"
								ng-class="{ 'has-success': form.email.$valid, 'has-error': form.email.$invalid && form.email.$dirty }">
									<input type="email" name="email" ng-model="user.email" class="form-control input-lg" placeholder="Email Address" required>
								<span class="glyphicon form-control-feedback" ng-class="{ 'glyphicon-ok': form.email.$valid, 'glyphicon-remove': form.email.$invalid && form.email.$dirty  }"></span>
								</div>
							</div>

							<div class="col-md-6 col-md-offset-3">
								<div class="form-group has-feedback" 
								ng-class="{ 'has-success': form.password.$valid, 'has-error': form.password.$invalid && form.password.$dirty }">
									<input type="password" name="password" ng-model="user.password" class="form-control input-lg" placeholder="Password" required>
									<span class="glyphicon form-control-feedback" ng-class="{ 'glyphicon-ok': form.password.$valid, 'glyphicon-remove': form.password.$invalid && form.password.$dirty  }"></span>
								</div>
							</div>
							<div class="col-md-6 col-md-offset-3"
							ng-class="{ 'has-success': form.password.$valid, 'has-error': !!form.retypePassword.$error.validator, 'has-success': form.retypePassword.$valid && !form.retypePassword.$pristine }">
								<div class="form-group has-feedback">
									<input type="password" 
									name="retypePassword" 
									ng-model="retypePassword" 
									class="form-control input-lg"
									placeholder="Retype Password"
									ui-validate="'$value==user.password'"
									ui-validate-watch="'user.password'">
									<span class="glyphicon form-control-feedback" ng-class="{ 'glyphicon-ok': form.retypePassword.$valid && form.retypePassword.$dirty, 'glyphicon-remove': form.retypePassword.$invalid && form.retypePassword.$dirty }"></span>
								</div>
							</div>

							<div class="col-md-6 col-md-offset-3">
									<button class="btn btn-primary btn-lg btn-block" ng-click="register()">Submit</button>
								</div>

						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Contact Section -->
		<section id="contact" class="contact-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Contact Section</h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Vendor JavaScript -->
		<script src="components/jquery/dist/jquery.js"></script>
		<script src="components/jquery.easing/js/jquery.easing.js"></script>
		<script src="components/bootstrap/dist/js/bootstrap.js"></script>
		<script src="components/lodash/dist/lodash.js"></script>
		<script src="components/angular/angular.js"></script>
		<script src="components/angular-route/angular-route.js"></script>
		<script src="components/restangular/dist/restangular.js"></script>
		<script src="components/angular-ui-utils/ui-utils.js"></script>
		<script src="components/ng-facebook/ngFacebook.js"></script>
		<script src="components/angular-google-plus/dist/angular-google-plus.js"></script>

		<!-- Main Script -->
		<script src="scripts/module/app.js"></script>

		<!-- Configs -->
		<script src="scripts/config/app.js"></script>
		<script src="scripts/config/facebook.js"></script>
		<script src="scripts/config/googleplus.js"></script>

		<!-- Services & Factories -->

		<!-- Controllers -->
		<script src="scripts/controller/public.js"></script>

		<div id="fb-root"></div>
	</body>

	</html>