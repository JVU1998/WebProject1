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
 </body>
</html>
<?php
    
        $filename = 'user-info.txt';
        $myfile = fopen($filename, "a") or die("ERROR! Unable to open file!");

        $info = $_POST["username"].";".$_POST["password"].";".$_POST["name"].";"."\n";
                
        fwrite($myfile, $info);
        
        fclose($myfile); 
?>
<div class="main">
    Welcome <?= $_POST["name"] ?>, your account created sucessfully! <br>
    <a href="main.php">
                    <button class="button">Login to start playing!</button>    
                </a>
    
</div>  
