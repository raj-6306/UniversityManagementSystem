<?php
session_start(); 
include("includes/function.php");
include("includes/db_connect.php");
global $con;
$sql="select * from facality where f_id='$_SESSION[f_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<div align="center" style="color:#663333; background-color:#66FFCC;"><?=$_REQUEST['msg']?></div>
<style type="text/css">

.style1 {font-size: 36px}
body{
background-color:#ABCDEF;
font-family:assistant,sans-serif;
margin:auto;
/*
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
*/
}
.tbl{
border-collapse:collapse;
background-color:#999999;
}
th,td{
border-width:2px;
}
</style>
<form id="form1" name="form1" method="post" action="lib/facality.php">
<center>
  <table width="1155" border="1" class="tbl">
    <tr>
      <td height="47" colspan="4"><div align="center" class="style1">Fcultiy Resistation Form </div></td>
    </tr>
    <tr>
      <td width="204" height="46">Enter Name: </td>
      <td width="306"><label>
      <input name="f_name" type="text" id="f_name" value="<?=$data['f_name']?>"/>
      </label></td>
      <td width="294">Enter Qualification:</td>
      <td width="487"><textarea name="f_qual" id="f_qual"><?=$data['f_qual']?></textarea></td>
    </tr>
    <tr>
      <td height="45">Enter DOB: </td>
      <td><input name="f_dob" type="date" id="f_dob" value="<?=$data['f_dob']?>"/></td>
      <td>Enter Experince:</td>
      <td><input name="f_ex" type="text" id="f_ex" value="<?=$data['f_ex']?>"/></td>
    </tr>
    <tr>
      <td height="47">Enter Email </td>
      <td><label>
        <input name="f_eamil" type="text" id="f_eamil" value="<?=$data['f_email']?>"/>
      </label></td>
      <td> Enter Area Of Interest: </td>
      <td><textarea name="f_Aoi" id="f_Aoi"><?=$data['f_Aoi']?></textarea></td>
    </tr>
    <tr>
      <td height="46">Enter Phone:</td>
      <td><input name="f_phone" type="text" id="f_phone" maxlength="10" value="<?=$data['f_phone']?>"/></td>
      <td>Enter Designation: </td>
      <td><select name="f_desi" id="f_desi" value="<?=$data['f_desi']?>">
        <option value="0">Plz Select</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Ass.Profecer">Assi.Profecer</option>
        <option value="Profecer">Profecer</option>
        <option value="HOD">HOD</option>
        <option value="Registar">Registar</option>
      </select></td>
    </tr>
    <tr>
      <td height="39">Enter Gender:</td>
      <td><label>
<input name="f_gen" type="radio" value="Male" <?php if($data['f_gen']=="Male")echo "checked";?>/> 
Male 
<input name="f_gen" type="radio" value="Female" <?php if($data['f_gen']=="Female")echo "checked";?> />
Female
      </label></td>
      <td>Net Qualifide? </td>
      <td><input name="f_net" type="radio" value="Yes" <?php if($data['f_net']=="Yes")echo "checked";?>/>
        Yes 
        <input name="f_net" type="radio" value="No" <?php if($data['f_net']=="No")echo "checked";?> />
        No</td>
    </tr>
	 <tr>
      <td height="36">Enter Category:</td>
      <td><select name="f_cat" id="f_cat">
	   <?= get_option_list("category","category_id","category_name",$data['f_cat'])?>
            </select></td>
      <td>Phd Qualifide? </td>
      <td><input name="f_phd" type="radio" value="Yes" <?php if($data['f_phd']=="Yes")echo "checked";?> />
        Yes 
        <input name="f_phd" type="radio" value="No" <?php if($data['f_phd']=="No")echo "checked";?>/>
        No</td>
    </tr>
	<tr>
      <td height="36">Enter Sequrity Quation: </td>
      <td><select name="f_seq" id="f_seq">
	   <?= get_option_list("sequrity_question","seq_id","seq_que",$data['f_que'])?>
            </select></td>
      <td>Enter Answer:</td>
      <td><input name="f_ans" type="text" id="f_ans" value="<?=$data['f_ans']?>" /></td>
    </tr>
	 <tr>
      <td height="37" colspan="4"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Submit" style="background-color:#0099FF"/>
        </label>
        <input type="reset" name="Submit2" value="Reset" style="background-color:red"/>
      </div></td>
    </tr>
  </table>
  </center>
  <input type="hidden" name="act" value="fac_add"/>
</form>