<?php
include("../includes/db_connect.php");
if($_REQUEST['act']=="save_student")
{
save_student();
}
if($_REQUEST['act']=="delete_student")
{
delete_student();
}
if($_REQUEST['act']=="student_multi_delete")
{	
student_multi_delete();
}
if($_REQUEST['act']=="fees_save")
{	
fees_save();
}
if($_REQUEST['act']=="fees_delete")
{	
fees_delete();
}
if($_REQUEST['act']=="exam_Add")
{	
exam_add();
}
if($_REQUEST['act']=="delete_exam")
{
delete_exam();
}
if($_REQUEST['act2']=="admit_card1")
{
admit_card();
}

function save_student(){
$R=$_REQUEST;
global $con;
$st_qual=implode(",",$R[st_qual]);
$st_image=$_FILES['st_image']['name'];
if($st_image){
$st_image_arr=explode(".",$st_image);
$st_image=$st_image_arr[0].time().".".$st_image_arr[1];
move_uploaded_file($_FILES['st_image']['tmp_name'],"../uploads/".$st_image);
}else{
$st_image=$R['st_image'];
}
if($R['st_id']){
$sql="UPDATE `student` SET `st_name` = '$R[st_name]',`st_father` = '$R[st_father]',`st_phone` = '$R[st_phone]',`st_email` = '$R[st_email]',`st_gen` = '$R[st_gen]',`st_qual` = '$st_qual',`st_dob` = '$R[st_dob]',`st_doa` = '$R[st_doa]',`st_course` = '$R[st_course]',`st_cat` = '$R[st_cat]',`st_country` = '$R[st_country]',`st_state` = '$R[st_state]',`st_pincode` = '$R[st_pincode]',`st_image` = '$st_image',`st_address1` = '$R[st_address1]',`st_address2` = '$R[st_address2]' WHERE `st_id` ='$R[st_id]'";
$msg="Record is Updated";
}
else
{
$sql="INSERT INTO `university`.`student` (`st_name` ,`st_father` ,`st_phone` ,`st_email` ,`st_gen` ,`st_qual` ,`st_dob` ,`st_doa` ,`st_course` ,`st_cat` ,`st_country`,`st_state`,`st_pincode`,`st_image`,`st_address1`,`st_address2`)VALUES ('$R[st_name]', '$R[st_father]', '$R[st_phone]', '$R[st_email]', '$R[st_gen]', '$st_qual', '$R[st_dob]', '$R[st_doa]', '$R[st_course]', '$R[st_cat]', '$R[st_country]', '$R[st_state]', '$R[st_pincode]', '$st_image', '$R[st_address1]', '$R[st_address2]')";
//echo $sql;
$msg="Record is Saved!!";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
//echo $rs;
if($rs)
header("location:../student_view.php?msg=$msg");
}
#####################Function For Delete########################

function delete_student(){
	$R=$_REQUEST;
    global $con;
	$sql="select st_image from student where st_id='$R[st_id]'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$data=mysqli_fetch_assoc($rs);
	if($data[st_image]){
	unlink("../uploads/".$data[st_image]);
	}
	$sql="delete from student where st_id='$R[st_id]'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	if($rs){
	header("location:../student_view.php?msg=Student Record is Deleted !!");	
	}
}
################# Multiple Delete #########################
function student_multi_delete(){
global $con;
$R=$_REQUEST;
if($R['st_multi_id']==0){
header("location:../student_view.php?msg=Plz Select First to Delete Continue........!!");	
die;
}
    foreach($R['st_multi_id'] as $st_id){
	$sql="select st_image from student where st_id='$st_id'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$data=mysqli_fetch_assoc($rs);
	if($data['st_image']){
	unlink("../uploads/".$data['st_image']);
	}
	$sql="delete from student where st_id='$st_id'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	}
	if($rs){
	header("location:../student_view.php?msg=All selected record is Deleted!!");	
	}
}
###################### fees info saved ####################
function fees_save(){
global $con;
$R=$_REQUEST;
$date=date("d-m-y");
$st_balance=$R['st_total']-$R['st_amount'];
if($_REQUEST['act2']==0){

$sql="select * from student where st_id='$R[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
$sql="INSERT INTO `university`.`fees` (`fees_st_id`,`fees_st_name`,`fees_st_father`,`fees_course` ,`fees_total` ,`fees_amount` ,`fees_balance` ,`fees_date` ,`fees_desc`)VALUES ('$data[st_id]' ,'$data[st_name]','$data[st_father]','$data[st_course]', '$R[st_total]', '$R[st_amount]', '$st_balance', '$date', '$R[st_desc]')";
}else{

$sql="select * from fees where fees_st_id='$R[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs) or die(mysqli_error($con));
$amount=$data['fees_amount'].",".$R['st_amount'];
$Date=$data['fees_date'].",".$date;
$desc=$data['fees_desc'].",".$R['st_desc'];
 if($st_balance==0)
 $st_balance="null";
$sql="UPDATE `fees` SET `fees_amount` = '$amount',`fees_balance` = '$st_balance',`fees_date` = '$Date',`fees_desc` = '$desc' WHERE `fees_st_id` ='$R[st_id]' ";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){ 
	header("location:../fees_view.php?");	
	}
}
#######################delete Fees #################

function fees_delete(){
global $con;
$R=$_REQUEST;
$sql="delete from fees where fees_st_id='$R[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){ 
	header("location:../fees_view.php?");	
	}
}
####################Exam Add################
function exam_add(){
global $con;
$R=$_REQUEST;
if($R['exam_id']){
$sql="UPDATE `university`.`exam` SET `exam_title` = '$R[ex_title]',`exam_course` = '$R[ex_course]',`exam_subject` = '$R[ex_subject]',`exam_date` = '$R[ex_date]',`exam_shift` = '$R[ex_shift]',`exam_desc` = '$R[ex_desc]' WHERE `exam_id` ='$R[exam_id]' ;";
}else{
$sql="INSERT INTO `university`.`exam` (`exam_title` ,`exam_course` ,`exam_subject` ,`exam_date` ,`exam_shift` ,`exam_desc`)VALUES ('$R[ex_title]', '$R[ex_course]', '$R[ex_subject]', '$R[ex_date]', '$R[ex_shift]', '$R[ex_desc]');";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
#echo "$rs";
if($rs){ 
	header("location:../exam_view.php?");	
	}
	}
################delete Exam details############
function delete_exam(){
//echo "jbuhd";
global $con;
$R=$_REQUEST;
$sql="delete from exam where exam_id='$R[exam_id]'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	if($rs){
	header("location:../exam_view.php?msg=Exam Record is Deleted !!");	
	}
}
####################Admit card###################
function admit_card(){
global  $con;
echo $_REQUEST['st_id'];
$sql="select * from fees where fees_st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error());
$data=mysqli_fetch_assoc($rs);

$amt=explode(",",$data['fees_amount']);
#print_r($amt);

#echo "$data1[exam_course]";
$sum=0;
foreach($amt as $v){
$sum+=$v;
}
if($sum==$data['fees_total']){
header("location:../student_view.php?$msg1='1'");
}else{
header("location:../student_view.php?$msg1='0'");
}
}
?>