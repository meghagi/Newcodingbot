<?php
$con=mysqli_connect('localhost','root','','schoolmgt');
if(!($con))
{
	echo "Server are not connect";
}
else
{
	echo"Server are connect";
}
?>