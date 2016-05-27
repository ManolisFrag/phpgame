



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
//$pos = "SELECT position FROM playertable";

//Update of the position cell into the playertable

//$updatedpos = $dienumber + $pos;


//$read = mysql_result(mysql_query("SELECT playing FROM playertable WHERE username = '{$nam}'"),1);
//echo $read;
//$getinfo ="SELECT playing FROM playertable WHERE username = '{$nam}'";
//if ($result = $mysqli->query($getinfo)) {    
  //   while ($row = $result->fetch_object()) {
    //    $read = $row->playing;
    //}
    //$result->close();
//}
//else
//{
  // echo'something went wrong.';
//}


//if($read = '1'){      		//check if he is playing
$sql = "UPDATE playertable SET position = position + $dienumber, data = '{$_POST[datasubmit]}'  WHERE username = '{$nam}'";

//$sql = "UPDATE playertable SET data = '{$_POST[databutton]}' WHERE username = '{$nam}'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


<form action="action.php" method="post">
Submit your Data <input type="text" name="datasubmit" /><br><br> 
<input type="submit" />




