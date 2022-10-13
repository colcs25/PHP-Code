 
 <?php
   
  # Arithmetical Operators
  # Addition

  echo 5 + 5;

  echo 4 + 2.5;

  # Subtraction

  echo 10 - 4;

  # Multiplication

  echo 3 * 4;

  # Division

  echo 9 / 3;

  echo 8 % 4;

  #Assignment Operators

  $x = 10;

  # Addition

  /*$x += 5;
  echo $x;*/

  # Subtraction

  /*$x -= 3;
  echo $x;*/

  # Multiplication
  
  /*$x *= 4;
  echo $x;*/

  # Division

  $x /= 2;

  $x = $x / 8;

  echo $x;

  # Comparison Operators

  $x = 10;
  $y = 10;

  # Equal to

  var_dump($x == $y);

  # Identical

  var_dump($x === $y);

  # Not Equal to

  var_dump($x != $y);

  # Greater Than

  var_dump($x > $y);

  # Less Than

  var_dump($x < $y);

  # Increment and Decrement Operators

  $num = 10;

  # Pre Increment

  /*echo ++$num;

  # Post Increment

  echo $num++;

  # Pre Decrement

  echo --$num;

  # Post Decrement

  echo $num--;*/

  # Exercise

  # assign a variable to a value of 9 and using the pre-increment operator increment it and echo it out  ----name the var "num"

  $num = 9;
  echo ++$num;

  # add 4.33 to 55 in a variable name it addition and then echo it out

  $addition = 4.33 + 55;
  echo $addition;

  # Create two variables name them x and y give x a value of 200 and y 300 and then use var to check whether they are equal in value or not

  $x = 200;
  $y = 300;

  var_dump($x == $y);
