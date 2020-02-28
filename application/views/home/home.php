<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--My Css -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Try Out Online | Knowlej.id</title>
	<style>
		.jumbotrons {
			background-color: transparent;
			margin-top: 70px;
		}
	</style>
</head>

<body>
	<div class="containers">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?= base_url();?>">Knowlej.ID</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn tombol-primary" id="signin"
								href="<?= base_url();?>index.php/home/login">Try It</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="jumbotrons" id="jumbotron">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="display-4">Try Out Online <span>Knowlej.ID</span></h1>
						<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
							attention to featured content or information.</p>
						</p>
						<a id="trynow" class="btn tombol-primary" href="<?= base_url();?>index.php/home/login" role="button">Try It Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="footer" class="footer">
				<p>All Right Reserved by <a href="<?= base_url();?>index.php/home/login">Knowlej.ID</a></p>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>
