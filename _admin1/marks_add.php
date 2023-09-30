<?php include("includes/header.php");
global $con;
$sql="Select * from Student where st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<style type="text/css">
<!--
.style1 {font-size: 36px;
color:#006699;}
.style2 {font-size: +4}
-->
</style>
<body onLoad="find_sub1(<?=$data[st_course]?>)" >
<form id="form1" name="form1" method="post" action="lib/marks.php" onSubmit="return valid_marks(this);">
  <center>
    <table width="466" border="1" class="tbl">
      <tr>
        <td colspan="2"><div align="center" class="style1">Marks Add </div></td>
      </tr>
      <tr>
        <td width="201" height="36"><div align="left">ID:</div></td>
        <td width="228"><div align="left">
            <label>
            <input type="text" name="m_id" value="<?=$data[st_id]?>" readonly="readonly"/>
            </label>
        </div></td>
      </tr>
      <tr>
        <td height="34"><div align="left">Name:</div></td>
        <td><div align="left">
            <input type="text" name="m_name" value="<?=$data[st_name]?>" disabled="disabled"/>
        </div></td>
      </tr>
      <tr>
        <td height="42"><div align="left">Father Name: </div></td>
        <td><div align="left">
            <input type="text" name="m_father" value="<?=$data[st_father]?>" disabled="disabled"/>
        </div></td>
      </tr>
      <tr>
        <td height="38"><div align="left">Gender:</div></td>
        <td><div align="left">
            <label>
            <input name="m_gen" type="radio" value="Male"  <?php if($data['st_gen']=="male")echo "checked";?> />
              Male
              <input name="m_gen" type="radio" value="Female"  <?php if($data['st_gen']=="female")echo "checked";?>/>
              Female </label>
        </div></td>
      </tr>
      <tr>
        <td height="38"><div align="left">Course:</div></td>
        <td><div align="left">
            <label>
            <select name="m_course">
              <?= get_option_list("courses","course_id","course_name",$data['st_course'])?>
            </select>
            </label>
        </div></td>
      </tr>
	  <?php
	  if($_REQUEST['st_id']){
	  global $con;
	  $sql="Select * from marks where m_st_id='$_REQUEST[st_id]'";
	  $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	  $data=mysqli_fetch_assoc($rs);
	  }
	  ?>
     <tr>
      <td height="39"><div align="left">Exam Subject : </div></td>
      <td><div align="left">
        <select name="m_subject" id="m_subject" onChange="find_marks(this.value)">
        </select>
      </div></td>
    </tr>
	
	<tr>
        <td height="40"><div align="left">Total Marks:</div></td>
        <td><div align="left">
            <input type="text" name="m_total" id="m_total" disabled="disabled"/>
        </div></td>
      </tr>
	  <tr>
        <td height="38"><div align="left">Obtain Marks:</div></td>
        <td><div align="left">
            <input type="text" name="m_obtain" id="m_obtain" value="<?=$data[m_theory]?>"/>
        </div></td>
      </tr>
	  <tr>
        <td height="42"><div align="left">Practical Marks:</div></td>
        <td><div align="left">
            <input type="text" name="m_practical" id="m_practical" disabled="disabled"/>
        </div></td>
      </tr>
	   <tr>
        <td height="39"><div align="left">Practical Obtain Marks:</div></td>
        <td><div align="left">
            <input type="text" name="m_pobtain" id="m_pobtain" value="<?=$data[m_practical]?>" />
        </div></td>
      </tr>
	  
	  <tr>
        <td height="36" colspan="2">
          <div align="center">
            <label>
            <input type="submit" name="Submit" value="Save" class="btn"/>
            </label>
            <input type="reset" name="Submit2" value="Cancel" class="btn"/>
        </div></td>
	  </tr>
    </table>
  </center>
  <input type="hidden" name="act" value="save_marks"/>
</form>
</body>


