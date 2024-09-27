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
        

        ?>
            <div id="buttonbanner">
                <form method="post">
                    <button name="backbutt" type="submit" formaction="table.php"> Go Back </button>

            
                </form>
            </div>
            <div id="questioncontainer">
                <div id ="quesarea">
                    <p><?php echo $_SESSION["answer"]; ?> </p>
                



                </div>
                
        
            </div>


    <?php include 'teamamount_scores.php' ?>
    </body>
</html>