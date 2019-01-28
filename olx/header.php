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

  

</head>
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="col-md-1"></div>
			<div class="col-md-9">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<img src="images/olx_logo.jpg" style="height:70px;width:70px;"></img>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="btn" data-toggle="modal" data-target="#Login_cust">MY ACCOUNT</a>
						</li>
                    <li>
                        <a href="register.php" class="btn btn-info" >SUBMIT A FREE AD</a>
                    </li>
                                      
                   
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</div>
	<div class="col-md-1"></div>
	<hr>
	 <!----Login Page---->
  <div class="container">
	<div class="row">
  <div class="modal fade" id="Login_cust" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
          <h4 class="modal-title" style="display:inline;">Login</h4>
        </div>
        <div class="modal-body">
          <form action="login_cust.php" method="POST">
		  
			 
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="email" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
							
							 <label>Password:</label>
                            <input type="password" class="form-control" name="password" required data-validation-required-message="Please enter your Password.">
							 <p class="help-block"></p>
							 <div id="success"></div>
                    <!-- For success/fail messages -->
                    <input type="submit" class="btn btn-md-success" name="submit" value="submit">Register</button>
         
         
          <br><br>
          </form>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
  </div>