
<?php

  session_start();

  $_SESSION['username'] = 'colin222';
  $_SESSION['age'] = '22';

  echo "username is: " . $_SESSION['username'] . " age is: " . $_SESSION['age'];

  echo "<br>";

  echo "it's now set";