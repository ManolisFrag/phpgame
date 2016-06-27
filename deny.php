<?php
session_start();
$servername = "37.97.182.151";
$username = "root";
$password = "2o1s1xSV";
$dbname = "gamedb";
$name4 = $_SESSION['currentplayer'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$datab = $_GET[fname];
$dbpos = $_SESSION["sessionposition"];
$extraposition = 0;
//Show to user the incentive he got
if($dbpos == 2){
		echo "You go 1 steps forward";
				$extraposition = 1;
	}else{
		if($dbpos == 4){
		echo "You got 4 steps forward";
				$extraposition = 4;
	}else{
	if($dbpos == 6){
		echo "Roll the dice again";
				$extraposition = 0;
	}else{
		if($dbpos == 7){
		echo "You got 1 steps forward";
			$extraposition = 1;
	}else{
		if($dbpos == 9){
		echo "You got 1 steps forward";
			$extraposition = 1;
	}else{
		if($dbpos == 10){
		echo "You got 1 steps forward";
			$extraposition = 1;
	}else{
		if($dbpos == 13){
		echo "You got 2 steps forward";
			$extraposition = 2;
	}else{
		if($dbpos == 14){
		echo "You got 2 steps forward";
			$extraposition = 2;
	}else{
		if($dbpos == 15){
		echo "You got 4 steps forward";
			$extraposition = 4;
	}else{
		if($dbpos == 16){
		echo "You went to tile 24. <br>Congratulations!";
			$extraposition = 8;
	}else{
		if($dbpos == 21){
		echo "You got 3 steps forward";
			$extraposition = 3;	
	}else{
		if($dbpos == 22){
		echo "You got 4 steps forward";
			$extraposition = 4;	
	}else{
		if($dbpos == 23){
		echo "You got 1 steps forward";
			$extraposition = 1;				
	}else{
		if($dbpos == 24){
		//echo "You got 4 steps forward";
			//$extraposition = 4;	
	}else{
		if($dbpos == 25){
		echo "You got 2 steps forward";
			$extraposition = 2;	
	}else{
		if($dbpos == 27){
		echo "You got 0 steps forward";
			$extraposition = 0;	
	}else{
		if($dbpos == 28){
		echo "You got 5 steps forward";
				$extraposition = 5;
	}else{
		if($dbpos == 30){
		echo "Send someone 5 steps back";
			$extraposition = 0;	
	}else{
		if($dbpos == 34){
		echo "You got 4 steps forward";
			$extraposition = 4;
	}else{
		if($dbpos == 35){
		echo "Throw the dice again";	
	}else{
		if($dbpos == 37){
		echo "Skip a turn";
			$extraposition = 0;		
	}else{
		if($dbpos == 39){
		echo "You got 1 steps forward";
			$extraposition = 1;	
	}else{
		if($dbpos == 41){
		echo "You went to tile 51. <br>Congratulations!";
			$extraposition = 10;
	}else{
		if($dbpos == 42){
		echo "You got 1 steps forward";
			$extraposition = 1;	
	}else{
		if($dbpos == 43){
		echo "You got 1 step forward";
			$extraposition = 1;	
	}else{
		if($dbpos == 44){
		echo "Send someone 3 steps back";
			$extraposition = 0;	
	}else{
		if($dbpos == 46){
		echo "Take one step back";
			$extraposition = -1;	
	}else{
		if($dbpos == 48){
		echo "You got 1 steps forward";
			$extraposition = 1;	
	}else{
		if($dbpos == 49){
		echo "You got 8 steps back";
			$extraposition = -8;	
	}else{
		if($dbpos == 53){
		echo "You got 3 steps back";
			$extraposition = -3;	
	}else{
		if($dbpos == 57){
		echo "You got 3 steps back";
			$extraposition = -3;	
	}else{
		if($dbpos == 60){
		echo "You got 5 steps back";
			$extraposition = -5;	
	}else{
		if($dbpos == 61){
		echo "You got 1 step forward";
			$extraposition = 1;
	}else{
		if($dbpos == 62){
		echo "You got 5 steps back";
			$extraposition = -5;		
	}else{
		if($dbpos > 62){
		echo "You have finished the game. <br>Congratulations!";	
	}else{
		echo "Nothing to do";
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
} 

	}}}}}
$newvalue = $dbpos + $extraposition;
//Update database with the new player position	
$sql = "UPDATE playertable SET position = $newvalue WHERE username = '{$name4}'";
//echo "Your new position is now" . $newvalue;
if ($conn->query($sql) === TRUE) {
    echo "<br> Your new position is now " . $newvalue;
	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//Redirect back to firstscreen.php
?>
<meta name="viewport" content="width=device-width, initial-scale=1.6">
<br><br> <input type="button" onclick="location.href='firstscreen.php';" value="Continue" />