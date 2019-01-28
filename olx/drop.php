<?php	
	session_start();
$server="localhost";
$user="root";
$password="";
$dbname="olx";
$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


	if(isset($_POST['msg'])){
		$from = $_POST['email_from'];
		echo $from;
		$to = $_POST['email_to'];
		echo $to;
		$aid = $_POST['aid']; 
		echo $aid;
		$txt = $_POST['msg'];
		echo $txt;
		$sql = "INSERT INTO message (txt,email_from,a_id,email_to) VALUES ('$txt','$from','$aid','$to');";
		
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "error";
		}
	}
header('location:msg.php');
?>
