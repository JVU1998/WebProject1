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
    $user_name = $_GET["username"];
    $user_pass = $_GET["password"];
    $check = 0;


    if ($file = fopen("user-info.txt", "r")) {
        while(!feof($file)) {
            $line = fgets($file);
            $user_info = explode(";", $line);

                if (strcmp($user_name, $user_info[0]) == 0 && strcmp($user_pass, $user_info[1]) == 0) {
                    session_start();
                    $_SESSION['score'] = 0;
                    $_SESSION['won'] = False;
                    $_SESSION['username'] = $user_name;
                    $check = 1;
                ?>

                <div class="main">
<?php                    
                echo "RULES: <BR> 
                        Answer 10 questions correctly, you get 1 million dollars! <br>
                        Answer any question wrong, you will lose the game. <br> <br>" ;
                echo "Are you ready to be a millionaire, $user_info[2]?";
?>
                <br>
                <br>
                <a href="game.php"><button class="button" >Start Now!</button></a>
                
                </div>
                <br>
                <br>
                <a href="main.php"><button class="button" >Logout</button></a>
                <a href="leaderboard.php"><button class="button">LeaderBoard</button></a>
<?php
            }
        }
        fclose($file);
    }
?>

<?php
if ($check == 0) {
?>
    <div class="main">
    Invalid username or password!!!!! <br>
     <a href="main.php"><button class="button" > Please try again!</button></a>.
    </div>
<?php
}
?>

