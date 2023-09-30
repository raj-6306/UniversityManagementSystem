<?php include("../includes/db_connect.php");
if($_REQUEST['act']=="save_marks")
{
save_marks();
}
########################function marks Add################
function save_marks(){
global $con;
$R=$_REQUEST;
$total=$R[m_obtain]+$R[m_pobtain];
$sql="INSERT INTO `university`.`marks` (`m_st_id` ,`m_sub` ,`m_theory` ,`m_practical` ,`m_total`)VALUES ('$R[m_id]', '$R[m_subject]', '$R[m_obtain]', '$R[m_pobtain]', '$total')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs)
header("location:../marks_view.php?msg=Marks added Successfully!!");
}
?>