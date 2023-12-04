<?php
include('dbcon.php');
if(isset($_POST['student_btn_set']))
{
	echo "hello";
	  $id = $_POST['id'];
    
		$sql= "UPDATE  user set ROLE= 'student' where id=$id ";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo "Record update";
		}
}
if(isset($_POST['admission_btn_set']))
{
	echo "hello";
	  $id = $_POST['id'];
    
		$sql= "UPDATE  user set ROLE= 'admission' where id=$id ";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo "Record update";
		}
}

?>