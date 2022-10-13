
<?php

  session_start();

?>

<html>
    <head></head>
    <body>
      <h3><?php  
      echo $_SESSION['username']; 
      echo "<br>";
      echo $_SESSION['age'];
      echo "<br>";
      echo $_SESSION['favcolor'];
      ?>
    </body>
</html>