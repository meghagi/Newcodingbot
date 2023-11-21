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

  
</head>
<body>

<div class="container-fluid bg-dark p-3">
  <a href="login.php"class="text-white">Student Curd</a>
   <a  style="display: inline; margin-left:20px;color:grey; font-size:15px font-style:bold; "id="lgin" href="#">Login</a>
   <a  style="display: inline; margin-left:20px;color:grey; font-size:15px font-style:bold; "id="" href="Register.php">Register</a>

</div>
<div class="container bg-light p-3 ">
        <h1 class="text-center">Login into your account</h1>
        </div>
        
  <div class="container">
  	<form action="" method=""onsubmit=""name="myForm">
  	
  			<div class="form-group">
  				 <label for="Username">Username:</label>
         <input type="text" class="form-control" id="uname" placeholder="Enter username" name="Uname">
  
</div>
<div class="form-group">
  				 <label for="Username">Password:</label>
         <input type="password" class="form-control" id="pwd" placeholder="Enter username" name="pwd">
  
</div>
 </div>
  	<div class="col-sm-6">
	<div class="form-group">
	 <input type="submit" class="btn bg-primary text-white" name="submit"onsubmit="return LoginForm() " value="Login"style="margin-left: 110px;">

	</div>		
      
