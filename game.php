<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>WHO WANTS TO BE A MILLIONAIRE?</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<p>
		<form action = "<?php $_PHP_SELF ?>" method = "POST">
        <p><?php echo $question  ?></p>
		<input id="field_1" type="submit" name="Button" value="<?php echo $a ?>" />
		<input id="field_2" type="submit" name="Button" value="<?php echo $b ?>" />
		<input id="field_1" type="submit" name="Button" value="<?php echo $c ?>" />
		<input id="field_2" type="submit" name="Button" value="<?php echo $d ?>" />
      </form>
		
	</p>
</body>
</html>

<?php
	$num = rand(1,2);
	$fh = fopen("questions.txt", "r");
	while($line = fgets($fh)) {
		$piece = explode(",", $line);

		if($piece[0] == $num) {
			$question = $piece[1];
			$a = $piece[2];
			$b = $piece[3];
			$c = $piece[4];
			$d = $piece[5];
			$correct = $piece[6];
		}
	}
	if ($_POST['Button'] == $correct) {
		echo "Answer correct";
	}
?>

