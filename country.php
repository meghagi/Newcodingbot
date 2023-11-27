<?php
include'dbcon.php';
if($_POST['type']=="")
{
$sql="SELECT * FROM countries"; 
$result=mysqli_query($con, $sql);
$str="";
while($row=mysqli_fetch_array($result))
{
$str.="<option value='{$row['id']}'>{$row['name']}</option>";
}
}
else if($_POST['type']=="stateData")
{
$sql="SELECT * FROM states where country_id	={$_POST['id']}"; 
$result=mysqli_query($con, $sql);
$str="";
while($row=mysqli_fetch_array($result))
{
$str.="<option value='{$row['s_id']}'>{$row['state']}</option>";
}
}

echo $str;
?>