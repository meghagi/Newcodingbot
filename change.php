<?php
include('dbcon.php');
if(isset($_POST['admin_btn_set']))
{
	echo "hello";
	  $id = $_POST['id'];
    
		$sql= "UPDATE  user set ROLE= 'admin' where id=$id ";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo "Record update";
		}
}

?>