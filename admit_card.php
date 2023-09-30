<?php 
session_start();
include("includes/header1.php");
global $con;
$sql="select * from Student Where st_id='$_SESSION[stu_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<form action="" method="post" enctype="multipart/form-data" name="admit_card" id="admit_card">

<div id="form-container">

<div id="header"> Allhabad University 
<img  src="images/uni.png" id="logo"/>
</div>


  <div > <img src="uploads/<?=$data['st_image']?>" id="img3"/></div>
<div id="container">
<table width="397" height="120" border="1" class="tbl">
<tr>
<td width="156"><div align="center">Student Name:</div></td>
<td width="225"><div align="center"><?=$data['st_name']?></div></td>
</tr>
<tr>
<td><div align="center">Father  Name:</div></td>
<td><div align="center"><?=$data['st_father']?></div></td>
</tr>
<tr>
<td><div align="center">Gender:</div></td>
<td><div align="center"><?=$data['st_gen']?></div></td>
</tr>
<tr>
<td><div align="center">course:</div></td> 
<td><div align="center"><?=get_single_value("courses","course_id","course_name",$data[st_course])?></div></td>
</tr>
<table width="400" border="1" class="tbl">
<tr>
<td width="33"><div align="center">SN.</div></td>
<td width="80"><div align="center">Subject</div></td>
<td width="83"><div align="center">Date</div></td>
<td width="100"><div align="center">Shift</div></td>
<td width="70"><div align="center">Desc.</div></td>
</tr>

<tr>
<?php
global $con;
$sql="select * from exam Where exam_course='$data[st_course]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
#print_r($data);
$i;
?>
<td width="33"><div align="center"><?=++$i;?></div></td>
<td width="80"><div align="center"><?=get_single_value("subject","subject_id","subject_name",$data['exam_subject'])?></div></td>
<td width="83"><div align="center"><?=$data[exam_date]?></div></td>
<td width="100"><div align="center"><?=$data[exam_shift]?></div></td>
<td width="70"><div align="center"</div><?=$data[exam_desc]?></td>
</tr>
<?php }?>
</table>
</table>
</div>
<div id="sub">
<a><img src="images/arrow.png" alt="arrow" title="Back Arrow" height="20" width="20" onclick="javascript:history.back()"/></a> 
<a href="javascript:printOut();"><img src="images/print.png" alt="Edit" title="Edit" height="18" width="20"/></a>

</div>
<p id="p"> 
<font color="red" size="+2">Important Information</font><br />
    1)Wear Mask in Exam.<br>
    2)You are not Allowed to bring Your electronic.<br>
    3)Do Not bring any Unauthorised Material in Exam Hall<br>
    4)Candidate will Maintain Discipline in the Exam Center<br>
    5)No candidate allow without admit card in exam center <br>
   
</p>	
</div>

</form>



