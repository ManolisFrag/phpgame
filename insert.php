<?php
// Start the session
session_start();
//database credentials
$servername = "37.97.182.151";
$username = "root";
$password = "2o1s1xSV";
$dbname = "gamedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST[username];
	$_SESSION["sessionposition"] = 0;
//Instert username into playertable

$sql="INSERT INTO playertable (username)
VALUES
('$_POST[username]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$_SESSION['currentplayer'] = $name;

	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//redirect to firstscreen.php

//
header('Location: firstscreen.php');
exit;
$conn->close();
?>

