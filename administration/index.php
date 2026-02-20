<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Mehwar Consulting | Administration</title>
	<?php
	//include config
	require_once('includes/config.php');

	//check if already logged in move to home page
	if ($user->is_logged_in()) {
		header('Location: management.php');
		exit();
	}

	//process login form if submitted
	if (isset($_POST['submit'])) {

		if (!isset($_POST['user_email'])) {
			$error[] = "Please fill out all fields";
		}

		if (!isset($_POST['password'])) {
			$error[] = "Please fill out all fields";
		}

		$user_email = $_POST['user_email'];
		if ($user->isValidEmail($user_email)) {
			if (!isset($_POST['password'])) {
				$error[] = 'A password must be entered';
			}

			$password = $_POST['password'];

			if ($user->login($user_email, $password)) {
				$_SESSION['email'] = $user_email;
				header('Location: management.php');
				exit;
			} else {
				$error[] = 'Wrong Email or password.';
			}
		} else {
			$error[] = 'Email Format is not correct';
		}
	} //end if submit

	//define page title
	$title = 'Login';

	//include header template
	//require('layout/header.php'); 
	?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/pure.css">
</head>

<body>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/img/logo_menu_square.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST">
		

			<?php
			//check for any errors
			if (isset($error)) {
				foreach ($error as $error) {
					echo '<p class="bg-danger">' . $error . '</p>';
				}
			}

			if (isset($_GET['action'])) {

				//check the action
				switch ($_GET['action']) {
					case 'active':
						echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
						break;
					case 'reset':
						echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
						break;
					case 'resetAccount':
						echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
						break;
				}
			}


			?>
			<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
				<input type="email" name="user_email" id="user_email" class="form-control input_email" placeholder="Email" value="<?php if (isset($error)) {
																															echo htmlspecialchars($_POST['user_email'], ENT_QUOTES);
																														} ?>">
				</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password">
				</div>
						<!-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> -->
							<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
			</div>
		</form>
		</div>
		
		<div class="mt-4">
			<!-- <div class="d-flex justify-content-center links">
				Don't have an account? <a href="#" class="ml-2">Sign Up</a>
			</div> -->
			<div class="d-flex justify-content-center links">
			<a href="reset.php">I forgot my password</a>
			</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>