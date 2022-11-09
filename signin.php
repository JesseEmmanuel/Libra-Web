<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Libra - Library on a Cloud</title>

	<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./assets/css/custom.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="./assets/images/libra-favicon.png">
</head>

<body>
	<section class="vh-100">
		<div class="container-fluid h-custom">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" id="form-box">
					<form action="./functions/auth.php" method="POST">
						<!--<div
							class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
							<p class="lead fw-normal mb-0 me-3">Sign in with</p>
							<button type="button" class="btn btn-primary btn-floating mx-1" id="social-button">
								<div class="feature-icon" id="social-button">
									<svg class="bi" width="1em" height="1em">
										<use xlink:href="#facebook" /></svg>
								</div>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-twitter"></i>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-linkedin-in"></i>
							</button>
						</div>-->
						<div class="divider d-flex align-items-center my-4" id="signin-divider">
							<img src="./assets/images/Libra-footer.png" alt="">
						</div>
						<?php if (isset($_GET['message'])) { ?>

						<div class="alert alert-success text-center" role="alert"><?php echo $_GET['message']; ?></div>

						<?php } ?>
						<!-- Email input -->
						<div class="form-outline mb-4">
							<input type="text" name="uname" id="form3Example3" class="form-control form-control-md"
								placeholder="Username" />
							<p><small>
									<?php if (isset($_GET['uname_error'])) { ?>
									<?php echo $_GET['uname_error']; ?>
									<?php } ?>
								</small></p>
							<!--<label class="form-label" for="form3Example3">Email address</label>-->
						</div>

						<!-- Password input -->
						<div class="form-outline mb-3">
							<input type="password" name="password" id="form3Example4"
								class="form-control form-control-md" placeholder="Password" />
							<p><small>
									<?php if (isset($_GET['pass_error'])) { ?><?php echo $_GET['pass_error']; ?>
									<?php } ?>
								</small></p>
							<!--<label class="form-label" for="form3Example4">Password</label>-->
						</div>

						<div class="d-flex justify-content-between align-items-center">
							<!-- Checkbox -->
							<div class="form-check mb-0">
								<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
								<label class="form-check-label" for="form2Example3">
									Remember me
								</label>
							</div>
							<a href="#!" class="text-body">Forgot password?</a>
						</div>

						<div class="text-center text-lg-start mt-4 pt-2 d-grid gap-2">
							<button type="submit" class="btn btn-success btn-md"
								style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign In</button>
							<a href="index.php" class="text-center">
								<button type="button" class="btn btn-outline-success btn-sm"
									style="padding-left: 2.5rem; padding-right: 2.5rem;">Back to Homepage</button>
							</a>
							<p class="small fw-bold mt-2 pt-1 mb-0 text-center">Don't have an account? <a
									href="signup.php" class="link-success">Register</a></p>
						</div>
					</form>
				</div>
				<div class="col-md-9 col-lg-6 col-xl-5">
					<img src="./assets/images/libra-vector.png" alt="Sample image">
				</div>
			</div>
		</div>
	</section>
</body>

</html>