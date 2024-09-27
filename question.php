<?php
session_start();
?>

<html>
<head>
    <title>Answers</title>
    <link rel="stylesheet" href="question.css" />
</head>
    <body>
    <?php

    /*Get questions*/
    $questions = file("questions.txt");


    $leaderboard = file("leaderboard.txt");


    /*Find*/
    $question_line = '';
    for ($i = 0; $i <count($questions); $i++){
        $question_line = strstr($questions[$i], $_POST["index"]);

                
        if($question_line !== FALSE){
            break;
        }
    }

    if($question_line === FALSE){
        echo "Name not found";
        exit;
    
    }else{
    
        $ques_info = explode(";", $question_line);
    }

    $points = (int)$ques_info[1];
    $question = $ques_info[2];
    $answer = $ques_info[3];

    $_SESSION["answer"] = $answer;
    $_SESSION["posPoints"] = (int)$points;


    ?>
        <div id="buttonbanner">
            <form method="post">
                <button name="backbutt" type="submit" formaction="table.php"> Go Back </button>




            
                <button name="index" type="submit" value = "" formaction="answer.php">  Reveal Answer </button>
         
            </form>
        </div>
        <div id="questioncontainer">
            <div id ="quesarea">
                <p><?php echo $question; ?> </p>
            </div>
            
    
        </div>
    </body>
</html>