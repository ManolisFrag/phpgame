<?php
session_start();
// Echo session variables that were set on previous page
$player = $_SESSION['currentplayer'];
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
$swapid = $_GET[sID];
//$sql = "SELECT position FROM playertable WHERE username = '{$player}'";
//$sql .= "SELECT position FROM playertable WHERE ID = '{$swapid}'";
//$sql .= 

$result = "UPDATE playertable SET position = (SELECT position from playertable WHERE username = '{$swapid}') WHERE username = '{$player}' "
	//if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
  
  $res = odbc_exec($conn, $result) or die(odbc_error());
}
$conn->close();




?>