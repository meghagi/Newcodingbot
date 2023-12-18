<?php
session_start();
include'dbcon.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
 $email = $_SESSION['Email'];
    $sql = mysqli_query($con,"SELECT * from user where email='$email'");
    $row = mysqli_fetch_array($sql);
    $role = $row['Role'];
    if($_SESSION['loggedin']!="true" || ($_SESSION['loggedin']!=true) || $role!='admission'){
        header("location: login.php");
        exit;
    }
    if(isset($_POST['submit']))
{
  echo "hy";
   
    $countryID = $_POST['country'];
    $stateID = $_POST['State'];
    $cityID = $_POST['City'];

    $result = mysqli_query($con,"select name from countries where id='$countryID'");
    $row = mysqli_fetch_array($result);
    $countryname = $row['name'];

    $sresult = mysqli_query($con,"select state from states where s_id='$stateID'");
    $row1 = mysqli_fetch_array($sresult);
    $statename = $row1['state'];

    $cresult = mysqli_query($con,"select city from cities where c_id='$cityID'");
    $row2 = mysqli_fetch_array($cresult);
    $cityname = $row2['city'];



    $name = $_POST['uname'];
    $rollno = $_POST['rollno'];
    $class =$_POST['class'];
    $section =$_POST['section'];
    $sql1 = "update user set rollno= $rollno, name='$name',class='$class',section='$section',country='$countryname', state='$statename',city='$cityname' where id='$id'";
    $result = mysqli_query($con,$sql1);
    $successalert = true;
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
 <script type="text/javascript">
    $(document).ready(function(){

    function loadData(type,category_id)
    {
    $.ajax({
     url:"country.php",
     type:"POST",
     data:{type:type,id:category_id},
     success:function(data){
      if(type=="stateData")
      {
        $("#State").html(data);
      }
     $("#Country").append(data);
     }

    });
    }
    loadData();
      $("#Country").on ("change",function(){

       var country=$("#Country").val();
       loadData("stateData",country);

      })
       function loadData1(type,category1_id)
    {
    $.ajax({
     url:"country.php",
     type:"POST",
     data:{type:type,state_id :category1_id},
     success:function(data){
      if(type=="cityData")
      {
        $("#City").html(data);
      }
     $("#State").append(data);
     }

    });
    }
    loadData1();
      $("#State").on ("change",function(){

       var state=$("#State").val();
       loadData1("cityData",state);

      })      
    });
 
 </script>





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
    <div class="container bg-light p-3 ">
        <h1 >Update Record</h1>
        <small class="fw-light">Please fill this form and submit to update admission record to the database.</small>
 
        </div>
        
  <div class="container">
    <form action="" method="POST"onsubmit="return validateForm()"name="myForm">
        <div class="form-group">
           <label for="Roll No">Roll No:</label>
         <input type="text" class="form-control" id="name" placeholder="Enter name" name="rollno">
               <span id="Message1" class="text-danger font-weight bold "></span>
        </div>
       
    
    
        <div class="form-group">
           <label for="Username">Name:</label>
         <input type="text" class="form-control" id="name" placeholder="Enter name" name="uname">
               <span id="Message1" class="text-danger font-weight bold "></span>
        </div>
           <div class="form-group">
           <label for="Class">Class</label>
         <input type="text" class="form-control" id="class" placeholder="Enter class" name="class">
               <span id="Message1" class="text-danger font-weight bold "></span>
        </div>
           <div class="form-group">
           <label for="Section">Section</label>
           <select name="section" id="section" class="form-control mt-2" value="<?php echo $section;?>" required>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                        </select>
            </div>
         <div class="form-group">
           
            <label for="Country" class="mt-2">Country</label>
            <select type="text" name="country" id="Country" class="form-control mt-2" >
            <option value="">Select Country</option>
          </select>
             <span id="Message2" class="text-danger font-weight bold "></span>
 
         </div>
         <div class="form-group">
           
            <label for="State" class="mt-2">State</label>
            <select type="text" name="State" id="State" class="form-control mt-2">
            <option value="">Select State</option>
          </select>
             <span id="Message3" class="text-danger font-weight bold "></span>
 
         </div>
        <div class="form-group">
           
            <label for="city" class="mt-2">City</label>
            <select type="text" name="City" id="City" class="form-control mt-2">
            <option value="">Select City</option>
          </select>
             <span id="Message4" class="text-danger font-weight bold "></span>
 
         </div>
         
         
 </div>
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
