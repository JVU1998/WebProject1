 <!DOCTYPE html>
<html lang="en">
<head>
    <title>WHO WANTS TO BE A MILLIONAIRE?</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

    <h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
    <img src="./assets/logo.jpg"/>

<div class="main">
    <form action="login-submit.php" method="get">
            <h3> Login here to Play! </h3>
            <label for="username"> Username</label>
            <input type="text" name="username" maxlength="20" required><br><br>

            <label for="password"> Password</label>
            <input type="password" name="password" maxlength="20" required><br><br>

            <div>
				<button class="button" type="submit" >Log In</button>
			</div>
    </form>
</div>
<br>

                <a href="signup.php">
                    <button id="sign-up-button" class="button">Sign up for a new account</button>    
                </a>

</body>
</html>