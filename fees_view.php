<?php include("includes/header.php");
global $con;

$sql="select * from fees order by fees_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
#$fees=get_single_value("fees","fees_id","fees_balance",$data['fees_st_id']);
?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="fees_view" id="fees_view" onsubmit="return valid_student_fees(this);">
  <table width="1470" border="1" class="tbl">
    <tr>
      <td width="120" height="26"><div align="center">Fees Id</div></td>
      <td width="150"><div align="center">Student Id</div></td>
	    <td width="150"><div align="center">Student Name</div></td>
		  <td width="150"><div align="center">Student Father</div></td>
      <td width="151"><div align="center">Fees Course</div></td>
      <td width="136"><div align="center">Fees Total</div></td>
      <td width="106"><div align="center">Fees Amount</div></td>
	  <td width="106"><div align="center">Fees Balance</div></td>
      <td width="96"><div align="center">Fees Date</div></td>
	  <td width="96"><div align="center">Fees Desc</div></td>
	  <td width="139"><div align="center">Action</div></td>

	</tr>
	<?php
  	while($data=mysqli_fetch_assoc($rs)){
	
?>
	<tr>
      <td><div align="center"><?=$data['fees_id']?></div></td>
      <td><div align="center"><?=$data['fees_st_id']?> </div></td>
	  <td><div align="center"><?=$data['fees_st_name']?> </div></td>
	  <td><div align="center"><?=$data['fees_st_father']?> </div></td>
      <td><div align="center"><?=get_single_value("courses","course_id","course_name",$data['fees_course'])?></div></td>
      <td><div align="center"><?=$data['fees_total']?></div></td>
	  <td><div align="center"><?=$data['fees_amount']?></div></td>
	  <td><div align="center"><?=$data['fees_balance']?></div></td>
	  <td><div align="center"><?=$data['fees_date']?></div></td>
	  <td><div align="center"><?=$data['fees_desc']?></div></td>
	  <td><div align="center"><a href="pay_fees.php?st_id=<?=$data[fees_st_id]?>"><input type="button"value="Payfees" class="btn"/></a></div></td>
    </tr>
	<?php } ?>
  </table>
<!--  <input type="hidden" name="act3"/>
<input type="hidden" name="st_id"/>-->
</form>
