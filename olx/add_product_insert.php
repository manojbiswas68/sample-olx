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



$p5=$_SESSION['nitc_email'];
if(isset($_POST['submit']))
{

	$p1=$_POST['item_name'];
	$p2=$_POST['dat'];
	$p3=$_POST['file'];
	$p4=$_POST['cost'];
   
	
	
    $sql="INSERT INTO of_product(item_name,doi,file,cost,user_email) VALUES ('$p1','$p2','$p3','$p4','$p5')";
	
    
    
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New record created successfully!')</script>";
		$mysqli=new mysqli('localhost','root','','olx');
		$query=$mysqli->query("Select product_id from of_product where item_name='$p1' and doi='$p2' and file='$p3' and cost='$p4'");
					$row=$query->fetch_assoc();
		$t=$row['product_id'];
    }
	if($p1=='books')
		header('location:http://localhost/olx/books_insert.php?idx='.$t.'');
	else if($p1=='laptops')
		header('location:http://localhost/olx/laptops_insert.php?idx='.$t.'');
	else
		header('location:http://localhost/olx/mobile_insert.php?idx='.$t.'');
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
	
?>