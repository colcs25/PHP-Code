 
 <?php

  # Arrays
  # Indexed

  $users = array("abc", "efg", "ijk");

  $user = ["abc", "efg", "ijk"];

  echo $users[0];

  echo "<br>";

  echo count($users);

  echo "<br>";

  echo $user[2];

  echo "<br>";

  # Associative

  $age = ['colin' => 22, 'livia' => 21, 'jane' => 34];

  echo $age['livia'];

  echo "<br>";

  foreach ($age as $key => $value) {
    echo "name : " . $key . " age : " . $value;
    echo "<br>";
  }

  echo "<br>";

  # Multidimensional

  $mutli = array(
    array('colin','livia', 'jane'),
    array('abc', 'efg', 'ijk'),
    array(22, 21, 32)
  );

  echo $mutli[2][1];

  echo "<br>";

  # Exercise

  //Create an indexed array name it arr and add values ("PHP", "ruby", "JS", "Java") and use the count method to count the number of values inside that array and don't forget to of course echo it out

  $arr = array("PHP", "ruby", "JS", "Java");
  
  echo count($arr);

  echo "<br>";

  /* Create an associative array name it  users
     first key is username and second is age
     first pair  username => "Rohan" and age  => 33
     second  pair username => "Mohamed" and age => 22 */

     $users = array('Rohan' => 33, 'Mohamed' => 22);
     echo $users['Rohan'];
