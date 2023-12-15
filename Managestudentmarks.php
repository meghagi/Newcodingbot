<?php
session_start();
include'dbcon.php';
 $email = $_SESSION['Email'];//intializing variable in session
    $sql = mysqli_query($con,"SELECT * from user where email='$email'");
    $row = mysqli_fetch_array($sql);
    $role = $row['Role'];
    if($_SESSION['loggedin']!="true" || ($_SESSION['loggedin']!=true) || $role!='teacher'){
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
   <nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="login.php" >Student CRUD System</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="admin.php"></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manageuser.php"></a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="teacher.php">Home</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="">Manage student marks</a>
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
                <a class="nav-link ms-3" href="useraccountteacher.php"><i class="fa fa-user"></i> Profile</a>
            </li>
           
        </ul>
    </div>
</nav>
  <div class="container">
     <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
      <div class="col-lg-12">
	   <h1 style="background-color:lightgrey" align="center">Update Students Mark.
</h1>
	   <table class="table table-striped table-hover table-bordered">
		<tr>
			<th style="color:black">id</th>
			<th style="color: black">Email</th>
      <th style="color: black">Role</th>
      <th style="color: black">Class</th>
        <th style="color: black">Action Button</th>
         </tr>
         <?php 
         $que="SELECT class from classes WHERE physics='t1' or math='t1' or science='t1' or hindi='t1' or english='t1' or chemistry='t1'";
            $res = mysqli_query($con,$que);
            $arr = array();
            while($row=mysqli_fetch_array($res)){
                array_push($arr,$row['class']);
            }
            ?>
            <?php 
            $sql = "SELECT * from user where Role='student' ORDER BY class ASC";
            $result = mysqli_query($con,$sql);
            
while($res=mysqli_fetch_array($result))
{

?>
			
		
			<tr>
			<td><?php echo $res['id'];?></td>
		
		
			<td><?php echo $res['email'];?></td>
		
         
      <td><?php echo $res['Role'];?></td>
      <td><?php echo $res['class'];?></td>
      <td>  <?php echo  '<a href="updatemarks.php?id='.$res['id']. '" title="Change Status" class=" btn btn-success ms-3 mt-2" data-toggle="tooltip">Update </a>';?>
         <?php echo '<input type="hidden"  value='.$res["id"].'>' ?>
     </td>

             </tr>


             <?php
             }

             ?>
     </table>
     

     </div>
    </div>

   </div>
  </body>
  </html>