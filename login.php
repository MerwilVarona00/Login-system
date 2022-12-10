<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			
            <hr class="mb-3">
			<input type="text" placeholder="Username" />
			<input type="email" placeholder="Email Address" />
			<input type="password" placeholder="Password" />
            <input type="password" placeholder="Confirm Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in to TecHub</h1>
			
            <hr class="mb-3">
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome TecHub!</h1>
				<p>Let's begin the adventure!</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Don't have account?</h1>
				<p>Sign up and create your account now!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="./js/script.js"></script>

</body>
</html>