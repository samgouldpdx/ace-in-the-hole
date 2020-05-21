<?php

session_start();

$v_username = "";
$v_email = "";
$v_comment = "";
$v_role = "";

// connect to db

$db = mysqli_connect('localhost','root','','ace_in_hole')

//echo "connection to MySQL was made" . PHP_EOL;

//$user_name = "root";
//$password = "";
//$database = "ace_in_hole";
//$server = "localhost";
//mysqli_connect($server, $user_name, $password);

print "Connection to the Server opened";

$query = "INSERT INTO 'contact form' (username, email, comment) VALUES ($v_username, $v_email, $v_comment)"

mysqli_query($db , $query);

?>