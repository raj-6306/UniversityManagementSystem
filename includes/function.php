<?php
include("db_connect.php");
function get_option_list($table,$col_id,$col_name,$sel){
global $con;
$sql="select * from $table order by $col_id";
$option_list="<option value='0'>Plz Select</option>";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
if($data[$col_id]==$sel){
$option_list.="<option value='$data[$col_id]'selected>$data[$col_name]</option>";
}
else{
$option_list.="<option value='$data[$col_id]'>$data[$col_name]</option>";
}
}
return $option_list;
}
###################Function For Checkbox##########################
function get_checkbox_list($table,$col_id,$col_name,$name,$sel){
global $con;
$sql="select * from $table order by $col_id";
$check_list="";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$sel=explode(",",$sel);
while($data=mysqli_fetch_assoc($rs)){
if(in_array($data[$col_id],$sel))
$check_list.="<input type='checkbox' checked name='$name' value='$data[$col_id]'>$data[$col_name]";
else
$check_list.="<input type='checkbox' name='$name' value='$data[$col_id]'>$data[$col_name]";
}
return $check_list;
}
####################Get Single Value##################
function get_single_value($table,$col_id,$col_name,$sel){
global $con;
$sql="select $col_name from $table where $col_id='$sel'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
return $data[$col_name];
}
##################Get Multi value##################
function get_multi_values($table,$col_id,$col_name,$sel){
global $con;
$sql="select $col_name from $table where $col_id in($sel)";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$multi_value="";
while($data=mysqli_fetch_assoc($rs)){
$multi_value.=$data[$col_name].",";
}
return $multi_value;
}
?>