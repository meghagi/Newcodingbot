
<?php
session_start();
include'dbcon.php';
if(!($_SESSION['Email']))
{
  header('location:login.php');
}
else
{
  echo "Welcome".$_SESSION['Email'];
}

$id = $name = $class= $section = $country = $state = $city  = $image = '';
$id = $_GET['id'];

$sql = "select * from user where id='$id';";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_array($res);

$name = $data['name'];
$country = $data['country'];
$state = $data['state'];
$city = $data['city'];
$image = $data['userimage'];

?>

<html>
<head>
	<title>Details</title>
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
  <?php 
  include "navbar.php";


  ?>
  <div class="container">
     <h1 class="mt-3 ">Details.</h1>
      <div class="col-lg-12">
     <h1 style="background-color:lightgrey" align="center"> Display table data</h1>
     <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Country</td>
              <td>State</td>
              <td>City</td>
              <td>Image</td>
            </tr>    
        </thead>
        <tbody>
            <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $country;?></td>
                            <td><?php echo $state;?></td>
                            <td><?php echo $city;?></td>
                            <td><img src="<?php echo $image?>" width="100" height="100"></td>
                        </tr>

        </tbody>
     </table>
   </div>
   </div>

 </body>
 </html>