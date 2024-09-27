<?php
session_start();
?>

<html>
<link rel="stylesheet" href="question.css" />
<body>
<?php   

if(isset($_POST["Team1"])) {
    $_POST["Team1"] = $_SESSION["Teampoints"][0];
    $_POST["Team1"] = $_POST["Team1"] - $_SESSION["posPoints"];
    $_SESSION["Teampoints"][0] = $_POST["Team1"];

}

if(isset($_POST["Team2"])) {
    $_POST["Team2"] = $_SESSION["Teampoints"][1];
    $_POST["Team2"] = $_POST["Team2"] - $_SESSION["posPoints"];
    $_SESSION["Teampoints"][1] = $_POST["Team2"];

}

if(isset($_POST["Team3"])) {
    $_POST["Team3"] = $_SESSION["Teampoints"][2];
    $_POST["Team3"] = $_POST["Team3"] - $_SESSION["posPoints"];
    $_SESSION["Teampoints"][2] = $_POST["Team3"]; 

}

if(isset($_POST["Team4"])) {
    $_POST["Team4"] = $_SESSION["Teampoints"][3];
    $_POST["Team4"] = $_POST["Team4"] - $_SESSION["posPoints"];
    $_SESSION["Teampoints"][3] = $_POST["Team4"]; 

}

?>

<div id="buttonbanner">
            <form method="post">
                <button name="backbutt" type="submit" formaction="table.php"> Go Back </button>
         
            </form>
        </div>
        <div id="questioncontainer">
            <div id ="quesarea">

                <p> Has Lost </p>
                <p><?php echo $_SESSION["posPoints"]; ?> Dollars </p>
                

            </div>
            
    
        </div>

</body>


</html>




