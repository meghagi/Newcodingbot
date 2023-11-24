<?php
if(isset($_POST['submit']))
{
  include"dbcon.php";
  
  $email=$_POST['Email'];
  $pwd=$_POST['pwd'];
  $que="Select * from user where email='$email' and password='$pwd'";
  $result=mysqli_query($con,$que);
  $total=mysqli_num_rows($result);
  
while($row=mysqli_fetch_array($result))
  {
    print_r($row);
    echo("email". $row[0]);
    echo"<br>";
    echo("password". $row[1]);
  }
  if($total==1)
  {
    echo $total;
    session_start();
    $_SESSION['Email']=$email;
     $_SESSION['password']=$pwd;
     echo $_SESSION['Email']."<br>".  $_SESSION['password']; //acess session
       echo'<script>alert(" Congratulation Record Login")</script>';
    header('location:admin.php');
  }
  else if($email==""&& $pwd=="")
{

 header ("Location:login.php");

}
   else if(!( $_SESSION['Email']and $_SESSION['password']) )
{

 header ("Location: login.php");

}
else
{
  echo "Record not selected";
   echo'<script>alert(" Record not Login")</script>';
    echo'<script>alert(" Account not exist")</script>';
}

}





?>


<html>
<head>
	<title>Student Management System Welcome</title>
	<html>
<head>
	
	<link rel=" icon" href="img/apna sweets.png"type="image/png"><!-- title mei icon k liye -->
<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, intial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link  rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


  
  <script type="text/javascript" src="jquery/jquery.js"></script> 

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
function validateForm()
    {
      var correct_way=(/\s+/g);
      var errormessage=""
      var a=document.getElementById('email').value;
      var b=document.getElementById('pwd').value;
      
      if(a==="")
      {
        errormessage+="Please enter email";
        document.getElementById("Message1").innerHTML="* Please fill uname";
 
        document.getElementById("email").style.borderColor="red";
      }
       if(b==="")
      {
        errormessage+="Please enter pwd";
        document.getElementById("Message2").innerHTML="* Please fill password";
 
        document.getElementById("pwd").style.borderColor="red";
      }
       if(errormessage!="")
   {
    alert("Enter all field") ;
    return false;
   }
 }
  </script>.
</head>
<body>

<div class="container-fluid bg-dark p-3">
  <a href="login.php"class="text-white">Student Curd</a>
   <a  style="display: inline; margin-left:20px;color:grey; font-size:15px font-style:bold; "id="lgin" href="">Login</a>
   <a  style="display: inline; margin-left:20px;color:grey; font-size:15px font-style:bold; "id="" href="Register.php">Register</a>

</div>
<div class="container bg-light p-3 ">
        <h1 class="text-center">Login into your account</h1>
        </div>
        
  <div class="container">
  	<form action="" method="POST"onsubmit="return validateForm()"name="myForm">
  	
  			<div class="form-group">
  				 <label for="Username">Email:</label>
         <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="Email">
               <span id="Message1" class="text-danger font-weight bold "></span>
    
  
</div>
<div class="form-group">
  				 <label for="Username">Password:</label>
         <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
               <span id="Message2" class="text-danger font-weight bold "></span>
    
  
</div>
 </div>
  	<div class="col-sm-6">
	<div class="form-group">
	 <input type="submit" class="btn bg-primary text-white" name="submit" value="Login"style="margin-left: 110px;">

	</div>		
      
</div>
</form>
</div>
</body>