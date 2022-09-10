<!doctype html>
<html lang="en">

<head>
	<title>Hijab </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{url('public/assets1')}}/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(public/assets1/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">kita</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						@include('template.utils.notif')
						<form action="{{ url('login') }}" method="post">
							@csrf
							<div class="form-group">
								<label for="">email address *</label>
								<input type="text" class="form-control" placeholder="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="singin-password-2">Password *</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{url('public/assets1')}}/js/jquery.min.js"></script>
	<script src="{{url('public/assets1')}}/js/popper.js"></script>
	<script src="{{url('public/assets1')}}/js/bootstrap.min.js"></script>
	<script src="{{url('public/assets1')}}/js/main.js"></script>

</body>

</html>