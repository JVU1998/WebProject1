<!DOCTYPE html>
<html lang="en">
<head>
    <title>WHO WANTS TO BE A MILLIONAIRE?</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

    <h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
    <img src="./assets/logo.jpg"/>
    <br>
    <div class="main">
    <form action="signup-submit.php" method="post"> 
        <fieldset>
            <legend>Create A New Account</legend>
			<strong class="column">Name: <span>*</span></strong>
			<input name="name" type="text" size="30" required><br><br> 

            <strong class="column" >Username: <span>*</span></strong>
			<input name="username" type="text" size="30" required><br><br> 

            <strong class="column" >Password: <span>*</span></strong>
			<input name="password" type="password" size="30" required><br><br> 
			
            <div>
				<button class="button" type="submit"> Sign Up</button>
			</div>
        </fieldset>
	</form>
    <br>
    Already have a Account? <a href="main.php">  <button class="button"> Login</button></a>
</div>

 </body>
</html>