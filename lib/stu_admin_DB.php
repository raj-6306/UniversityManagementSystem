<?php
session_start();
include("../includes/db_connect.php");
if($_REQUEST['act']=="login"){
stu_login();
}
if($_REQUEST[act]=="Logout"){
stu_logout();
}
function stu_login(){
global $con;
$sql="select * from student where st_name='$_REQUEST[stu_name]' and st_dob='$_REQUEST[stu_dob]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
$_SESSION['stu_id']=$data[st_id]; 
if(mysqli_num_rows($rs)){
header("location:../stu_Zon.php?msg=$_REQUEST[stu_name]");
}
else{
header("location:../stu_admin.php?msg=PLz Enter correct Info.");
}
}
#################Log out########################
function stu_logout(){
if(isset($_SESSION[stu_id])){
$_SESSION[stu_id]="";
session_destroy();
header("location:../stu_admin.php?msg=Log out Successfully");
}
}

?>