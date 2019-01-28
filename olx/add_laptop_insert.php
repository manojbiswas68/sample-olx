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




if(isset($_POST['submit']))
{

	$p1=$_POST['mname'];
	$p2=$_POST['manf'];
	$p3=$_POST['cond'];
	$p4=$_POST['yop'];
   $p5=$_POST['id'];
	
	
    $sql="INSERT INTO laptops(product_id,mname,manf,cond,yop) VALUES ('$p5','$p1','$p2','$p3','$p4')";
	
    
    
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New record created successfully!')</script>";
		
    }
	
		//header('location:new3.php');
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
	header('location:cust_menu.php');
?>