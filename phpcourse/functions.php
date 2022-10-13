
<?php
  
  # Functions

  function myFunc() {
    echo "hello";

    echo "<br>";

    $username = "web coding";

    if ($username == "web coding") {
        echo "hello, web coding";
    } else {
        echo "you are not web coding";
    }
  }

  myFunc();

  echo "<br>";

  // Functions with Arguments

  function printFullname($fname, $lname) {
    echo "First name is: $fname and Last name is: $lname";
  }

  printFullname("Colin", "Gigool");

  echo "<br>";

  # Exercise

  // simply create a function that echoes out "hello from function" name it "greeting"

  function greeting() {
    echo "hello from function";
  }
  greeting();

  echo "<br>";

  /* Write a function name it addNumbers that takes two parameters name them num1, num2 and add them inside the function and finally call it  with values of (12,44)
     of you will use echo to print them out */
  
  function addNumbers ($num1, $num2) {
    echo $num1 + $num2;
  }
  addNumbers(12,44);