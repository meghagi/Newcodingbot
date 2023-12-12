<?php
include'dbcon.php';
if($_POST['type']=="")
{

    
$sql="SELECT * FROM user where Role='teacher'"; 
$result=mysqli_query($con, $sql);
$str="";
while($row=mysqli_fetch_array($result))
{
$str.="<option value='{$row['name']>{$row['name']}</option>";
}
}
else if($_POST['type']=="teacherData")
{
$sql="SELECT * FROM  user where subject={$_POST['id']}"; 
$result=mysqli_query($con, $sql);
$str="";
while($row=mysqli_fetch_array($result))
{
$str.="<option value='{$row['subject']}'>{$row['subject']}</option>";
}
}
?>