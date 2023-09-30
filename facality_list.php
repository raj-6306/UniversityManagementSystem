<?php include("includes/header.php");
global $con;
$sql="select * from facality order by f_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error());
?>
<form id="form1" name="form1" method="post" action="">

  <table width="1457" border="1" class="tbl">
    <tr>
      <td width="108" height="47"><div align="center">S.No</div></td>
      <td width="128"><div align="center">Name:</div></td>
      <td width="216"><div align="center">Designation</div></td>
      <td width="301"><div align="center">Area of Interest </div></td>
      <td width="187"><div align="center">Experince</div></td>
      <td width="231"><div align="center">Qualification</div></td>
      <td width="108"><div align="center">Email</div></td>
      <td width="126"><div align="center">Image</div></td>	
    </tr>
		<?php 
		
		while($data=mysqli_fetch_assoc($rs)){
		if($data[f_status]=='true'){?>
	 <tr id="del_row">
      <td height="59"><div align="center">
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
	  
    </tr>
	<?php }
	}?>
  </table>
</form>