<?php
session_start();
// Echo session variables that were set on previous page
echo "You are " . $_SESSION['currentplayer'] . ".";
$dienumber = rand(1,6);
echo "The Die number is" . $dienumber;

$nam = $_SESSION['currentplayer'];


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

$sql = "UPDATE playertable SET position = position + $dienumber WHERE username = '{$nam}'";



if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//part of logic

$db_handle = mysql_connect($servername, $username, $password);
$db_found = mysql_select_db($dbname, $db_handle);

if ($db_found) {

$SQL = "SELECT position FROM playertable WHERE username='{$nam}'";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

echo "Your position is" . $db_field['position'] . "<BR>";
$_SESSION["sessionposition"] = $db_field['position'];
}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}




$conn->close();
//check the form after that..
?>

<input type="button" onclick="location.href='firstscreen.php';" value="Continue" />



