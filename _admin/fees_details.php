<?php include_once("includes\header.php");  
$sql="select * from student where st_id='$_REQUEST[st_id]'";
global $con;
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
#echo "$_REQUEST[st_id]";
?>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="lib/student.php">
<center>
  <table width="340" height="187" border="1" class="tbl">
    <tr>
      <td colspan="2"><div align="center"><font size="+4">Fees Details </font></div></td>
      </tr>
    <tr>
      <td width="150">Student Id : </td>
      <td width="174"><?=$data[st_id]?></td>
    </tr>
    <tr>
      <td>Student Name: </td>
      <td><?=$data[st_name]?></td>
    </tr>
    <tr>
      <td>Student Father Name: </td>
      <td><?=$data[st_father]?></td>
    </tr>
    <tr>
      <td>Student Gender: </td>
      <td><?=$data[st_gen]?></td>
    </tr>
    <tr>
      <td>Student Course: </td>
      <td><?=get_single_value("courses","course_id","course_name",$data['st_course'])?></td> 
    </tr>
	<tr>
      <td>Student Total:</td>
      <td><?=get_single_value("courses","course_id","course_total_fees",$data['st_course'])?></td>
    </tr>
	
  </table>
  <table width="343" border="1">
    <tr>
      <td width="70"><div align="center">Amount</div></td>
      <td width="76"><div align="center">Balance</div></td>
      <td width="109"><div align="center">Date</div></td>
      <td width="60"><div align="center">Des.</div></td>
	  <?php 
	  $sql="select * from fees where fees_st_id='$_REQUEST[st_id]'";
	  global $con;
		$rs=mysqli_query($con,$sql)or die(mysqli_error($con));	
		$data=mysqli_fetch_assoc($rs);
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
		
      <td><div align="center"><?=$v?></div></td>
      <td><div align="center"><?=($total-$sum)?></td>
      <td><div align="center"><?=$da[$i]?></div></td>
      <td><div align="center"><?=$des[$i]?></div></td>
    </tr>
	<?php $i++; }?>
	<tr>
	<td colspan="4"><div align="center"> <a><img src="images/arrow.png" alt="arrow" title="Back Arrow" height="20" width="20" onclick="javascript:history.back()"/></a>&nbsp;&nbsp;<a href="javascript:printOut();"><img src="images/print.png" alt="Edit" title="Edit" height="18" width="20"/></a></div></td>
	</tr>
  </table>
</center>
</form>

<?php include_once("includes/footer.php"); ?>
