<?php include("../includes/db_connect.php");
global $con;
$img=array();
$img=$_FILES['g_name']['name'];
if($img){
foreach($img as $key=>$v){
$g_image_arr=explode(".",$v);
$g_image=$g_image_arr[0].".".$g_image_arr[1];
move_uploaded_file($_FILES['g_name']['tmp_name'][$key],"../uploads_gallery/".$g_image);
}
}
$g_image=implode(",",$img);
$sql="INSERT INTO `university`.`gallery` (`g_name`)VALUES ('$g_image')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
header("location:../gallery_add.php?msg=Image Added Successfuly!!");
}
?>