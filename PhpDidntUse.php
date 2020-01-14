<?php
$title = "Home - Science Site"
?>
<?php $thisPage="Home"; ?>


<!DOCTYPE html>
<html>
  <?php require_once("head.php");?> 
  <?php require_once("logo.php");?>
<body> 
 
<?php require_once("navigation.php");?>

  <div class="main">
    <h1><strong>General Science</strong></h1>
  </div>

  <div id="buttons">
    <a id="compass" href="unitPlan.php">
      <img src="images/compass.jpg" width="250" height="250" alt="compass"/></a> 
    <a id="notebook" href="notebook.php" title="Click to see the notebook table of contents.">
      <img src="images/notebook.jpg" width="250" height="250" alt="notebook"/></a>
    <a id="microscope" href="/">
      <img src="images/microscope.png" width="250" height="250" alt="microscope"/></a>
    <span class="stretch"></span>
  </div>

    <?php require_once("footer.php");?> 

  </body>
  
</html>
