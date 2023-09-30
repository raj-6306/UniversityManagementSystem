<?php include('includes/header.php');
global $con;
$sql="select * from exam where exam_id='$_REQUEST[exam_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 46px;
}
-->
</style>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="exam_add" id="exam_add" onsubmit="return valid_exam(this);">
<center>
  <table width="364" height="408" border="1" class="tbl">
    <tr>
      <td height="61" colspan="2"><div align="center" class="style1">Exam Schedule </div></td>
      </tr>
    <tr>
      <td width="150" height="42"><div align="center">Eaxm Title: </div></td>
      <td width="198"><div align="center">
        <label>
        <input type="text" name="ex_title" value="<?=$data['exam_title']?>" />
        </label>
      </div></td>
    </tr>
    <tr>
      <td height="41"><div align="center">Exam Course: </div></td>
      <td><div align="center">
        <label>
        <select name="ex_course">
		<?= get_option_list("courses","course_id","course_name",$data['exam_course'])?>
        </select>
        </label>
      </div></td>
	  
    </tr>
    <tr>
      <td height="47"><div align="center">Exam Subject : </div></td>
      <td><div align="center">
        <select name="ex_subject">
		<?= get_option_list("subject","subject_id","subject_name",$data['exam_subject'])?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Exam Date : </div></td>
      <td><div align="center">
        <input type="date" name="ex_date" value="<?=$data['exam_date']?>"/>
        <label></label>
      </div></td>
    </tr>
    <tr>
      <td height="62"><div align="center">Exam Shift : </div></td>
      <td><div align="center">
        <label>
        <input name="ex_shift" type="radio" value="Morning(10am-1pm)" <?php if($data['exam_shift']=="Morning(10am-1pm)") echo "checked";?>/>
        </label>
      Morning(10am-1pm)<br />
      <input name="ex_shift" type="radio" value="Evening(2pm-5pm)" <?php if($data['exam_shift']=="Evening(2pm-5pm)")echo "checked";?>/>
      Evening(2pm-5pm)
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Exam Desc: </div></td>
      <td><div align="center">
        <label>
        <textarea name="ex_desc"><?=$data['exam_desc']?></textarea>
        </label>
      </div></td>
    </tr>
    <tr>
      <td height="43" colspan="2"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Submit" class="btn"/>
        </label>
		<label>
        <input type="submit" name="cancel" value="Cancel" class="btn" style='background-color:red;'/>
        </label>
 </div>      </td>
      </tr>
  </table>
 
 <input type="hidden" name="act" value="exam_Add"/>

  <input type="hidden" name="exam_id" value="<?=$data['exam_id']?>"/>
   </center>
</form>