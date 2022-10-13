
<?php

  # Date
  
  echo date('d');
  echo '<br>';
  echo date('m');
  echo '<br>';
  echo date('Y');
  echo '<br>';
  echo date('l');
  echo '<br>';
  echo date('d-m-Y-l');

  echo '<br>';

  # Time

  date_default_timezone_set('Asia/Kolkata');
  echo date_default_timezone_get();
  //date_default_timezone_set('America/New_York'); # Exercise
  //echo date_default_timezone_get();

  echo '<br>';
  echo date('H');
  echo '<br>';
  echo date('h');
  echo '<br>';
  echo date('i');
  echo '<br>';
  echo date('s');
  echo '<br>';
  echo date('a');
  echo '<br>';
  echo date('H-h-i-s-a');
  echo '<br>';
  echo date('d-m-Y-l  H-h-i-s-a');


