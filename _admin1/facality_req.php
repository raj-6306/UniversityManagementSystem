<?php include("includes/header.php");?>
<div align="center" style="color:#663333; background-color:#66FFCC;"><?=$_REQUEST['msg']?></div>
<form action="#" method="get">
  <p>
  <input type="text" name="st_search" id="st_search"/>
  <input type="submit" value="search"/>
</p>
</form>
<?php
global $con;
if($_REQUEST['f_search']){
$sql="select * from facality where f_name like '%$_REQUEST[st_search]%' or f_gen like '%$_REQUEST[f_search]'";
}else{
$sql="select * from facality order by f_id";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error());
?>
<form name="faculity" id="faculity" action="lib/facality.php" method="post"> 
  <table width="1464" border="1" class="tbl">
    <tr>
      <th width="79"><div align="center">Name</div></th>
      <th width="111"><div align="center">DOB</div></th>
      <th width="111"><div align="center">Email</div></th>
      <th width="129"><div align="center">Phone</div></th>
      <th width="102"><div align="center">Gender</div></th>
      <th width="106"><div align="center">Category</div></th>
      <th width="118"><div align="center">Qualification</div></th>
      <th width="130"><div align="center">Experince</div></th>
      <th width="136"><div align="center">Area of Interest </div></th>
      <th width="121"><div align="center">Designation</div></th>
      <th width="51"><div align="center">Net</div></th>
      <th width="53"><div align="center">Phd</div></th>
      <th width="135"><div align="center">Action</div></th>
    </tr>
	<?php 
	
	while($data=mysqli_fetch_assoc($rs)){
	if($data[f_status]=='false'){
	?>
	<tr id="<?=$data[f_id]?>">
      <td><div align="center"><?=$data[f_name]?></div></td>
      <td><div align="center"><?=$data[f_dob]?></div></td>
      <td><div align="center"><?=$data[f_email]?></div></td>
      <td><div align="center"><?=$data[f_phone]?></div></td>
      <td><div align="center"><?=$data[f_gen]?></div></td>
      <td><div align="center"><?=get_single_value("category","category_id","category_name",$data['f_cat'])?></div></td>
      <td><div align="center"><?=$data[f_qual]?></div></td>
      <td><div align="center"><?=$data[f_ex]?></div></td>
      <td><div align="center"><?=$data[f_Aoi]?> </div></td>
      <td><div align="center"><?=get_single_value("Designation","desi_id","desi_name",$data[f_desi])?></div></td>
      <td><div align="center"><?=$data[f_net]?></div></td>
      <td><div align="center"><?=$data[f_phd]?></div></td>
      <td><div align="center">
       <input type="button" value="Activate" class="btn" name="active" onclick="Activation(<?=$data[f_id]?>)" />|<a href="javascript:fac_delete('<?=$data[f_id]?>')"><input type="button" value="Delete" class="btn"/></a>
      </div></td>
    </tr>
	<?php }}?>
  </table>
  <input type="hidden" name="act" id="act"/>
  <input type="hidden" name="f_id1" id="f_id1"/>
</form>
<div align="center"><?php include_once("includes/footer.php"); ?></div>

