
<?php

  # Statements
  # If Elseif Else

  $age = 12;

  # If

  /*if ($age == 12) {
    echo "Not allowed";
  }*/

  # If Else

  /*if ($age == 12) {
    echo "Not allowed";
  } else {
    echo "Allowed";
  }*/

  # Elseif 

  /*if ($age == 12) {
    echo "Not allowed";
  } elseif ($age == 18) {
    echo "You're 18 and allowed";
  } else {
    echo "Allowed";
  }*/

  # Switch

  $favcolor = "blue";

  switch ($favcolor) {
    case "black":
        echo "Fav color is Black";
        break;
    
    case "blue":
        echo "Fav color is Blue";
        break;

    default:
        echo "you like another color";

  }

  # Exercise

  # give a variable a value of "web coding" name it username and using if else only check it if it is right or wrong in if block echo "you are in now to homepage" in else block echo "wrong username"

  $username = "web coding";

  if ($username == "web coding") {
      echo "you are in now to homepage";
  } else {
      echo "wrong username";
  }
   
  /* create a variable name it favDay give it a value of "Mon" and then write a switch to check for the value
     the first case is "Mon"
     action echo this out "Mon that is my fav day"
     and they break
     the second case is "Wen"
     action echo out "Wen that is my fav day"
     and then break
     the third case is "Sat"
     action echo out "Sat that is my fav day"
     and then break
     the fourth is default 
     action echo out "I don't have a fa day" */

  $favDay = "Mon";

  switch ($favDay) {
    case "Mon":
        echo "Mon that is my fav day";
        break;
    
    case "Wen":
        echo "Wen that is my fav day";
        break;
        
    case "Sat":
        echo "Sat that is my fav day";
        break;
    
    default:
        echo "I don't have a fav day";
        break;
    }