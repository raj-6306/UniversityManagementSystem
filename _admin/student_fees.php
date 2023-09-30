<?php include("includes/header.php");
global $con;
$sql="select * from Student order by st_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error());
?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="student_fees" id="student_fees" >
  <table width="1441" border="1" class="tbl">
    <tr>
      <td width="263" height="26"><div align="center">Name</div></td>
      <td width="313"><div align="center">Father Name </div></td>
      <td width="325"><div align="center">Gender</div></td>
      <td width="305"><div align="center">Course</div></td>
      <td width="201"><div align="center">Action</div></td>
    </tr>
	<?php
  	while($data=mysqli_fetch_assoc($rs)){
?>
	<tr>
      <td><div align="center"><?=$data[st_name]?></div></td>
      <td><div align="center"><?=$data[st_father]?> </div></td>
      <td><div align="center"><?=$data[st_gen]?></div></td>
      <td><div align="center"><?=get_single_value("courses","course_id","course_name",$data[st_course])?></div></td>
      <td><div align="center"><a href="pay_fees.php?st_id=<?=$data['st_id']?>"><input type="button"value="Payfees" class="btn"/></a>||<a href="fees_details.php?st_id=<?=$data['st_id']?>"><img src="images/details.png" alt="Details" title="Details" height="20" width="20"/></a>|<a href="javascript:fees_delete(<?=$data['st_id']?>)"><img src="images/delete.png" alt="Delete" title="Delete" height="25" width="25"/></a></div></td>
    </tr>
	<?php } ?>
  </table>
  <input type="hidden" name="act"/>
<input type="hidden" name="st_id"/>
</form>
<?php include("includes/footer.php");?>
