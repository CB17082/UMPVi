<?php

if(isset($_POST['applySticker'])) {

	$userID = $_SESSION['user_id'];
	$vehicleBrandModel = addslashes($_POST["vehicleBrandModel"]);
	$vehicleRegNum = addslashes($_POST["vehicleRegNum"]);
	$vehicleColor = addslashes($_POST["vehicleColor"]);
	$status = "NOT VERIFIED";
	$vehicleGrant = addslashes(file_get_contents($_FILES["vehicleGrant"]["tmp_name"]));

	$sql = "INSERT INTO sticker (userID,vehicleBrandModel,vehicleRegNum,vehicleColor,status,vehicleGrant) VALUES ('$userID','$vehicleBrandModel','$vehicleRegNum','$vehicleColor','$status','$vehicleGrant')";
		if (mysqli_query($conn, $sql)) 
		{
			echo '<script>alert("Successfully Applied")</script>';
		}
	}

?>