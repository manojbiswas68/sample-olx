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
.nav{
list-style:none;


}

.nav li a{
text-decoration:none;
font-weight:bold;
color:#1A1818;

}


.nav li a:hover{
color:#E74C3C;
border-bottom:2px solid #E74C3C;
transition:all 0.1s ease-in;
}


header.carousel{
height:500px;
width:auto;
border-radius:30px;

overflow:hidden;

}

#mycarousel{
height:900px	;
}

.fill{
border-radius:50px;
z-index=-1;

}

div#carousel {
    position:relative;
}

div.form-group {
    position:absolute;
    z-index:9999999;
    top:300px; /* change to whatever you want */
    left:auto; /* change to whatever you want */
    right:auto; /* change to whatever you want */
    bottom:auto; /* change to whatever you want */
	
}




</style>

<body> 

    <!-- Navigation -->
     <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
		
            <div class="col-md-1"></div>
			<div class="col-md-9">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigaation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 
              
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<img src="images/olx_logo.jpg" style="height:70px;width:70px;"></img>
                <ul class="nav navbar-nav navbar-right">
				
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

?>
				
				<?php
					if(isset($_SESSION['nitc_email'])){
							$query = "select nitc_email FROM users";
							$result = mysqli_query($conn,$query);
							if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						if($_SESSION['nitc_email']==$row['nitc_email']){
							?>		
							<li>
                                <a href="#">Welcome,<?php echo ucfirst($row['nitc_email']); ?> </a>
                            </li>
							 <li>
                        <a href="add_product.php" class="btn btn-info" >SUBMIT A FREE AD</a>
                    </li>
                   <li>
                        <a href="msg.php">See all messages</a>
                    </li>
                   
					
					<li>
                        <a href="logout.php">Logout</a>
                    </li>
					
                    
                   
                </ul>
				<?php 
						}
					}
							}
					}?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	

</body>

</html>
