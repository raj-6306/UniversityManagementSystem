<?php
session_start();
include("../includes/db_connect.php");
if($_REQUEST['act']=="sign_in")
{
user_login();
}
if($_REQUEST['act']=="Logout")
{
user_logout();
}
function user_login(){
$R=$_REQUEST;
global $con;
$user=md5($R['user']);
$pass=md5($R['pass']);

$sql="select * from login where login_user='$user' and login_pass='$pass'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
$_SESSION['login_user']=$R['user'];
header("location:../student_view.php?msg=Login SuccessFull!!");
}else{
header("location:../index.php?msg=Try Again!!");
}
}
##################### Logout ################
function user_logout(){
if(!isset($_SESSION['login_user'])){
$_SESSION['login_user']="";
session_destroy();
header("location:../index.php?msg=User Lodgged Out!");
}
}
?>