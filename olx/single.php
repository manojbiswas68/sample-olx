

<?php
include('adv.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OLX</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

 <?php


					$id=$_GET['idx'];
					$mysqli=new mysqli('localhost','root','','olx');
					$query=$mysqli->query("select * from of_product where product_id='$id'");
					$row=$query->fetch_assoc();
					
					$t = $row['item_name'];
					$sql = "select * from ".$t." where product_id='$id';";
					$result = mysqli_query($conn,$sql);
					$row1=$result->fetch_assoc();
					
					//$query=$mysqli->query("select * from $t where product_id='$id'");
				//	$row1=$result->fetch_assoc();
			//		echo $row1['product_id'];
?>

<body>




<div class="blog">
	<div class="container">
		
		<div class="col-md-9 ">
		<!--content-->
<div class="single">
	<?php
		
		echo'<div class="single-top">
			<img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="images/'.$row['file'].'" alt="" style="height:310px;width:400px;" />
				<div class="lone-line">
				
					<h4>Category:'.$row['item_name'].'</h4>
					<h4>cost:Rs '.$row['cost'].'.00</h4>
					<h4>seller_email:'.$row['user_email'].'</h4> ';?>
					 <?php if( $t=='books'){ ?>
					<h3>Book name:<?php echo $row1['bname'] ?></h3>
					<p>Condition<?php echo $row1['cond'] ?></p>
					<p>Author:<?php echo $row1['author'] ?></p>
					 <?php }?>
					 
					  <?php if( $t=='mobiles'){ ?>
					<h3>Model name:<?php echo $row1['mname'] ?></h3>
					<p>Manufacturer:<?php echo $row1['manf'] ?></p>
					<p>year of purchase:<?php echo $row1['yop'] ?></p>
					 <?php }?>
					 
					  <?php if( $t=='laptops'){ ?>
					<h3>Model name:<?php echo $row1['mname'] ?></h3>
					<p>Manufacturer:<?php echo $row1['manf'] ?></p>
					<p>Condition:<?php echo $row1['cond'] ?></p>
					<p>Year of Purchase:<?php echo $row1['yop'] ?></p>
					 <?php }?>
						
				</div>
				<form action="text.php" method="POST">
				
				
				
								 <input type="hidden" value = "<?php echo $_SESSION['nitc_email'] ?>" name="from">
								 <input type="hidden" value = "<?php echo $row['user_email'] ?>" name="to">
								 <input type="hidden" value = "<?php echo $id ?>" name="p_id">
								<textarea name = "msg" placeholder = "message"></textarea>
								<input type="submit" value="message" name="message">
								
					
						</div>
						</form>
						
						
						<form action="del.php" method="POST">
				<input type="hidden" value = "<?php echo $row['item_name'] ?>" name="cat">
				<input type="hidden" value = "<?php echo $id ?>" name="id">
				<input type="submit" value="buy" name="message">
			</form>
		</div>
			
	
		
		
		
</div>
<!---->
<!--//content-->

		</div>
		
				

			</div>


</body>
</html>

