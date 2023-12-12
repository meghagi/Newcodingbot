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
  <div class="container">
  <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
  <div class="col-lg-12">
     <h1 style="background-color:lightgrey" align="center"> Display manage Teacher</h1>
     <table class="table table-striped table-hover table-bordered">
     <tr>
      <th style="color:black">id</th>
       <th style="color:black">Email</th>
      <th style="color: black">Role</th>
      
      
      
    </tr>
<?php 
    $sql = "SELECT * from user WHERE Role='teacher'";
    $result = mysqli_query($con, $sql);

    while ($res = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['Role']; ?></td>
         <td><?php  echo '<a href="read.php?id='. $res['id'] .'" class="mr-3 btn btn-secondary" title="View Details" data-toggle="tooltip"><span class="fa fa-eye"></span></a>'?></td>
     <td><?php  echo '<a href="update.php?id='. $res['id'] .'" class="mr-3 btn btn-secondary" title="Edit Details" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>'?></td>
     <td> <?php echo '<a href="javascript:void(0)" title="Change Status" class="mr-3 btn btn-secondary delete_btn_ajax btn" data-toggle="tooltip" style="background-color:red"><span class="fa fa-trash" style="background-color:red"></span></a>' ?>
    <?php echo '<input type="hidden" class="delete_id_value" value='.$res["id"].'>' ?></td>
   <td>
</tr>
<?php
    }
?>
</table>
<div class="container mt-5">
        <a href="updateassignteacher.php?id='. $row['id'] .'" class="ms-3 btn btn-success" title="Assign" data-toggle="tooltip">Assign Class and Subject</a>
    </div>
    <div class="container">
      <h1 class="mt-3-text-center">Teachers assigned based on class and subjects.</h1>
      <div class="col-lg-12">
     <h1 style="background-color:lightgrey" align="center"> Display manage Teacher</h1>
     <table class="table table-striped table-hover table-bordered">
     <tr>
      <th style="color:black">class</th>
       <th style="color:black">math</th>
      <th style="color: black">science</th>
       <th style="color: black">hindi</th>
       <th style="color: black">english</th>
       <th style="color: black">physics </th>
       <th style="color: black">chemistry</th>
      
      
      
      
    </tr>
<?php 
    $sql = "SELECT * from classes";
    $result = mysqli_query($con, $sql);

    while ($res = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $res['class']; ?></td>
        <td><?php echo $res['math']; ?></td>
        <td><?php echo $res['science']; ?></td>
        <td><?php echo $res['hindi']; ?></td>
        <td><?php echo $res['english']; ?></td>
        <td><?php echo $res['physics']; ?></td>
        <td><?php echo $res['chemistry']; ?></td>
      </tr>
       
<?php
    }
?>
    </table>
  </div>
    </div>

</div>
</div>
<script>
    $(document).ready(function () {
        $('.delete_btn_ajax').click(function (e) {
            e.preventDefault();
            var deleteid = $(this).closest("tr").find('.delete_id_value').val();
            console.log(deleteid)
            swal.fire({
                title: 'Are you Sure?',
                text: 'You want to be able to revert back.',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#9A2124',
                confirmButtonColor: '#34A853',
                confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: 'delete.php',
                        data: {
                            "delete_btn_set": 1,
                            "id": deleteid,
                        },
                        success: function (response) {
                            console.log("here");
                            swal.fire(
                                'Deleted!',
                                'Your record has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location.reload();
                            });

                        }
                    });
                }
            })
        });
    });




</script>

</body>
</html>