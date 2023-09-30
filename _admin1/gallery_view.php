<?php 
include("includes/header2.php");
$sql="select * from gallery order by g_id";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
$img=explode(",",$data[g_name]);
foreach($img as $value){
?>
<style>
#mydiv{
height:200px;
width:300px;
box-shadow:2px 2px 3px 4px #003333;

/*
display:inline-block;
margin-top:80px;
margin-left:50px;
margin-bottom:50px;
*/
background-color:white;
text-align:center;
overflow:hidden;
}
</style>
<div align="center" id="mydiv"><a href="uploads_gallery/<?=$value?>" ><img src="uploads_gallery/<?=$value?>" /></a></div>

<?php }}?>