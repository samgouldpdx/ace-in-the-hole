<?php


//if(isset($_POST['go'])){ // button name

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ace_in_hole";
//

$users_name = $_POST['name'];
$users_email = $_POST['email'];
//$users_website = $_POST['website'];
$users_comment = $_POST['comment'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql ="
//  INSERT INTO `instruct_contactform`.`contact` (`id`, `name`, `email`, `website`,
//        `comment`, `time_stamp`) VALUES (NULL, '$users_name',
//        '$users_email', '$users_website', '$users_comment',
//        CURRENT_TIMESTAMP);";

$sql = "INSERT INTO 'contact_form' (username, email, comment) VALUES ($users_name, $users_email, $users_comment);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//}

?>

