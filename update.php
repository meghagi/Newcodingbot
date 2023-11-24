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
      var a=document.getElementById('uname').value;
      var b=document.getElementById('pwd').value;
      
      if(a==="")
      {
        errormessage+="Please enter uname";
        document.getElementById("Message1").innerHTML="* Please fill uname";
 
        document.getElementById("uname").style.borderColor="red";
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
  </script>
</head>
<body>

<?php 
  include "navbar.php";


  ?>


<div class="container bg-light p-3 ">
        <h1 >Update Record</h1>
        <small class="fw-light">Please fill this form and submit to update admission record to the database.</small>
 
        </div>
        
  <div class="container">
  	<form action="" method="POST"onsubmit="return validateForm()"name="myForm">
  	
  			<div class="form-group">
  				 <label for="Username">Name:</label>
         <input type="text" class="form-control" id="name" placeholder="Enter name" name="uname">
               <span id="Message1" class="text-danger font-weight bold "></span>
        </div>
         <div class="form-group">
  				 
            <label for="country" class="mt-2">State</label>
            <select type="text" name="State" id="State" class="form-control mt-2" value="<?php echo $countryID?>">
            <option value="">Select State</option>
          </select>
         </div>
        <div class="form-group">
           
            <label for="country" class="mt-2">City</label>
            <select type="text" name="City" id="City" class="form-control mt-2" value="<?php echo $countryID?>">
            <option value="">Select City</option>
          </select>
         </div>
          <div class="form-group">
           
            <label for="City" class="mt-2">Country</label>
            <select type="text" name="city" id="city" class="form-control mt-2" value="<?php echo $countryID?>">
            <option value="">Select Country</option>
          </select>
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