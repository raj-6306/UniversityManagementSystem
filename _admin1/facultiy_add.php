<?php include("includes/function.php");?>
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
      <input name="f_name" type="text" id="f_name" required/>
      </label></td>
      <td width="294">Enter Qualification:</td>
      <td width="487"><textarea name="f_qual" id="f_qual" required></textarea></td>
    </tr>
    <tr>
      <td height="45">Enter DOB: </td>
      <td><input name="f_dob" type="date" id="f_dob" required/></td>
      <td>Enter Experince:</td>
      <td><input name="f_ex" type="text" id="f_ex" required/></td>
    </tr>
    <tr>
      <td height="47">Enter Email </td>
      <td><label>
        <input name="f_eamil" type="text" id="f_eamil" required/>
      </label></td>
      <td> Enter Area Of Interest: </td>
      <td><textarea name="f_Aoi" id="f_Aoi" required></textarea></td>
    </tr>
    <tr>
      <td height="46">Enter Phone:</td>
      <td><input name="f_phone" type="text" id="f_phone" maxlength="10" required/></td>
      <td>Enter Designation: </td>
      <td><select name="f_desi" id="f_desi" required>
        <?= get_option_list("Designation","desi_id","desi_name")?>
      </select></td>
    </tr>
    <tr>
      <td height="39">Enter Gender:</td>
      <td><label>
<input name="f_gen" type="radio" value="Male" /> 
Male 
<input name="f_gen" type="radio" value="Female" />
Female
      </label></td>
      <td>Net Qualifide? </td>
      <td><input name="f_net" type="radio" value="Yes" />
        Yes 
        <input name="f_net" type="radio" value="No" />
        No</td>
    </tr>
	 <tr>
      <td height="36">Enter Category:</td>
      <td><select name="f_cat" id="f_cat" required>
	   <?= get_option_list("category","category_id","category_name")?>
            </select></td>
      <td>Phd Qualifide? </td>
      <td><input name="f_phd" type="radio" value="Yes" />
        Yes 
        <input name="f_phd" type="radio" value="No" />
        No</td>
    </tr>
	<tr>
      <td height="36">Enter Sequrity Quation: </td>
      <td><select name="f_seq" id="f_seq" required>
	   <?= get_option_list("sequrity_question","seq_id","seq_que")?>
            </select></td>
      <td>Enter Answer:</td>
      <td><input name="f_ans" type="text" id="f_ans" required/></td>
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
