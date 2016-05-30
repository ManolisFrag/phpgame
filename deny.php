<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
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

if($dbpos == 2){
		echo "You go 1 steps forward";
				$extraposition = 1;
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
		echo "Stay where you are";	
	}else{
		if($dbpos > 62){
		echo "You have finished the game. Congratulations!";	
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

	}
$newvalue = $dbpos + $extraposition;
	
$sql = "UPDATE playertable SET position = $newvalue WHERE username = '{$name4}'";
//echo "Your new position is now" . $newvalue;
if ($conn->query($sql) === TRUE) {
    echo "Your new position is now" . $newvalue;
	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//check the form after that..
?>

<input type="button" onclick="location.href='firstscreen.php';" value="Continue" />