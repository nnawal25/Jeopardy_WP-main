<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="leaderboard.css">
    <title>Leaderboard</title>
</head>
<body>
    
    <div class="container">
        <h1 class="heading">LEADERBOARD</h1>
        <table>
            <tr>
                
                <th>TEAM</th>
                <th>SCORE</th>
            </tr>
            <tr>
                
                <td id="name1"><?php echo $_SESSION["TeamN"][0];?></td>
                <td id="score1"><?php echo $_SESSION["Teampoints"][0];?></td>
            </tr>
            <tr>
                
                <td id="name2"><?php echo $_SESSION["TeamN"][1];?></td>
                <td id="score2"><?php echo $_SESSION["Teampoints"][1];?></td>
            </tr>
            <tr>
                
                <td id="name3"><?php echo $_SESSION["TeamN"][2];?></td>
                <td id="score3"><?php echo $_SESSION["Teampoints"][2];?></td>
            </tr>
            <tr id="fourth_row">

                <td id="name3"><?php echo $_SESSION["TeamN"][3];?></td>
                <td id="score3"><?php echo $_SESSION["Teampoints"][3];?></td>
            </tr>
        </table>
    </div>

    <div class="leadbox"><a href="table.php">Back to Game</a></div>
    <div class="leadbox"><a href="teams.php">Restart Game</a></div>
</body>
</html>