<?php	
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpass = "manoj";
	$dbname = "olx2";

	$conn = mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
	if(!$conn){
		echo "connction not stablish";
	}

	if(isset($_POST['msg'])){
		$from = $_POST['email_from'];
		$to = $_POST['email_to'];
		$aid = $_POST['aid']; 
		$txt = $_POST['msg'];
		$sql = "INSERT INTO message (txt,email_from,a_id,email_to) VALUES ('$txt','$from','$aid','$to');";
		
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "error";
		}
	}

?>
