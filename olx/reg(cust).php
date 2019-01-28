
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zomato</title>

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

body{
height:100%;
  
	background:#fff url(reg_pic2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;


}
.control-group {
  
   
    display: block;

    text-transform: uppercase;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
	-webkit-animation-name:bounceInLeft ; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 1.5s; /* Chrome, Safari, Opera */

}



@keyframes bounceInLeft{

0% {
    opacity:0;
    transform: translateX(-2000px);
}
60% {
   
    transform: translateX(30px);
}
80% {

    transform: translateX(-10px);
}
100% {

    transform: translateX(0);
}
}

 #content1 { 
	
	animation-name: bounceInLeft;
	animation-delay:0.2s; -moz-animation-delay:0.2s; -webkit-animation-delay:0.2s;
	-webkit-animation-name:bounceInLeft ; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 1.5s; /* Chrome, Safari, Opera */
	}

 #content2 { 
	animation-name: bounceInLeft;
    animation-delay:0.6s; -moz-animation-delay:0.6s; -webkit-animation-delay:0.6s; }
    #content3 { 
	animation-name: bounceInLeft;
	animation-delay:0.8s; -moz-animation-delay:0.8s; -webkit-animation-delay:0.8s; }
    #content4 { 
	animation-name: bounceInLeft;
 animation-delay:0.2s; -moz-animation-delay:0.2s; -webkit-animation-delay:0.2s; }
 
 
 #content5 { 
	animation-name: bounceInLeft;
 animation-delay:0.6s; -moz-animation-delay:0.6s; -webkit-animation-delay:0.6s; }
 
 
 #content6{ 
	animation-name: bounceInLeft;
 animation-delay:0.8s; -moz-animation-delay:0.8s; -webkit-animation-delay:0.8s; }
 
 
 #content7{ 
	animation-name: bounceInLeft;
 animation-delay:0.2s; -moz-animation-delay:0.2s; -webkit-animation-delay:0.2s; }
 
 
 #content8{ 
	animation-name: bounceInLeft;
 animation-delay:0.3s; -moz-animation-delay:0.3s; -webkit-animation-delay:0.3s; }
 
 
 #content9{ 
	animation-name: bounceInLeft;
 animation-delay:0.3s; -moz-animation-delay:0.3s; -webkit-animation-delay:0.3s; }
 

 #content10{ 
	animation-name: bounceInLeft;
 animation-delay:0.3s; -moz-animation-delay:0.3s; -webkit-animation-delay:0.3s; }

</style>

<script>

function check()
{

if(passlength()==1)
 {
  if(r==0)
  {
   r=1;
   alert("password must contain atleast 8 characters");
  }
 }
 else if(passmatch()==1)
 {
  r=1;
  alert("password not match!!!");
  cpass.value="";
 }

 if(r==1)
  return false;
 else
  return true;

}



function hide()
{
 document.getElementById("cpassmatch").style.visibility="hidden";
 document.getElementById("passlen").style.visibility="hidden";
}

function passmatch()
{
 if(pass.value==cpass.value && pass.value!="")
  document.getElementById("cpassmatch").style.visibility="visible";
 else
 {
  document.getElementById("cpassmatch").style.visibility="hidden";
  return (1);
 }
}

function passlength()
{
 document.getElementById("cpassmatch").style.visibility="hidden";
 if(pass.value.length<8)
 {
  document.getElementById("passlen").style.visibility="visible";
  return (1);
 }
 else
  document.getElementById("passlen").style.visibility="hidden";
}

</script>



<?php
       $p1="";
	$flag=1;
	$p1_arr="";
	$p2_arr="";
	$p3_arr="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["fname"])){
		 $p1_arr="*NAME is required";
		}
		else{
                 $p1=test_input($_POST["fname"]);
		 if(!preg_match('/[a-zA-Z]/',$p1)){

		 $p1_arr="*write only letters";
			$flag=0;
			}
		else{$t1=$p1;}
		}
		
		
		
		
		if(empty($_POST["email"])){
		 $p2_arr="*Email is reqired";
		
		}
		else{
	
		$p2=test_input($_POST["email"]);

		if(!preg_match('/[a-zA-Z0-9._-]+@[a-zA-Z0-9_]+\.[a-zA-Z.]{2,5}$/',$p2)){
			$p2_arr="*Enter valid email";
			$flag=0;
			}
		else{$t2=$p2;}
		}
		
		
		if(empty($_POST["mobile"])){
		 $p3_arr="*mobile no is reqired";
		}
		else{
	
		$p3=test_input($_POST["mobile"]);

		if(!preg_match('/^[0-9]{10}+$/',$p3)){
			$p3_arr="*Enter valid mobile";
			$flag=0;
			}
		else{$t3=$p3;}
		}
		

		
		
		

		
		
		
	
	
	


$server="localhost";
$user="root";
$password="";
$dbname="zomato";
$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


	$p3=$_POST['pass'];
	
	$p5=$_POST['type'];
   
	
	
    $sql="INSERT INTO customers(fname,nitc_email,pass,mobile,type) VALUES ('$t1','$t2','$p3','$t3','$p5')";
    
    
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New record created successfully!')</script>";
    
    }
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
	
	
	
	
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);

return $data;
}

?>

<body>

    <!-- Navigation -->
    <!-- Page Content -->
    <div class="container" style="background-color:rgba(228,225,27,0.5);">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Register
                    <small>as Customer</small>
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <div class="container">
			 <div class="row">
			  <div class="col-md-2"></div>
            <div class="col-md-8">
               
               
				<form method="POST" id="content1" onSubmit="return check()" onReset="hide()" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="control-group form-group">
                        <div class="controls">
                           
                            <input type="text" class="form-control" placeholder="Enter Customer Name" name="fname">
							 <span class="error" style="color:red;"><?php echo $p1_arr?></span>
                            <p class="help-block"></p>
						
                        </div>
                    </div>
					
                    <div class="control-group form-group" id="content2">
                        <div class="controls">
                         
                           <input type="email" class="form-control" placeholder="Enter your Email" name="email">
						    <span class="error" style="color:red;"><?php echo $p2_arr?></span>
							  <p class="help-block"></p>
                        </div>
                    </div>
					
                    <div class="control-group form-group" id="content3">
                        <div class="controls">
                           
                          <input type="password" name="pass" id="pass" placeholder="Enter your password " onchange="passlength()" class="form-control"/>
							<label id="passlen" style="color:red;visibility:hidden;">(min length 8)</td>
                        </div>
                    </div>
					 <div class="control-group form-group" id="content4">
                        <div class="controls">
                          <input type="password" name="cpass" placeholder="Enter your password again" id="cpass" onchange="passmatch()" class="form-control"/>
				  <label id="cpassmatch" style="color:green;visibility:hidden;">Password Match                         </div>
                    </div>
					
					<div class="control-group form-group"id="content5">
                        <div class="controls">
                          
                            <input type="mobile" class="form-control" name="mobile" placeholder="Enter Mobile no" >
							<span class="error" style="color:red;"><?php echo $p3_arr?></span>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					<div class="control-group form-group"id="content8">
                        <div class="controls">
                            
                            <input type="text" class="form-control" name="type" placeholder="Enter type" >
                        </div>
                    </div>
					
					
					
					
					
					
					
                   
				   
				   
				    <div id="success"></div>
                    <!-- For success/fail messages -->
                   <button type="submit" class="btn btn-primary" name="submit">Register</button>
					</form>
            </div>
				   
				   
				   
				   
				   
				   
				   
                </form>
            </div>
			 <div class="col-md-2"></div>

        </div>
        <!-- /.row -->
		
		
		
		</div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
