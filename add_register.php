<?php
require("registersql.php");
$username = $_REQUEST['username'];
$pass = $_REQUEST['pass'];
$email = $_REQUEST['email'];
$n = $_REQUEST['n'];

$sql = "INSERT INTO register (username, pass, email, n) values";
$sql .= "('". $username ."','". $pass ."','".  $email ."','". $n ."')";

echo $sql;
if (mysqli_query($conn, $sql)){
    echo "new";

}else{
    echo "error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header("Location:succes.php");
?>