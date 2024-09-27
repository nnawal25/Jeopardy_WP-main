<?php
session_start();
?>


<link rel="stylesheet" href="question.css" />




   <?php
    function setTeams($Teams,$array,$array2){

        for($i= 0; $i < $Teams; $i++){

        echo '<div class="cellgrid" style="border: solid black 3px;">';
        echo '<div >';
               echo '<div class="cellinner" id="heading">'; echo $array[$i]; echo '</div>';
               echo '<p style="font-size: 30px; background-color: white; width: 50%;">'; echo '$'; echo$array2[$i]; echo'</p>';
        echo '</div>';
        echo '</div>';

        }

    }

    $Players = $_SESSION["Teams"];
    $Teamnums = $_SESSION["TeamN"];
    $Scores = $_SESSION["Teampoints"];
    ?>


<div>

    <div class="teamscore">
      <div class="row" style="height: 160px;">



      <?php setTeams($Players,$Teamnums, $Scores); ?>


      </div>

    </div>
</div>

    