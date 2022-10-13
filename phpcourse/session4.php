 
 <?php

 # Destroy Session

  session_start();

  session_unset();

  session_destroy();

  echo "Session destroyed";