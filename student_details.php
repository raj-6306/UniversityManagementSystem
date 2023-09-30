<?php
session_start();
 include("includes/header1.php");  
$sql="select * from student where st_id='$_SESSION[stu_id]'";
global $con;
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
#echo "$_REQUEST[st_id]";
?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return valid_student(this);">
	<center>
  <table width="525" border="1" class="tbl" style="background-color:#CCCCCC;">
    <tr>
      <td colspan="2"><div align="center"><font size=+4 color=red>Student Details</font> </div></td>
    </tr>
    <tr>
      <td width="270" height="38">Student Name</td>
      <td width="239"><?=$data[st_name]?></td>
    </tr>
    <tr>
      <td height="34">Student Father Name</td>
      <td><?=$data[st_father]?></td>
    </tr>
    <tr>
      <td height="33">Student Phone Number</td>
      <td><?=$data[st_phone]?></td>
    </tr>
    <tr>
      <td height="33">Student Email</td>
      <td><?=$data[st_email]?></td>
    </tr>
    <tr>
      <td height="31">Student Gender</td>
      <td><?=$data[st_gen]?></td>
    </tr>
    <tr>
      <td height="29">Student Qualification</td>
      <td><?=get_multi_values("qualification","qual_id","qual_name",$data[st_qual])?></td>
    </tr>
    <tr>
      <td height="34">Student DOB</td>
      <td><?=$data[st_dob]?></td>
    </tr>
    <tr>
      <td height="30">Student DOA</td>
      <td><?=$data[st_doa]?></td>
    </tr>
    <tr>
      <td height="34">Student Course</td>
      <td><?=get_single_value("courses","course_id","course_name",$data[st_course])?></td>
    </tr>
    <tr>
      <td height="36">Student Category</td>
      <td><?=get_single_value("category","category_id","category_name",$data[st_cat])?></td>
    </tr>
    <tr>
      <td height="29">Student Country</td>
      <td><?=get_single_value("country","country_id","country_name",$data[st_country])?></td>
    </tr>
    <tr>
      <td height="38">Student State</td>
      <td><?=get_single_value("state","state_id","state_name",$data[st_state])?></td>
    </tr>
    <tr>
      <td height="37">Student Pincode </td>
      <td><?=$data[st_pincode]?></td>
    </tr>
    <tr>
      <td height="36">Student Image </td>
      <td><img src="uploads/<?=$data[st_image]?>" height="30px" width="30px" /></td>
    </tr>
    <tr>
      <td height="33">Student Local Address </td>
      <td><?=$data[st_address1]?></td>
    </tr>
    <tr>
      <td height="34">Student Parmanent Address </td>
      <td><?=$data[st_address2]?></td> 
    </tr>
	<tr>
      <td colspan="2"><div align="center"> <a><img src="images/arrow.png" alt="arrow" title="Back Arrow" height="20" width="20" onclick="javascript:history.back()"/></a><a href="javascript:printOut();"><img src="images/print.png" alt="Edit" title="Edit" height="18" width="20"/></a></div></td>
    </tr>
  </table>
  </center>
  <input type="hidden" name="act" value="save_student"/>
</form>
<?php #include_once("includes/footer.php"); ?>

