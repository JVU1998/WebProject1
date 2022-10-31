
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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Who wants to be a millionaire</title>
    <link href="main.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body>

  

    <main>
        <h2>LeaderBoard</h2>
        <table class="game-container">
            <tr class="head">
                <th>Player Name</th>
                <th>Total Score</th>
            </tr>

            


<?php
    if ($file = fopen("score-info.txt", "r")) {
        $array = array();
        while(!feof($file)) {
            $line = fgets($file);
            $array[] = $line;
        }

        $counter = 0;
        for ($x = 10; $x >= 0; $x--) {
            foreach($array as $value) {
                $user_info = explode(";", $value);
                if( isset($user_info[1]) && $counter < 5) {
                    if($user_info[1] == $x) {
                        print_r("<tr class=\"head\">");
                        print_r("<td>".$user_info[0])."</td>";
                        print_r("<td>".$user_info[1])."</td>";
                        print_r("</tr>");
                        $counter++;
                    }
                }
            }
        }

        fclose($file);
    }
?>

            

        </table>

        <div class="other-button">
            <a href="index.php"><button class="button">Logout</button></a>
        </div>
    </main>

  
</body>

</html>
