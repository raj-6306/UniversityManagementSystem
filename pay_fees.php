<?php include("includes/header1.php");
global $con;
$sql="select * from student where st_id='$_SESSION[stu_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
##$fees=get_single_value("courses","course_id","course_total_fees",$data[st_course]);
?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="student_view" id="student_view" onsubmit="return valid_student_fees(this);">
<center>
  <table width="719" border="1" class="tbl">
    <tr>
      <td colspan="2"><div align="center"><font size=+4>Fees Add </font></div></td>
    </tr>
    <tr>
      <td width="342"><div align="center">ID</div></td>
      <td width="361"><div align="center"><?=$data['st_id']?></div></td>
    </tr>
    <tr>
      <td><div align="center">Name</div></td>
      <td><div align="center"><?=$data['st_name']?></div></td>
    </tr>
    <tr>
      <td><div align="center">Father Name </div></td>
      <td><div align="center"><?=$data['st_father']?></div></td>
    </tr>
    <tr>
      <td><div align="center">Gender</div></td>
      <td><div align="center"><?=$data['st_gen']?></div></td>
    </tr>
    <tr>
      <td><div align="center">Course</div></td>
      <td><div align="center"><?=get_single_value("courses","course_id","course_name",$data[st_course])?></div></td>
    </tr>
    <tr>
      <td><div align="center">Total</div></td>
        <label>
		<?php
		if($total=get_single_value("fees","fees_st_id","fees_balance",$data['st_id'])){
		$val=1;
		}else{
		$total=get_single_value("courses","course_id","course_total_fees",$data['st_course']);
		$val=0;
		}
		?>
		 <td><div align="center"><input type="text" value="<?=$total?>" readonly name="st_total" id="st_total"/>
        </label>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Amount</div></td>
      <td><div align="center">
        <label>
        <input type="text" name="st_amount" id="st_amount" reduired <?=($total=='null')?>/>
        </label>
      </div></td>
    </tr>
	
    <tr>
      <td><div align="center">Desciption</div></td>
      <td><div align="center">
        <label>
        <textarea name="st_desc"></textarea>
        </label>
      </div></td>
    </tr>
	<tr>
      <td colspan="2"><div align="center"><input type="submit" value="Save" class="btn"/>
	  <input type="button" value="Cancel" class="btn" style='background-color:red;' onclick="javascript:history.back();"/></div></td>
    </tr>
  </table>
  </center>
  <input type="hidden" name="act" value="fees_save"/>
 <input type="hidden" name="act2" value="<?=$val?>"/>
 <input type="hidden" name="st_id" value="<?=$data['st_id']?>"/>
</form>
<?php #include("includes/footer.php");?>