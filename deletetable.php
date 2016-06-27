<?php
    // Create connection
    $con=mysqli_connect("37.97.182.151","root","2o1s1xSV","gamedb");
    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }    
	//$sql = "INSERT INTO allplayerstable SELECT * FROM playertable";
	
    $sql = "TRUNCATE TABLE playertable";
    mysqli_query($con, $sql) or die(mysqli_error());
	header('Location: gamemaster.html');
	exit;
?>