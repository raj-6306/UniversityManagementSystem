<?php
include("../includes/db_connect.php");
$q=$_REQUEST['q'];
global $con;
if(!empty($q)){
$sql="select * from subject where subject_course_id=$q";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$opt="<option value='0'>plz select</option>";
while($data=mysqli_fetch_assoc($rs)){
$opt.="<option value=$data[subject_id]>$data[subject_name]</option>";
}
echo $opt;	
}
?>