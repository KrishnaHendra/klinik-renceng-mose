<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/login/'); ?>images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-50">
				<form class="login100-form validate-form" action="<?= base_url('auth/register') ?>" method="post">
					<span class="login100-form-title p-b-33">
						Register Account
					</span>

					<?php if (validation_errors()) { ?>
						<div class="alert alert-danger">
							<?= validation_errors(); ?>
						</div>
					<?php } ?>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<!-- <?= form_error('name', '<h6 class="text text-danger text-left">', '</h6>') ?> -->

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<!-- <?= form_error('email', '<h6 class="text text-danger text-left">', '</h6>') ?> -->

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<!-- <?= form_error('password', '<h6 class="text text-danger text-left">', '</h6>') ?>** -->


					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Repeat Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<!-- <div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="<?= base_url('auth') ?>" class="txt2 hov1">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/login/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<?php if (validation_errors()) { ?>
		<script type="text/javascript">
			Swal.fire({
				title: '<strong>Gagal</strong>',
				icon: 'error',
				html: '<ul>' +
					"Something Went Wrong!" +
					'</ul>',
			});
		</script>
	<?php } ?>

</body>

</html>