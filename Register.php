<?php
if(isset($_POST['submit']))
{
  include'dbcon.php';
  $Email=$_POST['Email'];
$pwd=$_POST['pwd'];


 $que="Select * from user where email='$Email'";
 $result=mysqli_query($con,$que);
 $result1=mysqli_num_rows($result);
 if($result1==1)
 {
   echo'<script>alert(" Duplicate Data")</script>';
  
  
 //echo die;
 }
 else
 {
    $file_name = $_FILES['myfile']['name'];
    echo "<pre>";
    print_r($file_name);
    echo "</pre>";
    $t = $_FILES['myfile']['tmp_name'];
    $path = "pics/$file_name";
    
    if(move_uploaded_file($t, $path)) 
    { 
        echo "File Successfully uploaded";
    }
    else
    {
        echo "There is something wrong in File Upload";
    }


}
$query=mysqli_query($con,"INSERT INTO user(email,password, userimage)VALUES('$Email','$pwd','$file_name')");
if($query>0)
{
echo"Record inserted";
echo'<script>alert ("Congratulation record inserted")</script>';
} 
else
{
  echo"Record not inserted";
  echo'<script>alert(" Sorry!Record not inserted")</script>';

}  
}


?>
<html>
<head>
	<title>Student Management System Welcome</title>
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
      var a=document.getElementById('Email').value;
      var b=document.getElementById('pwd').value;
      var c=document.getElementById('Cpwd').value;
      var d=document.getElementById('file1').value;
      if(a==="")
      {
        errormessage+="Please enter Email";
        document.getElementById("Message1").innerHTML="* Please fill Email";
 
        document.getElementById("Email").style.borderColor="red";
      }
     else
      {
         if(a.indexOf('@')<=0)
         {
         	errormessage+="Email is invalid Position";

         }
         if(a.CharAt(a.length-4!=='.'))
         {
         	errormessage+="Invalid dot position at 4";
         }
         if(a.replace(correct_way))
         {
         	errormessage+="Remove white space";
         }

      }
    
   if(b==="")
  {
    errormessage+="Please enter Password"
    document.getElementById("Message2").innerHTML="* Please fill username";
    document.getElementById("pwd").style.borderColor="red";
 
  }
  else
  {
    if(b.length<8)
    {
      errormessage+="pwd not less than 8";
    }
  }
  if(c==="")
  {
    errormessage+="Please enter Password"
    document.getElementById("Message3").innerHTML="* Please fill password";
    document.getElementById("Cpwd").style.borderColor="red";
 
  }
  else
  {
    if(c.length<8)
    {
      errormessage+="pwd not less than 8";
    }
    if(!(b===c))
    {
      errormessage+="Please fill pwd and cpwd not match";
    }
  }
  
  

  
  if(errormessage!="")
   {
	  alert("Enter all field") ;
	  return false;
   }
}
  </script>
</head>
<body>
<div class="container-fluid bg-dark p-3">
  <a href="login.php"class="text-white" style="font-style: bold; font-size: 20px;">Student Curd System</a>
   <a  style="display: inline; margin-left:20px;color:grey; font-size:15px font-style:bold; "id="lgin" href="#">Login</a>
   <a  style="display: inline; margin-left:20px;color:grey; font-size:15px font-style:bold; "id="" href="Register.php">Register</a>

</div>
<div class="container bg-light p-3 ">
        <h1 class="text-center">Registered into your account</h1>
</div>
        
<div class="container">
  <form action="" method="POST"onsubmit="return validateForm()"name="myForm">
  	<div class="form-group">
  		<label for="Email">Email:</label>
      <input type="email" class="form-control" id="Email"  name="Email" placeholder="Enter the Email">
      <span id="Message1" class="text-danger font-weight bold "></span>
      <small class="fw-light">We'll never share your email with anyone else.</small>
  
     </div>
    <div class="form-group">
  		<label for="Password">Password:</label>
      <input type="password" class="form-control" id="pwd"  name="pwd">
      <span id="Message2" class="text-danger font-weight bold "></span>
   </div>
    <div class="form-group">
  		<label for="ConfirmPassword">ConfirmPassword:</label>
      <input type="password" class="form-control" id="Cpwd" placeholder="Enter username" name="cpwd">
      <span id="Message3" class="text-danger font-weight bold "></span>
    </div>
   <div class="form-group">
  	 <label for="Username">User Image:</label>
      <input type="file" class="form-control" id="file1" name="myfile">
      <span id="Message4" class="text-danger font-weight bold "></span>
    </div>
   <div class="form-group">
	  <input type="submit" class="btn bg-primary text-white" name="submit" style="margin-left: 10px;">
   </div>		

</form>
</div>
</body>
</html>

