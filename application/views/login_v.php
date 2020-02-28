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
</head>

<body>
	<div class="containers">
		<div class="form-box">
            <div class="button-box">
                <a href="" class="toggle-button" id="toggle-login">Log In</a>
                <a href="" class="toggle-button" id="toggle-register">Sign Up</a>
            </div>
				<?php if($this->session->flashdata('error')):?>
				<div class="flash">
					<?php echo $this->session->flashdata('error');?>
				</div>
				<?php endif;?>
            <form id="login" action="verifyuser/2" method="POST" class="input-group">
                <input type="text" name="username" class="input-field" placeholder="User ID" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span class="check-span">Remember Me</span>
                <button type="submit" class="submit-button">Login</button>
            </form>
            <form id="register" action="verifyuser/1" method="POST" class="input-group hidden">
                <input type="text" name="username"class="input-field" placeholder="User ID" required>
                <input type="email" name="email" class="input-field" placeholder="Email ID" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span class="check-span">I agree to terms & conditions</span>
                <button type="submit" class="submit-button">Register</button>
			</form>
			<p>Knowlej.ID</p>
        </div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="<?= base_url();?>assets/js/home.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>
