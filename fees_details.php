<?php 
include("includes/header1.php");  
$sql="select * from student where st_id='$_SESSION[stu_id]'";
global $con;
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
#echo "$_REQUEST[st_id]";
?>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="lib/student.php">
<center>
  <table width="584" height="333" border="1" class="tbl" style="background-color:#CCCCCC;">
    <tr>
      <td colspan="2"><div align="center"><font size="+4">Fees Details </font></div></td>
      </tr>
    <tr>
      <td width="218" height="46">Student Id : </td>
      <td width="253"><?=$data[st_id]?></td>
    </tr>
    <tr>
      <td height="40">Student Name: </td>
      <td><?=$data[st_name]?></td>
    </tr>
    <tr>
      <td height="39">Student Father Name: </td>
      <td><?=$data[st_father]?></td>
    </tr>
    <tr>
      <td height="41">Student Gender: </td>
      <td><?=$data[st_gen]?></td>
    </tr>
    <tr>
      <td height="47">Student Course: </td>
      <td><?=get_single_value("courses","course_id","course_name",$data['st_course'])?></td> 
    </tr>
	<tr>
      <td height="45">Student Total:</td>
      <td><?=get_single_value("courses","course_id","course_total_fees",$data['st_course'])?></td>
    </tr>
	
  </table>
  <table width="579" border="1" style="background-color:#CCCCCC;">
    <tr>
      <td width="70" height="34"><div align="center">Amount</div></td>
      <td width="76"><div align="center">Balance</div></td>
      <td width="109"><div align="center">Date</div></td>
      <td width="178"><div align="center">Des.</div></td>
	  <?php 
	  session_start();
	  $sql="select * from fees where fees_st_id=$_SESSION[stu_id]";
	  global $con;
		$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
		#print_r($data);
		#print_r($data);
		$total=$data['fees_total'];
		$amt=explode(",",$data['fees_amount']);
		$dt=explode(",",$data['fees_date']);
		$de=explode(",",$data['fees_desc']);
		#print_r($dt);
		$da=array();
		$des=array();
		$i=0;
		foreach($dt as $d){
		$da[$i]=$d;
		$i++;
		}
		$i=0;
		foreach($de as $d){
		$des[$i]=$d;
		$i++;
		}
		$i=0;
		$sum=0;
		echo $R[total];
		
		foreach( $amt as $v){
		$sum+=$v;
	  ?>
    </tr>
    <tr>
		
      <td height="39"><div align="center"><?=$v?></div></td>
      <td><div align="center"><?=($total-$sum)?></td>
      <td><div align="center"><?=$da[$i]?></div></td>
      <td><div align="center"><?=$des[$i]?></div></td>
    </tr>
	<?php $i++; }?>
	<tr>
	<td height="44" colspan="4"><div align="center"> <a><img src="images/arrow.png" alt="arrow" title="Back Arrow" height="20" width="20" onclick="javascript:history.back()"/></a>&nbsp;&nbsp;<a href="javascript:printOut();"><img src="images/print.png" alt="Edit" title="Edit" height="18" width="20"/></a></div></td>
	</tr>
  </table>
</center>
</form>

<?php #include_once("includes/footer.php"); ?>
