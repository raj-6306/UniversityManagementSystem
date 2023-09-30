<?php
include("../includes/db_connect.php");
$q=$_REQUEST['q'];

if(!empty($q)){
global $con;
$sql="select * from subject where subject_id=$q";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
echo $data[sub_total_marks]."-";
echo $data[sub_practical_marks];
}
?>