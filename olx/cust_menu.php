
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
	$val='';							
$server="localhost";
$user="root";
$password="";
$dbname="olx";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
?>


<body>
<br>
<br>

<br>
<br>
<br>
<br>
<div class="container">
<div class="col-md-12">
<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Menu</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>	
</div>		
<hr>

	<div class="container">
		
			 <div class="row">
			 
            <!-- Sidebar Column -->
			
            <div class="col-md-2">
				<form action="cust_menu.php" method="POST">
                <div class="list-group">
                    <input type="hidden" value="1" name="val">
					<input type="submit" value="Books" class="list-group-item">
				</form>
				</div>
				</div>
				<div class="col-md-2">
				<form action="cust_menu.php" method="POST">
                <div class="list-group">
                    <input type="hidden" value="2" name="val">
					<input type="submit" value="Laptops" class="list-group-item">
				</form>
				</div>
				</div>
				<div class="col-md-2">
				<form action="cust_menu.php" method="POST">
                <div class="list-group">
                    <input type="hidden" value="3" name="val">
					<input type="submit" value="Mobiles" class="list-group-item">
				</form>
				</div>
				</div>
				<div class="col-md-2">
				<form action="cust_menu.php" method="POST">
                <div class="list-group">
                    <input type="hidden" value="4" name="val">
					<input type="submit" value="High-to-Low" class="list-group-item">
				</form>
				</div>
				</div>
				<div class="col-md-2">
				<form action="cust_menu.php" method="POST">
                <div class="list-group">
                    <input type="hidden" value="5" name="val">
					<input type="submit" value="Low-to-HIgh" class="list-group-item">
				</form>
				</div>
				</div>
                   
                   
                </div>
				
          </DIV>
			
			<?php
		$P=$_SESSION['nitc_email'];	
	if(isset($_POST['val'])){		
$val = $_POST['val'];
	}
	if($val == 1 ){
		$sql = "SELECT * FROM of_product where item_name='books' and user_email <> '$P'";
		
	}
	else if($val == 2){
		$sql = "SELECT * FROM of_product where item_name='laptops' and user_email <> '$P'";
		
	}
	else if($val == 3){
		$sql = "SELECT * FROM of_product where item_name='mobiles' and user_email <> '$P'";
		
	}
	else if($val == 4){
		$sql = "SELECT * FROM of_product WHERE user_email <> '$P' order by cost desc ;";
		
	}
	else if($val == 5){
		$sql = "SELECT * FROM of_product WHERE user_email <> '$P' order by cost asc;";
		
	}
	else{
	
		$sql = "SELECT * from of_product where user_email <> '$P'";
	}

$result = mysqli_query($conn, $sql);


		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($result))
		{
			echo' <div class="col-md-3 img-portfolio">
				
					
						<a href="http://localhost/olx/single.php?idx='.$row['product_id'].'">
							<img src="images/'.$row['file'].'" alt="" class="img-responsive img-hover" style="height:200px;width:170px;">
							<div class="captn">
								<h3>'.$row['item_name'].'</h3>
								<p>RS '.$row['cost'].'.00</p>				
							</div>
						</a>						
				</div> ';
				$no++;
		}?>
						
	
	</div>
	</div>
	
</body>
</html>