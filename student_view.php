<?php include("includes/header.php"); ?>
<div align="center" style="color:#663333; background-color:#66FFCC;"><?=$_REQUEST['msg']?></div>
<?php
global $con;
$sql="select * from Student order by st_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error());
?>
<input type="text" name="st_srearch" id="st_srearch"/>
<input type="submit" value="search"/>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="student_view" id="student_view" onsubmit="return valid_student(this);">
<table width="1443" border="1" class="tbl">
  <tr>
  <td colspan="18" align="right"><a href="student_add.php"><input type="button"value="StudentAdd" class="btn"/></a> ||
  <a href="javascript:student_multi_delete()"><input type="button"value="DeleteAll" class="btn"/></a>|| <a href="javascript:printOut();"><img src="images/print.png" alt="Edit" title="Edit" height="18" width="20"/></a></td>
  </tr>
  <tr class="tr_view">
  <td width="57"><div align="center"><input type="checkbox" onclick="selectAll(this)"/></div></td>
    <td width="62"><div align="center">Name</div></td>
    <td width="137"><div align="center">Father Name </div></td>
    <td width="115"><div align="center">Phone No. </div></td>
    <td width="56"><div align="center">Email</div></td>
    <td width="75"><div align="center">Gender</div></td>
    <td width="56"><div align="center">DOB</div></td>
    <td width="57"><div align="center">DOA</div></td>
    <td width="81"><div align="center">Pincode</div></td>
    <td width="145"><div align="center">Local Address</div></td>
    <td width="202"><div align="center">Parmanent Address </div></td>
    <td width="121"><div align="center"> Image </div></td>
    <td width="197"><div align="center">Action</div></td>
  </tr>
  <?php
  #$i=0;
  	while($data=mysqli_fetch_assoc($rs)){
	/*if($i%2==0)
	color='#CCC';
	else
	color='#999';
	i++;*/
  ?>
  <tr class="tr_view">
    <td><div align="center">
      <input type="checkbox" name="st_multi_id[]" id="st_multi_id[]" value="<?=$data[st_id]?>" /></td>
    <td><div align="center"><?=$data[st_name]?></div></td>
    <td><div align="center"><?=$data[st_father]?></div></td>
    <td><div align="center"><?=$data[st_phone]?></div></td>
    <td><div align="center"><?=$data[st_email]?></div></td>
    <td><div align="center"><?=$data[st_gen]?></div></td>
    <td><div align="center"><?=$data[st_dob]?></div></td>
    <td><div align="center"><?=$data[st_doa]?></div></td>
    <td><div align="center"><?=$data[st_pincode]?></div></td>
    <td><div align="center"><?=$data[st_address1]?></div></td>
    <td><div align="center"><?=$data[st_address2]?> </div></td>
    <td><div align="center"><a href="uploads/<?=$data[st_image]?>" ><img src="uploads/<?=$data[st_image]?>" height="50"  width="50" border="2" /></a> </div></td>
    <td><div align="center"><a href="student_add.php?st_id=<?=$data['st_id']?>"><img src="images/Edit.png" alt="Edit" title="Edit" height="20" width="20"/></a>|<a href="javascript:student_delete(<?=$data[st_id]?>)"><img src="images/delete.png" alt="Delete" title="Delete" height="20" width="20"/></a>|<a href="student_details.php?st_id=<?=$data['st_id']?>" ><img src="images/details.png" alt="Details" title="Details" height="20" width="20"/></a> &nbsp;
	<?php 
	$sql1="select * from exam where exam_course=$data[st_course]";
$rs1=mysqli_query($con,$sql1)or die(mysqli_error($con));
$data1=mysqli_fetch_assoc($rs1);
#echo $data1['exam_date'];
#echo date('Y-m-d');
	?>
	
	<a href="lib/admit_cardDB.php?st_id=<?=$data['st_id']?>"><?php if(($data1)&&(date('Y-m-d'))!=($data1['exam_date'])) echo"<input type='button' value='AdmitCard' class='btn1'/>"?></a></div></td>
  </tr>
 	<?php }?>
	
</table>
<input type="hidden" name="act2" value="admit_card1"/>
<input type="hidden" name="act"/>
<input type="hidden" name="st_id"/>
</form>
<?php include("includes/footer.php");?>