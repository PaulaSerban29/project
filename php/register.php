<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$subscribe = $_POST["subscribe"];

		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "admin";

		$conn = new mysqli($serverName, $userName, $password, $dbName);
		if($conn->connect_error){
			die("Connection failed".$conn->connect_error);
		}

		$stmt = $conn->prepare("INSERT INTO emailaddress (email) VALUES (?)");
		$stmt->bind_param("s", $subscribe);
		$stmt->execute();

		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		header('Location:../index.html');







	 ?>



</body>
</html>