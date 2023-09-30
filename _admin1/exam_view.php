<?php include("includes/header.php");?>
<div align="center" style="color:#663333; background-color:#66FFCC;"><?=$_REQUEST['msg']?></div>
<?php 
$sql="select * from exam order by exam_id";
global $con;
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
#print_r($data);
?>
<style type="text/css">
<!--
.style1 {font-size: 50px}
-->
</style>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="exam_view" id="exam_view">

  <table width="1469" border="1" class="tbl">
  <tr>
  <td colspan="18" align="right"><a href="exam_add.php"><input type="button"value="ExamAdd" class="btn"/></a></td>
  </tr>
  <tr>
      <td colspan="7"><div align="center" class="style1"><font color='#006699'>Exam Details</font> </div></td>
    </tr>
    <tr>
      <th width="166"><div align="center">Exam Title </div></th>
      <th width="218"><div align="center">Exam Course </div></th>
      <th width="234"><div align="center">Exam Subject </div></th>
      <th width="217"><div align="center">Exam Date</div></th>
      <th width="258"><div align="center">Exam Shift </div></th>
      <th width="203"><div align="center">Exam Desc </div></th>
      <th width="127"><div align="center">Action</div></th>
    </tr>
	<?php
  	while($data=mysqli_fetch_assoc($rs)){
	
?>
	  <tr>
      <td><div align="center"><?=$data['exam_title']?></div></td>
      <td><div align="center"><?=get_single_value("courses","course_id","course_name",$data['exam_course'])?></div></td>
      <td><div align="center"><?=get_single_value("subject","subject_id","subject_name",$data['exam_subject'])?></div></td>
      <td><div align="center"><?=$data['exam_date']?></div></td>
      <td><div align="center"><?=$data['exam_shift']?></div></td>
      <td><div align="center"><?=$data['exam_desc']?></div></td>
      <td><div align="center"><a href="exam_add.php?exam_id=<?=$data['exam_id']?>"><img src="images/Edit.png" alt="Edit" title="Edit" height="25" width="25"/></a>|<a href="javascript:delete_exam(<?=$data['exam_id']?>)"><img src="images/delete.png" alt="Delete" title="Delete" height="25" width="25"/></a></div></td>
    </tr>
	<?php }?>
  </table>
  <input type="hidden" name="act"/>
  <input type="hidden" name="exam_id"/>
</form>
<div align="center"><?php include_once("includes/footer.php"); ?></div>
