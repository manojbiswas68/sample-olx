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
	$from = $_POST['email_from'];
	$to = $_POST['email_to'];
	$aid = $_POST['aid']; 
echo $from;
echo $to;
echo $aid;

?>
<html>
<head>
	<title>message</title>
</head>
<body>
<form action="drop.php" method="POST">
	<textarea name = "msg" placeholder = "message"></textarea>
	<input type = "hidden" value ="<?php echo $from; ?>" name = "email_from" >
	 <input type = "hidden" value ="<?php echo $to; ?> " name = "email_to" >
	  <input type = "hidden" value ="<?php echo $aid; ?>" name = "aid" >
	<input type="submit" value="submit">
</form>
</body>
</html>