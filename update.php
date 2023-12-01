
<?php
include 'dbcon.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
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
    $sql1 = "update user set name='$name',country='$countryname', state='$statename',city='$cityname' where id='$id'";
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
	<title>Student Management System Welcome</title>
	
	
	<!-- title mei icon k liye -->
<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, intial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link  rel="stylesheet" href="style.css" type="text/css">


  
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

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
function validateForm()
    {
      var correct_way=(/\s+/g);
      var errormessage="";
        
      var a=document.getElementById('name').value;
      var b=document.getElementById('Country').value;
      var c=document.getElementById('State').value;
      var d=document.getElementById('City').value;
      if(a==="")
      {
        errormessage+="Please enter uname";
        document.getElementById("Message1").innerHTML="* Please fill uname";
 
        document.getElementById("name").style.borderColor="red";
      }
       if(b==="")
      {
        errormessage+="Please enter Country";
        document.getElementById("Message2").innerHTML="* Please fill country";
 
        document.getElementById("Country").style.borderColor="red";
      }
       if(c==="")
      {
        errormessage+="Please enter State";
        document.getElementById("Message3").innerHTML="* Please fill state";
 
        document.getElementById("State").style.borderColor="red";
      }
       if(d==="")
      {
        errormessage+="Please enter City";
        document.getElementById("Message4").innerHTML="* Please fill city";
 
        document.getElementById("City").style.borderColor="red";
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