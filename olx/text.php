<?php	
	$server="localhost";
$user="root";
$password="";
$dbname="olx";
$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


	$from = $_POST['from'];
	$to = $_POST['to'];
	$aid =$_POST['p_id'] ; 
	//echo $_POST['msg'];
	if(isset($_POST['msg'])){
		$txt = $_POST['msg'];
		$sql = "INSERT INTO message (txt,email_from,a_id,email_to) VALUES ('$txt','$from','$aid','$to');";
		
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "error";
		}
	}
	header('location:cust_menu.php');

?>
