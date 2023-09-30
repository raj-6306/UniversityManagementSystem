<?php include("includes/header.php");
include("includes/db_connect.php");
global $con; 
$sql="select * from Student order by st_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error());
?>
<div align="center" style="color:#663333; background-color:#66FFCC;"><?=$_REQUEST['msg']?></div>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="marks_view" id="marks_view" onsubmit="return valid_student(this);">
<table width="1443" border="1" class="tbl">
<tr>
        <th width="62"><div align="center">Id</div></th>
	<th width="62"><div align="center">Name</div></th>
    <th width="137"><div align="center">Father Name </div></th>
    <th width="115"><div align="center">Phone No. </div></th>
    <th width="75"><div align="center">Gender</div></th>
    <th width="75"><div align="center">Course</div></th>
    <th width="197"><div align="center">Action</div></th>
  </tr>
  <?php 
  while($data=mysqli_fetch_assoc($rs)){ 
     $sql1="select * from exam where exam_course='$data[st_course]'";
   $rs1=mysqli_query($con,$sql1)or die(mysqli_error($con));
   if(mysqli_num_rows($rs1)){
  ?>
  <tr>
    <td><div align="center"><?=$data[st_id]?></div></td>
  <td><div align="center"><?=$data[st_name]?></div></td>
    <td><div align="center"><?=$data[st_father]?></div></td>
    <td><div align="center"><?=$data[st_phone]?></div></td>
    <td><div align="center"><?=$data[st_gen]?></div></td>
     <td width="197"><div align="center"><?=get_single_value("courses","course_id","course_name",$data[st_course]);?></div></td>
	 
	     <td width="197"><div align="center"><a href="marks_add.php?st_id=<?=$data['st_id']?>"><input type="button" value="MarksAdd" class="btn"/></a>||<a href="result_view.php?st_id=<?=$data['st_id']?>"><input type="button" value="Result" class="btn"/></a>||<a href="marks_add.php?st_id=<?=$data['st_id']?>"><input type="button" value="MarksEdit" class="btn"/></a></div></td>
	</tr>
	<?php }}?>
	</table>
	</form>
<div align="center"><?php include_once("includes/footer.php"); ?></div>