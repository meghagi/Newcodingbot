<?php
session_start();
if(session_destroy())
{
echo"Logout Succefully";
header('location:login.php');
}
?>