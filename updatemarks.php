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
    <?php
    $sucessalert = false;
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    echo $id;

}
include'dbcon.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){

    $id = $_POST['id'];

    echo $id;
    $res2 = mysqli_query($con,"SELECT * from user WHERE id='$id'");
    $row2 = mysqli_fetch_array($res2);
    $name = $row['name'];
    $n = $row2['name'];


    $class = $row2['class'];
    $res3 = mysqli_query($con,"SELECT * from classes where class='$class'");
    $row3 = mysqli_fetch_array($res3);
    if($row3['physics']==$name){
        $physics = $_POST['physics'];
        $sql1 = "UPDATE studentmarks SET physics='$physics' WHERE name='$n';";
        $result = mysqli_query($con,$sql1);
    }
    if($row3['chemistry']==$name){
        $chemistry = $_POST['Chemistry'];
        $sql1 = "UPDATE studentmarks SET chemistry='$chemistry'WHERE name='$n';";
        $result = mysqli_query($con,$sql1);
    }
    if($row3['maths']==$name){
        $math = $_POST['Maths'];
        $sql1 = "UPDATE studentmarks SET maths='$math' WHERE name='$n';";
        $result = mysqli_query($con,$sql1);
    }
    if($row3['science']==$name){
        $science = $_POST['Science'];
        $sql = "UPDATE studentmarks SET science='$science' WHERE name='$n';";
        $result = mysqli_query($con,$sql1);
    }
    if($row3['hindi']==$name){
        $Hindi = $_POST['Hindi'];
        $sql1 = "UPDATE studentmarks SET hindi='$Hindi' WHERE name='$n';";
        $result = mysqli_query($con,$sql1);
    }
    if($row3['english']==$name){
        $english = $_POST['English'];
        $sql1 = "UPDATE studentmarks SET english='$english' WHERE name='$n';";
        $result = mysqli_query($con,$sql1);
    }

    $sucessalert = true;
            
    mysqli_close($con);
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
                <a class="nav-link ms-3 active" href="Managestudentmarks.php">Manage student marks</a>
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

<div class="container bg-light p-3 ">
        <h1 >Update Record</h1>
        <small class="fw-light">Please fill this form and submit to update admission record to the database.</small>
 
        </div>
         <?php
           include "dbcon.php"; 
        
            if($sucessalert){
                echo '<div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong>Record updated.
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>';
            }
             
            $res2 = mysqli_query($con,"SELECT * FROM user where id='$id'");
            
            $row2 = mysqli_fetch_array($res2);
            
            $name = $row['name'];
            $class = $row2['class'];
            $res3 = mysqli_query($con,"SELECT * from classes where class='$class'");
            $row3 = mysqli_fetch_array($res3);
        ?>
        
  <div class="container">
    <form action="" method="POST"onsubmit="return validateForm()"name="myForm">
         <div class="form-group">
                        <p>Please fill this form and submit to update student marks to the database.</p>
                        <input type="hidden" name="id" id="id" class="form-control mt-2" value="<?php echo $id;?>">
                    </div>
                    <?php
                    if($row3['physics']==$name){
                    ?>   
            <div class="form-group">
                 <label for="Physics">Physics:</label>
                <input type="number" class="form-control" id="physics" placeholder="Enter Physics" name="physics">
               <span id="Message1" class="text-danger font-weight bold "></span>
            </div>
              
              <?php
          }
              ?>
              <?php
                if($row3['chemistry']==$name){
                    ?>

         <div class="form-group">
           
            <label for="Chemistry" class="mt-2">Chemistry</label>
             
           <input type="number" class="form-control" id="Chemistry" placeholder="Enter Chemistry" name="Chemistry">
               
           <span id="Message2" class="text-danger font-weight bold "></span>
        </div>
         <?php
          }
         ?>
        <?php
            if($row3['math']==$name){
         ?>

        <div class="form-group">
           
            <label for="Maths" class="mt-2">Maths</label>
             
           <input type="number" class="form-control"id="Maths" placeholder="Enter Maths" name="Maths">
               
           <span id="Message3" class="text-danger font-weight bold "></span>
        </div>
         <?php
          }
        ?>
        <?php
        if($row3['science']==$name){
        ?>

        <div class="form-group">
           
            <label for="Science" class="mt-2">Science</label>
             
           <input type="number" class="form-control"id="Science" placeholder="Enter Science" name="Science">
               
           <span id="Message4" class="text-danger font-weight bold "></span>
        </div>
        <?php
          }
        ?>
          <?php
        if($row3['hindi']==$name){
        ?>


        <div class="form-group">
           
            <label for="Hindi" class="mt-2">Hindi</label>
             
           <input type="number" class="form-control"id="Hindi" placeholder="Enter Hindi" name="Hindi">
               
           <span id="Message5" class="text-danger font-weight bold "></span>
        </div>
         <?php
          }
        ?>
         <?php
        if($row3['english']==$name){
        ?>

        <div class="form-group">
           
            <label for="English" class="mt-2">English</label>
             
           <input type="number" class="form-control"id="Hindi" placeholder="Enter English" name="English">
               
           <span id="Message6" class="text-danger font-weight bold "></span>
        </div>
         <?php
          }
        ?>
            <div class="col-sm-6">
    <div class="form-group">
     <input type="submit" class="btn bg-primary text-white" name="submit" value="Submit"style="margin-left: 110px;">
    <input type="submit" class="btn bg-secondary text-white" name="cancel" value="Cancel"style="margin-left: 10px;">

    </div>      
      
</div>
    </form>
</div>
</body>
</html>

</body>
</html>