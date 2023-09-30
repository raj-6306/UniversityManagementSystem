<?php 
include("../includes/db_connect.php");
$q=$_REQUEST['q'];
global $con;
$sql="UPDATE `university`.`facality` SET `f_status` = 'true' WHERE `f_id` ='$q'";
#echo "$sql";
$rs=mysqli_query($con,$sql) or  die(mysqli_error($con));
?>