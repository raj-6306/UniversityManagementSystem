<?php include("../includes/db_connect.php");
 global $con;
 $sql="select * from fees where fees_st_id='$_REQUEST[st_id]'";
 $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
 $data=mysqli_fetch_assoc($rs);
 #print_r($data);
 #echo $data['fees_balance'];
 if($data['fees_balance']=="null"){
 header("location:../admit_card.php?st_id=$_REQUEST[st_id]");
 }else{
 header("location:../pay_fees.php?st_id=$_REQUEST[st_id]");
 }
?>