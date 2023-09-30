<?php
include("../includes/db_connect.php");
$q=$_REQUEST['q'];
global $con;
if(!empty($q)){
$sql="select * from state where state_country_id=$q";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$sta="<option value='0'>plz select</option>";
while($data=mysqli_fetch_assoc($rs)){
$sta.="<option value=$data[state_id]>$data[state_name]</option>";
}
echo $sta;	
}
?>