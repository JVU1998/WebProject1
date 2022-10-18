<?php
	$fh = file("questions.txt");
	$questionIndex = $_POST["qIndex"] ?? 0;
	$maxQuestion = 10;
	$curQuestion = rand($questionIndex*2+1,$questionIndex*2+2);

	
	$curQuestionArr = explode(",", $fh[$curQuestion-1]);

	// echo(($questionIndex*2+1)." ".($questionIndex*2+2)." - ".$curQuestionArr[0]);

	$question = array(
		'question'=> $curQuestionArr[1],
		'a'=> $curQuestionArr[2],
		'b'=> $curQuestionArr[3],
		'c'=> $curQuestionArr[4],
		'd'=> $curQuestionArr[5],
		'answer'=> $curQuestionArr[6]
	);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<a href="main.php" ><button class="button" >Logout</button></a>
</head>

<body class="game-container">
<img src="./assets/logo.jpg"/>
	<?php if($questionIndex == $maxQuestion) { include('win-screen.php'); } else { ?>
	<form action="game-submit.php" method="POST">
		<h4><?= $question['question']  ?></h4>
		<div class="grid-question-container">
			<div class="grid-item">
				<input id="field_1" name="answer" type="radio" value="A" />
				<label for="field_1"><?= $question['a'] ?></label>
			</div>
			<div class="grid-item">
				<input id="field_2" name="answer" type="radio" value="B" />
				<label for="field_2"><?= $question['b'] ?></label>
			</div>
			<div class="grid-item">
				<input id="field_3" name="answer" type="radio" value="C" />
				<label for="field_3"><?= $question['c'] ?></label>
			</div>
			<div class="grid-item">
				<input id="field_4" name="answer" type="radio" value="D" />
				<label for="field_4"><?= $question['d'] ?></label>
			</div>
		</div>
		<input type="hidden" name="qIndex" value="<?= $questionIndex ?>">
		<input type="hidden" name="curQuestion" value="<?= $curQuestion ?>">
		<button class="game-submit-btn" type="submit">Final Answer</button>

		<?php } ?>
	</form>
</body>

</html>