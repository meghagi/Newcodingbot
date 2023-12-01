<?php
include "dbcon.php";

if(isset($_POST['delete_btn_set']))
	{
		$del_id = $_POST['id '];
    	echo $del_id;
		$sql= "DELETE FROM user WHERE id=$del_id ";
		$result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$name = $row['name'];
		$role = $row['Role'];
		
	}

?>
