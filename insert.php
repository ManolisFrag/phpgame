<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully dude";
//$sql = "SELECT ID, username, points FROM playertable";
//$result = $conn->query($sql);
//$r = rand(0,100);
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
//redirect to action.php

//
header('Location: firstscreen.php');
exit;
$conn->close();
?>

