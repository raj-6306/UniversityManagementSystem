<?php include("includes/header.php");
global $con;
$sql="select * from facality order by f_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error());
?>
<form id="form1" name="form1" method="post" action="">
  <table width="1453" border="1" class="tbl">
    <tr>
      <th width="82"><div align="center">S.No</div></th>
      <th width="139"><div align="center">Name</div></th>
      <th width="161"><div align="center">Designation</div></th>
      <th width="209"><div align="center">Area of Interest </div></th>
      <th width="165"><div align="center">Experince</div></th>
      <th width="162"><div align="center">Qualification</div></th>
      <th width="129"><div align="center">Email</div></th>
      <th width="127"><div align="center">Image</div></th>	
	  <th width="221"><div align="center">Action</div></th>
    </tr>
		<?php 
		
		while($data=mysqli_fetch_assoc($rs)){
		if($data[f_status]=='true'){?>
	 <tr id="<?=$data[f_id]?>">
      <td><div align="center">
        <?=++$i?>
      </div></td>
      <td><div align="center">
        <?=$data[f_name]?>
      </div></td>
      <td><div align="center">
        <?=get_single_value("Designation","desi_id","desi_name",$data[f_desi])?>
      </div></td>
      <td><div align="center">
        <?=$data[f_Aoi]?>
      </div></td>
      <td><div align="center">
        <?=$data[f_ex]?>
      </div></td>
      <td><div align="center">
        <?=$data[f_qual]?>
      </div></td>
      <td><div align="center">
        <?=$data[f_email]?>
      </div></td>
      <td><div align="center">Image</div></td>
	  <td> <div align="center">
	    <input type="button" value="Deactivate" class="btn" onclick="deactivation(<?=$data[f_id]?>)"/>|
	    <input type="button" value="Delete" class="btn"/>		
       </div></td>
    </tr>
	<?php }
	}?>
  </table>
</form>
<div align="center"><?php include_once("includes/footer.php"); ?></div>
