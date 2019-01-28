
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
<style>

#cont{
	height:auto;
	width:1000px;
	margin:auto;
	border:2px solid red;
	
	
}
</style>

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


$sql="SELECT * from of_product";
$result = mysqli_query($conn, $sql);

?>



<body>
<br>
<br>

<br>
<div id="cont">

 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ADD
                    <small>new Product</small>
                </h1>
               
            </div>
        </div>
		</div>
 <div class="container">
			 <div class="row">
			  <div class="col-md-1"></div>
            <div class="col-md-9">
               
               <form method="POST" action="add_product_insert.php">
			    

                   
        
                   
                   
					
					
					
					
					 
					
					 <div class="contact-grid">
                      
                            <label>Item-name:</label>
                            <select id="category" class="form-control" name="item_name">
								<optgroup>
									
									<option value="mobiles">Mobiles</option>
									<option value="laptops">Laptops</option>
										<option value="books" >Books</option>
										
										
										
				
				</optgroup>
				</select>
                        
                    </div>
					
							
					
					
					
					
					
					<div class="contact-grid">
                     
                            <label>DATE OF INITIATION:</label>
                            <input type="date" class="form-control" name="dat">
                       
                    </div>
					
					
					
					
					
					<div class="contact-grid">
                      
                            <label>Product picture:</label>
                            <input type="file" class="form-control" name="file">
                      
                    </div>
					
					<div class="contact-grid">
                      
                            <label>Product Cost:</label>
                            <input type="text" class="form-control" name="cost">
                      
                    </div>
					
					
					<div id="success"></div>
                    <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                </form>
            </div>
			 <div class="col-md-1"></div>

        </div>
        <!-- /.row -->
		
		
		
		</div>
		</div>
</body>
</html>