<?php	
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpass = "manoj";
	$dbname = "olx2";

	$conn = mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
	if(!$conn){
		echo "connction not stablish";
	}
	$from = "jitu@gmail.com";
	$to = "sashi@gmail.com";
	$aid = 5; 
	//echo $_POST['msg'];
	if(isset($_POST['msg'])){
		$txt = $_POST['msg'];
		$sql = "INSERT INTO message (txt,email_from,a_id,email_to) VALUES ('$txt','$from','$aid','$to');";
		
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "error";
		}
	}

?>
<html>
<head>
	<title>message</title>
</head>
<body>
<form action="text.php" method="POST">
	<textarea name = "msg" placeholder = "message"></textarea>
	
	<input type="submit" value="submit">
</form>
</body>
</html>