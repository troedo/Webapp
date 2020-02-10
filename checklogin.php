<?php
    session_start();
    include("registersql.php");
    $sql = mysql_query("SELECT * FROM register WHERE usermane = $username AND pass = $pass ");
    $objQuery = mysql_query($sql);
    $objResult = mysql_fetch_array($objQuery);
    if(!$objResult)
    {
        echo "username and password Incorrect!";
    }
    else
    {   header("location:home.php");
    }
        


    

?>