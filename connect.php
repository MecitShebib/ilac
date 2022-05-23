<?php
	$ilac = $_POST[ilac];
	$karekod = $_POST[karekod];
	
	$conn = new mysqli('localhost','root','','test');
	if ($conn->connect_error) {
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into registration(ilac, karekod) values(?,?)");
		$stmt->bind_param("ss",$ilac, $karekod);
		$stmt->execute();
		echo "registration successfully";
		$stmt->close();
		$conn->closw();
	}

?>