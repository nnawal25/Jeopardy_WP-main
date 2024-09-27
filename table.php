<?php
session_start();

?>

<html>
<head>
<title>Questions</title>
<link rel="stylesheet" href="question.css" />

</head>
<body>
<?php

?>
        


   <div>
    <div id="maincontainer">
      <?php
      if(isset($_POST["team-chooser"])) {
         $_SESSION["Teams"] = (int)$_POST["team-chooser"];
     
     }
      
      ?>
      <div class="row" style="height: 96px;">
         <div class="cellgrid" style="border: transparent;">
            <div class="cell">
               <div class="cellinner" id="heading">CSS</div>



            </div>

         </div>
         <div class="cellgrid" style="border: transparent;">
            <div class="cell">
               <div class="cellinner" id="heading">HTML</div>



            </div>

         </div>
         <div class="cellgrid" style="border: transparent;">
            <div class="cell">
               <div class="cellinner" id="heading">Tags</div>
            </div>
         </div>
         <div class="cellgrid" style="border: transparent;">
            <div class="cell">
               <div class="cellinner" id="heading">Javascript</div>



            </div>

         </div>
         <div class="cellgrid" style="border: transparent;">
            <div class="cell">
               <div class="cellinner" id="heading">Web Programming</div>



            </div>

         </div>
         
      </div>
   <form method="post" formaction= "question.php">
      <div class="row" style="clear: both; float: left;">
         <div class="cellgrid" >
            <button name="index" type="submit" class="butt" value="11" formaction="question.php">  100 </button>
            <div class="cell">
               <div class="cellinner"></div>




            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="21" formaction="question.php">  100 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="31" formaction="question.php">  100 </button>
            <div class="cell">
               <div class="cellinner" ></div>
            </div>
         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="41" formaction="question.php">  100 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="51" formaction="question.php">  100 </button>
            <div class="cell">
               <div class="cellinner"></div>



            </div>

         </div>
         
      </div>

      <div class="row" style="clear: both; float: left;">
         <div class="cellgrid" >
            <button name="index" type="submit" class="butt" value="12" formaction="question.php">  200 </button>
            <div class="cell">
               <div class="cellinner"></div>




            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="22" formaction="question.php">  200 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="32" formaction="question.php">  200 </button>
            <div class="cell">
               <div class="cellinner" ></div>
            </div>
         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="42" formaction="question.php">  200 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="52" formaction="question.php">  200 </button>
            <div class="cell">
               <div class="cellinner"></div>



            </div>

         </div>
         
      </div>

      <div class="row" style="clear: both; float: left;">
         <div class="cellgrid" >
            <button name="index" type="submit" class="butt" value="13" formaction="question.php">  300 </button>
            <div class="cell">
               <div class="cellinner"></div>




            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="23" formaction="question.php">  300 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="33" formaction="question.php">  300 </button>
            <div class="cell">
               <div class="cellinner" ></div>
            </div>
         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="43" formaction="question.php">  300 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="53" formaction="question.php">  300 </button>
            <div class="cell">
               <div class="cellinner"></div>



            </div>

         </div>
         
      </div>

      <div class="row" style="clear: both; float: left;">
         <div class="cellgrid" >
            <button name="index" type="submit" class="butt" value="14" formaction="question.php">  400 </button>
            <div class="cell">
               <div class="cellinner"></div>




            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="24" formaction="question.php">  400 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="34" formaction="question.php">  400 </button>
            <div class="cell">
               <div class="cellinner" ></div>
            </div>
         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="44" formaction="question.php">  400 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="54" formaction="question.php">  400 </button>
            <div class="cell">
               <div class="cellinner"></div>



            </div>

         </div>
         
      </div>

      <div class="row" style="clear: both; float: left;">
         <div class="cellgrid" >
            <button name="index" type="submit" class="butt" value="15" formaction="question.php">  500 </button>
            <div class="cell">
               <div class="cellinner"></div>




            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="25" formaction="question.php">  500 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="35" formaction="question.php">  500 </button>
            <div class="cell">
               <div class="cellinner" ></div>
            </div>
         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="45" formaction="question.php">  500 </button>
            <div class="cell">
               <div class="cellinner" ></div>



            </div>

         </div>
         <div class="cellgrid" >
         <button name="index" type="submit" class="butt" value="55" formaction="question.php">  500 </button>
            <div class="cell">
               <div class="cellinner"></div>



            </div>

         </div>
         
      </div>
  
   </form>
   </div>

<?php include 'teamamount.php' ?>

<div class="leadbox"><a href="leaderboard.php">View Leaderboard</a></div>

</body>




</html>