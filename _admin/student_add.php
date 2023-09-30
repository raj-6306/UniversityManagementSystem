<?php include_once("includes\header.php"); 
global $con;
if($_REQUEST['st_id']){
$sql="select * from student where st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
}
 ?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return valid_student(this);">
  <table width="1444" border="1" class="tbl">
    <tr>
      <td colspan="4"><div align="center"><font size=+4 color=red>Student Registration Form</font> </div></td>
    </tr>
    <tr>
      <td width="308">Enter Name: </td>
      <td width="386"><label>
      <input name="st_name" type="text" id="st_name" value="<?=$data['st_name']?>"/>
      </label></td>
      <td width="386">Enter FatherName: </td>
      <td width="342"><input name="st_father" type="text" id="st_father" value="<?=$data['st_father']?>"/></td>
    </tr>
    <tr>
      <td>Enter Phone: </td>
      <td><input name="st_phone" type="text" id="st_phone" maxlength="10" onkeypress="goods='0123456789';return limitchar(event)" value="<?=$data['st_phone']?>" /></td>
      <td>Enter Email: </td>
      <td><input name="st_email" type="text" id="st_email" value="<?=$data['st_email']?>"/></td>
    </tr>
    <tr>
      <td>Enter Gender: </td>
      <td><label>
        <input name="st_gen" type="radio"  value="male" <?php if($data['st_gen']=="male")echo "checked";?>/>Male 
<input name="st_gen" type="radio"  value="female" <?php if($data['st_gen']=="female")echo "checked";?>/>
        Female
      </label></td>
      <td>Enter Qualification: </td>
      <td><label>
	  <?= get_checkbox_list("qualification","qual_id","qual_name","st_qual[]",$data['st_qual'],0)?>
      </label></td>
    </tr>
    <tr>
      <td>Enter DOB: </td>
      <td><input name="st_dob" type="text" id="st_dob" maxlength="10"  value="<?=$data['st_dob']?>"/></td>
      <td>Enter DOA: </td>
      <td><input name="st_doa" type="text" id="st_doa" maxlength="10"  value="<?=$data['st_doa']?>" /></td>
    </tr>
    <tr>
      <td>Select Course:</td>
      <td><label>
        <select name="st_course" id="st_course">
		<?= get_option_list("courses","course_id","course_name",$data['st_course'])?>
        </select>
      </label></td>
      <td>Select Category: </td>
      <td><label>
      <select name="st_cat" id="st_cat">
      <?= get_option_list("category","category_id","category_name",$data['st_cat'])?>
        </select>
      </label></td>
    </tr>
    <tr>
	
	
      <td>Select Country:</td>
      <td><label>
      <select name="st_country" id="st_country" onchange="find_state(this.value)">
<?= get_option_list("country","country_id","country_name",$data['st_country'])?>
      </select>
      </label></td>
      <td>Select State: </td>
      <td><label>
        <select name="st_state" id="st_state">
	
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Enter Pincode: </td>
      <td><input name="st_pincode" type="text" id="st_pincode" maxlength="6" value="<?=$data['st_pincode']?>"/></td>
      <td>Select image: </td>
      <td><label>
        <input name="st_image" type="file" id="st_image" /><img src="uploads/<?=$data['st_image'] ?>"style=height:50px; width:20px;/>
      </label></td>
    </tr>
    <tr>
      <td>Enter Local Address:</td>
      <td><label>
        <textarea name="st_address1" id="st_address1" ><?=$data['st_address1']?></textarea>
      </label></td>
      <td>Enter Parmanent Address: </td>
      <td><textarea name="st_address2" id="st_address2" ><?=$data['st_address2']?></textarea></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Submit" class="btn"/>

        <input type="reset" name="Submit2" value="Reset" class="btn" style='background-color:red;'/>
</label>
      </div></td>
    </tr>
  </table>
  <input type="hidden" name="act" value="save_student" id="act"/>
 <input type="hidden" name="st_id" value="<?=$data['st_id']?>"/>
  <input type="hidden" name="st_image" value="<?=$data['st_image']?>"/>
</form>
<?php include_once("includes/footer.php"); ?>

