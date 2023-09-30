<?php 
include("includes/header.php");
#include("includes/db_connect.php");
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
background-color:white;
text-align:center;
overflow:hidden;
display:inline-block;
margin:20px 30px;
}
</style>
<div align="center" id="mydiv"><a href="_admin1/uploads_gallery/<?=$value?>" ><img src="_admin1/uploads_gallery/<?=$value?>" /></a></div>

<?php }}?>