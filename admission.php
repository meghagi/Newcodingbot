<?php
session_start();
include'dbcon.php';
 $email = $_SESSION['Email'];
    $sql = mysqli_query($con,"SELECT * from user where email='$email'");
    $row = mysqli_fetch_array($sql);
    $role = $row['Role'];
    if($_SESSION['loggedin']!="true" || ($_SESSION['loggedin']!=true) || $role!='admission'){
        header("location: login.php");
        exit;
    }

?>
<html>
<head>
	<title> Welcome<?php echo $_SESSION['Email']; ?></title>
	<link rel=" icon" href="img/apna sweets.png"type="image/png"><!-- title mei icon k liye -->
   <meta charset="utf-8">
   <meta name="viewport"content="width=device-width, intial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link  rel="stylesheet" href="style.css" type="text/css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
   <script type="text/javascript" src="jquery/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 </head>
 <body>
  
 
  
        <nav class="navbar navbar-expand bg-dark navbar-dark">
  

      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"></button>
      <span class="navbar-toggler-icon"></span>
      <div class="collapse-navbar-collapse" id="myMenu">
        
        <ul class="navbar-nav ">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="login.php" >Student CRUD System</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="admin.php"></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="#">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manage_user_adm.php">Manageuser</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="">Manage Student</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link mr-3 active" href=""></a>
            </li>
             <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li class="nav-item" id="prfa">
                <a class="nav-link ms-3" href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
           
        </ul>
      </div>
    </nav>
    
  

  <div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center"> Display table data</h1>
	   <table class="table table-striped table-hover table-bordered">
		<tr>
			<th style="color:black">id</th>
			<th style="color: black">Email</th>
      <th style="color: black">Role</th>
         </tr>
         <?php 
         $que="SELECT * from user WHERE Role='user'or Role='student' ORDER by id ASC";
if($result=mysqli_query($con, $que));
while($res=mysqli_fetch_array($result))
{

?>
			
		
			<tr>
			<td><?php echo $res['id'];?></td>
		
		
			<td><?php echo $res['email'];?></td>
		
         
             <td><?php echo $res['Role'];?></td>

             </tr>


             <?php
             }

             ?>
     </table>
     

     </div>
    </div>

   
  </body>
  </html>