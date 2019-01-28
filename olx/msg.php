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
	$email= $_SESSION['nitc_email'];
	$sql = "SELECT * FROM  message WHERE email_to = '$email' or email_from = '$email';";
	$data = mysqli_query($conn,$sql);
	if(!$data){
		echo "error";
	}


?>
<html>
<head>
	<title>message</title>
</head>
<body>
	<a href="cust_menu.php">home///</a>
		
<form action="send.php" method="POST">
<?php
	
//	$data = "SELECT * FROM food WHERE catagory1 ='nonveg'";
	//$result =  mysqli_query($conn,$data);
	$resultcheck = mysqli_num_rows($data);
	if($resultcheck > 0){
		while($row = mysqli_fetch_assoc($data)){

?>
			 <h5>from:<?php echo $row['email_from']; ?></h5>
			 <h5>to:<?php echo $row['email_to']; ?></h5>
			 <h5>msg:<?php echo $row['txt']; ?></h5>
			 <input type = "hidden" value ="<?php echo $row['email_from']; ?> " name = "email_to" >
			 <input type = "hidden" value ="<?php echo $row['email_to']; ?>" name = "email_from" >
			 <input type = "hidden" value ="<?php echo $row['a_id']; ?>" name = "aid" >
			 <input type = "submit" value="send message">
<?php
		}
	}
	else{
		echo"error2";
	}

?>
</form>
</body>
</html>