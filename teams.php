<?php
session_start();
?>

<?php
$_SESSION["TeamN"] = array("Team1", "Team2", "Team3", "Team4");
$_SESSION["Teampoints"] = array(0, 0, 0, 0);


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="wp_project.css">
    <title>Jeopardy Teams</title>
</head>
<body>
    <div class="top-rectangle">
        <input class="submit top-square" type="button" id="submit-top" value="How to" onclick="window.location.href = 'howtoplay.html';">
    </div>
    <div class="center-container">
    <form method="post" action="table.php">
        <div class="rectangle">
            <h1>JEOPARDY</h1>
            <div class="sub-rectangle">
                <select id="team-chooser" name="team-chooser">
                    <option value="2">2 Teams</option>
                    <option value="3">3 Teams</option>
                    <option value="4">4 Teams</option>
                </select>
                <input type ="submit" class="submit">
            </div>
    <form>
            <div class="links">
                <a href="https://github.com/Sophie-Bell/Jeopardy_WP.git">GitHub</a>
                <a href="https://codd.cs.gsu.edu/~sbell52/WP/PW/PW01/thanks.html">Thanks</a>
            </div>
        </div>
    </div>
    <div class="bottom-rectangle">
        <input class="submit bottom-square" type="button" id="submit-bottom" value="Menu" onclick="window.location.href = 'jeopardy.php';">
    </div>
</body>
</html>
