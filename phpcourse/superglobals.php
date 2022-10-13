
<?php

  # Super Globals
  # POST

  if(isset($_POST['submit'])) {
    $username = $_POST['username'];

    $email = $_POST['email'];
 
    echo " username is: $username and email is: $email";

    echo "<br>";
  }

  # GET
  
  if(isset($_GET['lang'])) {
    $get = $_GET['lang'];

    echo "the language is: $get";
  }

?>

<html> 

    <head></head>
    <body>
        <form method="POST" action="superglobals.php">
            username: <input type="text" name="username">
            <br>
            email: <input type="text" name="email">
            <br>
            <input type="submit" name="submit">
        </form>

        <a href="superglobals.php?lang=php">
            get link</a>
    </body>

</html>