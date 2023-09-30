<?php 
session_start();
include("../includes/db_connect.php");
 global $con;
 $sql="select * from fees where fees_st_id=$_SESSION[stu_id]";
 $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
 $data=mysqli_fetch_assoc($rs);
 $sql1="select * from student where st_id=$_SESSION[stu_id]";
$rs1=mysqli_query($con,$sql1)or die(mysqli_error($con));
$data1=mysqli_fetch_assoc($rs1);

$sql2="select * from exam";
$rs2=mysqli_query($con,$sql2)or die(mysqli_error($con));
$data2=mysqli_fetch_assoc($rs2);
if($data1[st_course]==$data2[exam_course]){

  if($data['fees_balance']=="null"){
 header("location:../admit_card.php?st_id=$_SESSION[stu_id]");
 }else{
 header("location:../stu_Zon.php?msg=first Payment all Fees ");
 }
 }else{
 header("location:../stu_Zon.php?msg=Not Exam For this Course ");
 }
?>