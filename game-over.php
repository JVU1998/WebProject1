
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	
</head>
<body></body>

<form action="index.php">
    <div class="grid-question-container game-over">
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
	<h2> Game Over! </h2>
        <button class="button"  type="submit">Logout</button>
    </div>
</form>