<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ace_in_hole";

$conn = new mysqli("localhost" ,'username' ,'password');
$conn->select_db($ace_in_hole);

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$conn->query("INSERT INTO contact_form (name, email, comment,) values ('$name' ,'$email' ,'$comment');");

echo "thanks for contacting us!";
?>
