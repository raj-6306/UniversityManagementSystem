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
if($_REQUEST['act']=="recover")
{
pass_recover();
}
if($_REQUEST['act']=="update")
{
pass_update();
}
if($_REQUEST['act']=="fac_update")
{
fac_pass_update();
}

function user_login(){
if($_REQUEST['opt']=='admin'){
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
else
{
$R=$_REQUEST;
global $con;

$pass=md5($R['pass']);

$sql="select * from facality where f_name='$R[user]' and f_pass='$pass' and f_status='true'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
$_SESSION['f_id']=$data[f_id];
header("location:../facality_wel.php?msg=$data[f_name]");
}else{
header("location:../index.php?msg=Try Again!!");
}
}
}
##################### Logout ################
function user_logout(){
if(isset($_SESSION['login_user'])){
$_SESSION['login_user']="";
session_destroy();
header("location:../index.php?msg=User Lodgged Out!");
}
}
#######################Password Recovery#################
function pass_recover(){
global $con;
$R=$_REQUEST;
$user=md5($R['uname']);
$ans=md5($R['seq_ans']);
$que=md5($R['seq_que']);
$sql="select * from login where login_user='$user'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if($rs){
if($ans==$data['seq_ans'] && $que==$data['seq_id']){
header("location:../update_pass.php?user=$user");
}else{
header("location:../pass_rec.php?msg=wrong user Name");
}
}
}
######################Update Password#################
function pass_update(){
global $con;
$R=$_REQUEST;
#echo $R['$user'];
#$user=md5($R['user']);
$pass=md5($R['pass']);
$cpass=md5($R['cpass']);
//echo $user;
//die;
if($pass==$cpass){
$sql="UPDATE `login` SET `login_pass` = '$pass',`login_cpass` = '$cpass' WHERE 
`login_user`='$_REQUEST[user]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));

if($rs){
header("location:../index.php?msg=Update successfully");
}else{
header("location:../index.php?msg=Try Again!!");
}
}
}
#####################fac Update###################
function fac_pass_update(){
global $con;
$R=$_REQUEST;
#echo $R['$user'];
#$user=md5($R['user']);
$pass=md5($R['pass']);
$cpass=md5($R['cpass']);
//echo $user;
//die;
$sql="select * from facality where f_id='$_SESSION[f_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if($data['f_que']==$R['seq_que'] && $data['f_ans']==$R['seq_ans']){
if($pass==$cpass){
$sql="UPDATE `facality` SET `f_pass` = '$pass',`f_cpass` = '$cpass' WHERE 
`f_id`=$_SESSION[f_id]";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));

if($rs){
header("location:../facality_wel.php?msg=password Update successfully");
}else{
header("location:../index.php?msg=Try Again!!");
}
}
}else{
header("location:../index.php?msg=Security Question And Answer Not Match");
}
}
?>