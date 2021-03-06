<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="signupcss/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign Up</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 d-flex img" style="background-image: url(signupcss/images/bg.jpg);">
							<div class="text w-100">
								<h2 class="mb-4">Welcome to signup form</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="row justify-content-center py-md-5">
			      		<div class="col-lg-9">
			      			<div class="social-wrap">
				      			<h3 class="mb-3 text-center">Signup with this services</h3>
				      			<p class="social-media d-flex justify-content-center">
				      				<a href="#" class="social-icon google d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
											<a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
										</p>
										<p class="or">
				          		<span>or</span>
				          	</p>
			          	</div>
									<form class="signup-form" method="GET" action="{{ route('register') }}" >
									@csrf	
									@method("POST")
                                    <div class="row">
											<div class="col-md-6">
												<div class="form-group">
							      			<label class="label" for="Full_Name" :value="__('Full_Name')">Full Name</label>
							      			<input type="text" name="Full_Name" class="form-control">
							      		</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
							      			<label class="label" for="Username" :value="__('Username')">Username</label>
							      			<input type="text" name="Username "class="form-control">
							      		</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
							      			<label class="label" for="email" :value="__('Email')">Email Address</label>
							      			<input type="text" name="email" class="form-control">
							      		</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
						            	<label class="label" for="password" :value="__('Password')">Password</label>
						              <input type="password" name="password" class="form-control">
						            </div>
                                    <br>
                                    <div class="col-md-12">
												<div class="form-group">
						            	<label class="label" for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
						              <input type="password" name="password_confirmation" class="form-control">
						            </div>
											</div>
											<div class="col-md-12 my-4">
												<div class="form-group">
						            	<div class="w-100">
							            	<label class="checkbox-wrap checkbox-primary">I agree all statements in terms of service
														  <input type="checkbox" checked>
														  <span class="checkmark"></span>
														</label>
													</div>
						            </div>
											</div>
											<div class="col-md-12" >
												<div class="form-group">
						            	<button type="submit" class="btn btn-primary submit p-3" href="{{ route('login') }}">{{ __('Register') }}</button>
						            </div>
											</div>
										</div>

				          </form>
				          <div class="w-100">
										<p class="mt-4">I'm already a member! <a href="{{ route('login') }}">Sign In</a></p>
				          </div>
			      		</div>
			      	</div>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="signupcss/js/jquery.min.js"></script>
  <script src="signupcss/js/popper.js"></script>
  <script src="signupcss/js/bootstrap.min.js"></script>
  <script src="signupcss/js/main.js"></script>

	</body>
</html>








