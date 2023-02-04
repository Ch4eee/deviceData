<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patientrecordss";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }


   // if(!empty($_POST['weight']) && !empty($_POST['height']))
   // {
   // if ( isset( $_POST['weight']) || isset( $_POST['height']) || isset( $_POST['pulseRate']) || isset( $_POST['temperature'])) {
    	$weight = $_POST['weight'];
    	$height = $_POST['height'];
    	$pulseRate = $_POST['pulseRate'];
    	$temperature = $_POST['temperature'];
        $bmi = $_POST['bmi'];		
   //}
$sql = "UPDATE deviceData SET weight= '$weight',height= '$height',pulseRate= '$pulseRate',temperature= '$temperature', bmi= '$bmi'";

	  //  $sql = "INSERT INTO deviceData(weight, height, pulseRate, temperature)
		
	//	VALUES ('".$weight."', '".$height."', '".$pulseRate."', '".$temperature."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	//}

	$conn->close();
?>