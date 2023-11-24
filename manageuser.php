<?php
include 'dbcon.php';
session_start();
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
   <nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="login.php" >Student CRUD System</a>
            </li>
             <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="admin.php">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manageuser.php">Manage User</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="">Manage Admission</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="">Manage Teacher</a>
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
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="useraccount_admission.php"><i class="fa fa-user"></i> Profile</a>
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
      <th style="color: black">View</th>
      <th style="color: black">Edit</th>
      <th style="color: black">Delete</th>
    </tr>
   <?php
   $sql="Select * from user";
   $result=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($result))
    {

?>
      
    
      <tr>
      <td><?php echo $row['id']?></td>
    
    
      <td><?php echo $row['email']?></td>
     <td><?php  echo '<a href="read.php?id='. $row['id'] .'" class="mr-3 btn btn-secondary" title="View Details" data-toggle="tooltip"><span class="fa fa-eye"></span></a>'?></td>
     <td><?php  echo '<a href="update.php?id='. $row['id'] .'" class="mr-3 btn btn-secondary" title="View Details" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>'?></td>
   <td><?php  echo '<a href=".php?id='. $row['id'] .'" class="mr-3 btn btn-secondary" title="View Details" data-toggle="tooltip"  style="background-color:red"><span class="fa fa-trash" style="background-color:red"></span></a>'?></td>
  
  
  </tr>

     <?php
    }

             ?>
   
      
    </table>
     </div>
 </div>

</body>
</html>