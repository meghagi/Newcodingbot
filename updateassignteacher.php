<?php
session_start();
include'dbcon.php';
 $email = $_SESSION['Email'];
    $sql = mysqli_query($con,"SELECT * from user where email='$email'");
    $row = mysqli_fetch_array($sql);
    $role = $row['Role'];
    if($_SESSION['loggedin']!="true" || ($_SESSION['loggedin']!=true) || $role!='admin'){
        header("location: login.php");
        exit;
    }
    if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_POST['submit']))
{
  echo "hy";
   
    
      $class = $_POST['Class'];
    $subject = $_POST['Subject'];
    $teacher = $_POST['Teacher'];
    $sql = "UPDATE classes SET  $subject='$teacher' WHERE class='$class'";
    $result = mysqli_query($con,$sql);
    if($result)
{
  echo"Record inserted";
  echo'<script>alert(" Congratulation Record updated")</script>';
}
else
{
  echo"Record not inserted";
  echo'<script>alert(" Sorry!Record not updated")</script>';

}
      

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
   
 
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var errormessage="";
        var correctway=/^[A-Z a-z]+$/;
        function validateForm()
        {
             a=document.getElementById("Class").value;
             b=document.getElementById("Teacher").value;
             c=document.getElementById("Subject").value;
             if(a=="")
             {
                errormessage+="Please enter class";
                document.getElementById("Class").style.borderColor="red";
                 document.getElementById("Message1").innerHTML="* Please fill class";
             }
              if(a=="")
             {
                errormessage+="Please enter Teacher";
                document.getElementById("Teacher").style.borderColor="red";
                 document.getElementById("Message1").innerHTML="* Please fill Teacher";
             }
              if(a=="")
             {
                errormessage+="Please enter Subject";
                document.getElementById("Subject").style.borderColor="red";
                 document.getElementById("Message1").innerHTML="* Please fill Subject";
             }
            if(errormessage!="")
           {
        alert(errormessage) ;
       return false;
        }
     else
    {
     alert("all fields are filled");
     }


        }
    </script>
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
                <a class="nav-link ms-3 active" href="manageuser.php">Manage User</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manageadmission.php">Manage Admission</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="managestudent.php">Manage Student</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="manageteacher.php">Manage teacher</a>
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
                <a class="nav-link ms-3" href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
           
        </ul>
    </div>
</nav>
<div class="container bg-light p-3 ">
        <h1 >Update Record</h1>
        <small class="fw-light">Please fill this form and submit to update admission record to the database.</small>
 
        </div>
        
  <div class="container">
    <form action="" method="POST"onsubmit="return validateForm()"name="myForm">
    
            <div class="form-group">
                 <label for="class">Class:</label>
         <input type="text" class="form-control" id="Class" placeholder="Enter class" name="Class">
               <span id="Message1" class="text-danger font-weight bold "></span>
        </div>
         <div class="form-group">
           
            <label for="Teacher" class="mt-2">Teacher</label>
            <select type="text" name="Teacher" id="Teacher" class="form-control mt-2" >
           <option value="">Select Teacher</option>
           <?php
                    require_once 'dbcon.php';
                    $result = mysqli_query($con,"SELECT * from user WHERE Role='teacher'");
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                        <?php
                    }
                    ?>
       </select>
             <span id="Message2" class="text-danger font-weight bold "></span>
 
         </div>
         <div class="form-group">
                 
            <label for="Subject" class="mt-2">Subject</label>
            <select type="text" name="Subject" class="form-control mt-2">
            <option value="">Select Subject</option>
            <option value="physics">Physics</option>
                        <option value="chemistry">Chemistry</option>
                        <option value="math">Math</option>
                        <option value="science">Science</option>
                        <option value="english">English</option>
                        <option value="hindi">Hindi</option>
          </select>
             <span id="Message3" class="text-danger font-weight bold "></span>
         </div>
      
         
         
 </div>
    <div class="col-sm-6">
    <div class="form-group">
     <input type="submit" class="btn bg-primary text-white" name="submit" value="Submit"style="margin-left: 110px;">
    <input type="submit" class="btn bg-secondary text-white" name="cancel" value="Cancel"style="margin-left: 10px;">

    </div>      
      
</div>
</form>

</body>
</html>