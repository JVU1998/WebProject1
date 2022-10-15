<?php
	$fh = file("questions.txt");
	$num = rand(1,count($fh));
	$index = 0;
	while ($index != count($fh)) {
		$piece = explode(",", $fh[$num-1]);

		if ($piece[0] == $num) {
			$question = $piece[1];
			$a = $piece[2];
			$b = $piece[3];
			$c = $piece[4];
			$d = $piece[5];
			$correct = $piece[6];
		}
		$index++;
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<form action="<?php $_PHP_SELF ?>" method="POST">
		<p><?= $question  ?></p>
		<div class="grid-question-container">
			<input id="field_1" class="grid-item" name="Button" value="<?= $a ?>" />
			<input id="field_2" class="grid-item" name="Button" value="<?= $b ?>" />
			<input id="field_3" class="grid-item" name="Button" value="<?= $c ?>" />
			<input id="field_4" class="grid-item" name="Button" value="<?= $d ?>" />
		</div>
		<input type="submit" />
		<?php 
			if (isset($_POST['Button']) && $_POST['Button'] == $correct) {
				echo "Answer correct";
			}	
		?>
	</form>
</body>

</html>