<!DOCTYPE html>
<html>
<head>
	<?= view('meta') ?>
	<title>Login <?= $sitename ?></title>
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets/install/favicon.ico"/>

	<!-- Bootsrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<!-- /Bootsrap -->
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap-icons/font/bootstrap-icons.css">
	<!-- /Bootstrap Icon -->
</head>
<style type="text/css">
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
</style>
<body class="bg-light text-center">
	<main class="form-signin bg-white rounded border shadow-sm">
		<form>
			<img class="mb-4" src="<?= base_url() ?>/assets/install/logo.png" alt="" width="72">
			<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
			<label for="inputEmail" class="visually-hidden">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="visually-hidden">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
		</form>
	</main>
</body>

<!-- Bootsrap -->
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- /Bootsrap -->
</html>