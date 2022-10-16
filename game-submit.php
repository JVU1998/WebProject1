<?php 
    $fh = file("questions.txt");
    $curQuestion = $fh[$_POST['curQuestion']-1];
    $curQuestionArr = explode(",", $curQuestion);
    $question = array(
        'question'=> $curQuestionArr[1],
        'a'=> $curQuestionArr[2],
        'b'=> $curQuestionArr[3],
        'c'=> $curQuestionArr[4],
        'd'=> $curQuestionArr[5],
        'answer'=>$curQuestionArr[6]
    );
    function getCorrectAnswer($answer) {
        if(strcasecmp(trim($_POST['answer']),trim($answer)) == 0) {
            return true;
        } else {
            return false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WHO WANTS TO BE A MILLIONAIRE?</title>
        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
    <body class="game-container">
        <?php if(!isset($_POST['answer'])) { 
            include('game-over.php');
        } else { ?>
            <form action="game.php" method="POST">
                <h4><?= $question['question']  ?></h4>
                <div class="grid-question-container">
                    <div class="grid-item <?= strcmp($_POST['answer'],'A') ? '' : (getCorrectAnswer($question['answer']) ? 'correct-answer' : 'wrong-answer')?>">
                        <input id="field_1" name="Button" type="radio" value="A"/>
                        <label for="field_1"><span class="list-label">A. </span><?= $question['a'] ?></label>
                    </div>
                    <div class="grid-item <?= strcmp($_POST['answer'],'B') ? '' : (getCorrectAnswer($question['answer']) ? 'correct-answer' : 'wrong-answer')?>">
                        <input id="field_2" name="Button" type="radio" value="B"/>
                        <label for="field_2"><span class="list-label">B. </span><?= $question['b'] ?></label>
                    </div>
                    <div class="grid-item <?= strcmp($_POST['answer'],'C') ? '' : (getCorrectAnswer($question['answer']) ? 'correct-answer' : 'wrong-answer')?>">
                        <input id="field_3" name="Button" type="radio" value="C"/>
                        <label for="field_3"><span class="list-label">C. </span><?= $question['c'] ?></label>
                    </div>
                    <div class="grid-item <?= strcmp($_POST['answer'],'D') ? '' : (getCorrectAnswer($question['answer']) ? 'correct-answer' : 'wrong-answer')?>">
                        <input id="field_4" name="Button" type="radio" value="D"/>
                        <label for="field_4"><span class="list-label">D. </span><?= $question['d'] ?></label>
                    </div>
                </div>
                <input type="hidden" name="qIndex" value="<?= ++$_POST['qIndex'] ?>">
                <?php if(getCorrectAnswer($question['answer'])) { ?>
                    <button class="game-submit-btn" type="submit">Next</button>
                </form>
                <?php } else {?>
                </form>
                    <form action="index.php" method="GET">
                        <button class="game-submit-btn" type="submit">Game Over</button>
                    </form>
                <?php } ?>
        <?php } ?>
    </body>
</html>