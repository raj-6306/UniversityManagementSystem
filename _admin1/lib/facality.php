<?php 
session_start();
include("../includes/db_connect.php");
 if($_REQUEST['act']=="fac_add")
{
fac_save();
}
if($_REQUEST['act']=="facality_delete"){
fac_delete();
}
if($_REQUEST['act']=="sign_in"){
fac_img();
}
function fac_save(){
global $con;
$R=$_REQUEST;
$name=$R[f_name];
$str=substr($name,0,3);
$pass=$str.$R[f_dob];
$cpass=md5($pass);

if($_SESSION['f_id']){
$sql="UPDATE `university`.`facality` SET `f_name` = '$R[f_name]',`f_dob` = '$R[f_dob]',`f_email` = '$R[f_eamil]',`f_phone` = '$R[f_phone]',`f_gen` = '$R[f_gen]',`f_cat` = '$R[f_cat]',`f_qual` = '$R[f_qual]',`f_ex` = '$R[f_ex]',`f_Aoi` = '$R[f_Aoi]',`f_desi` = '$R[f_desi]',`f_net` = '$R[f_net]',`f_phd` = '$R[f_phd]',`f_que` = '$R[f_seq]',`f_ans` = '$R[f_ans]' WHERE `f_id`='$_SESSION[f_id]'" ;
$msg="Record is Updated";
}else{
$img="upload_fac/login.png";
$_SESSION['f_id']=="";
session_destroy();
$sql="INSERT INTO `university`.`facality` (`f_name` ,`f_dob` ,`f_email` ,`f_phone` ,`f_gen` ,`f_cat` ,`f_qual` ,`f_ex` ,`f_Aoi` ,`f_desi` ,`f_net` ,`f_phd` ,`f_status`,`f_image`,`f_que`,`f_ans`,`f_pass`,`f_cpass`)VALUES ('$R[f_name]', '$R[f_dob]', '$R[f_eamil]', '$R[f_phone]', '$R[f_gen]', '$R[f_cat]', '$R[f_qual]', '$R[f_ex]', '$R[f_Aoi]', '$R[f_desi]', '$R[f_net]', '$R[f_phd]', 'false', '$img','$R[f_seq]','$R[f_ans]','$cpass','$cpass')";
$msg="Your Application Submited Successfully Your Password is Your name strting 3later and DOB(yyyy-mm-dd)";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
//echo $rs;
if($rs){
header("location:../facultiy_add.php?msg=$msg");
}
}
########################Fac Delete##############
function fac_delete(){
global $con;
$R=$_REQUEST;
$sql="delete from facality where f_id='$R[f_id1]'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	if($rs){
	header("location:../facality_req.php?msg=facality Record is Deleted !!");	
	}
}
########################Fac Image##############
function fac_img(){	
global $con;
$R=$_REQUEST;
$id=$R['id'];
$f_image=$_FILES['f_image']['name'];
//if($st_image){	
$f_image_arr=explode(".",$f_image);
$f_image=$f_image_arr[0].time().".".$f_image_arr[1];
move_uploaded_file($_FILES['f_image']['tmp_name'],"../upload_fac/".$f_image);
$sql="UPDATE `university`.`facality` SET `f_image` = '$f_image' where f_id=$id";

$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
//}
if($rs){
	header("location:../facality_wel.php?msg=dp UPdated Successfully !!");	
	}
	}
?>