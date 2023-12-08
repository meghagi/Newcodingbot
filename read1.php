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
$id = $name = $class= $section = $country = $state = $city  = $image = '';

$id = $_GET['id'];

$sql = "select * from user where id='$id'";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_array($res);
$rollno=$data['rollno'];
$name = $data['name'];
$class=$data['class'];
$section=$data['section'];
$country = $data['country'];
$state = $data['state'];
$city = $data['city'];
$image = $data['userimage'];

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
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
                <a class="nav-link ms-3 active" href="admission.php">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manage_user_adm.php">Manageuser</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manage_student_adm.php">Manage Student</a>
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
                <a class="nav-link ms-3" href="useraccountadmission.php"><i class="fa fa-user"></i> Profile</a>
            </li>
           
        </ul>
      </div>
    </nav>
 <div class="container">
     <h1 class="mt-3 ">Details.</h1>
      <div class="col-lg-12">
     <h1 style="background-color:lightgrey" align="center"> Display table data</h1>
     <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
              <td>ID</td>
              <td>Rollno</td>
              <td>Name</td>
               <td>Class</td>
                 <td>Section</td>
              <td>Country</td>
              <td>State</td>
              <td>City</td>
              <td>Image</td>
            </tr>    
        </thead>
        <tbody>
            <tr>
                            <td><?php echo $id;?></td>
                             <td><?php echo $rollno;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $class;?></td>
                            <td><?php echo $section;?></td>
                            <td><?php echo $country;?></td>
                            <td><?php echo $state;?></td>
                            <td><?php echo $city;?></td>
                            <td><img src="pics/<?php echo $image?>" width="100" height="100"></td>
                        </tr>

        </tbody>
     </table>
   </div>
   </div>

 </body>
 </html>