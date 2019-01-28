<?php


$dbservername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "olx";

$conn = mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
if(!$conn){
	echo "connction not stablish";
}
$aid = $_POST['id'];
$catagory = $_POST['cat'];

echo $aid;
echo $catagory;
$sql = "DELETE FROM of_product where product_id = '$aid';";
$result = mysqli_query($conn,$sql);
if(!$result){
	echo "fail";
}
else{
	echo "done";
}

$sql = "DELETE FROM ".$catagory." where product_id = '$aid';";
$result = mysqli_query($conn,$sql);
if(!$result){
	echo "fail";
}
else{
	echo "done";
}
//header("Location: ../cust_menu.php#");
header('location:cust_menu.php');
?>

