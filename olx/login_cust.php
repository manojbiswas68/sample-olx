<?php
if(isset($_POST['submit']))
{
$server="localhost";
$user="root";
$password="";
$dbname="olx";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
echo'connection established';

$p1=$_POST['email'];
$p2=$_POST['password'];
$sql="SELECT * from users";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)){

if ($row['nitc_email']==$p1 && $row['pass']==$p2 ) {
    session_start();
	$_SESSION['nitc_email']=$row['nitc_email'];
	header('location:cust_menu.php');
	} else{
    $_SESSION["error"] = $error;
	$message = "wrong email/password";
    
   
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo'<a href="header.php"><b>try again.......</a>';
}
	}
		
	}
	
	
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

?>



