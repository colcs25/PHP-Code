
<!-- Exercise --> 

<!--  -->

<html>
    <head></head>
    <body>
        <form method="POST" action="exercise_superglobals.php">
            fullname: <input type="text" name="full_name">
            <br>
            <input type="submit" name="submit">
            </form>
    </body>
</html>

<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['full_name'];
    echo "Full name: $fullname";
}
?>

<?php
session_start();

$_SESSION['email'] = "webcoding123@gmail.com";
$_SESSION['username'] = "webcoding123";

echo "emial: " . $_SESSION['email'] . " username: " . $_SESSION['username'];

?>

