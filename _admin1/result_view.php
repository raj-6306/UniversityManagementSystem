<?php include("includes/header.php");
global $con;
$sql="Select * from Student where st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<form action="" method="post" enctype="multipart/form-data" name="admit_card" id="admit_card">
<div id="form-container">

<div id="header">University of Allahabad 
<img  src="images/uni.png" id="logo"/>
</div>


  <div > <img src="uploads/<?=$data['st_image']?>" id="img3"/></div>
<div id="container">
<table width="395" height="120" border="1" class="tbl">
<tr>
<td width="156"><div align="center">Student Name:</div></td>
<td width="270"><div align="center"><?=$data['st_name']?></div></td>
</tr>
<tr>
<td><div align="center">Father  Name:</div></td>
<td><div align="center"><?=$data['st_father']?></div></td>
</tr>
<tr>
<td><div align="center">Gender:</div></td>
<td><div align="center"><?=$data['st_gen']?></div></td>
</tr>
<tr>
<td><div align="center">course:</div></td> 
<td><div align="center"><?=get_single_value("courses","course_id","course_name",$data[st_course])?></div></td>
</tr>
<table width="400" border="1" class="tbl">
<tr>
<td colspan="5">Marks Details:</td>
</tr>
<tr>
<?php/*
global $con;
$sql="select * from subject Where subject_course_id='$data[st_course]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
#print_r($data);
$i;
*/?>
<th width="33"><div align="center">SN.</div></th>
<th width="80"><div align="center">Subject</div></th>
<th width="83"><div align="center">Theory</div></th>
<th width="100"><div align="center">Practical</div></th>
<th width="70"><div align="center">Obtain</div></th>

</tr>
<?php
global $con;
$sql="select * from marks Where m_st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){

$i;
?>
<tr>
<td width="33"><div align="center"><?=++$i;?></div></td>
<td width="80"><div align="center"><?=get_single_value("subject","subject_id","subject_name",$data[m_sub]);?></div></td>
<td width="83"><div align="center"><?=$data[m_theory]?></div></td>
<td width="100"><div align="center"><?=$data[m_practical]?></div></td>
<td width="70"><div align="center"</div><?=$data[m_total]?>/100</td>
</tr>

<?php 
$total=array();
$total=$data[m_total];
$sum=$sum+$total;
$y=$y+100;
$g=$sum/$y*100;

}
#echo $g;
?>
<tr>
<td width="33" colspan="4"><div align="left">Total</div></td>
<td width="33" colspan="4"><div align="left"><?=$sum;?>/<?=$y;?></div></td>
</tr>
<tr>
<td width="33" colspan="4"><div align="left">Persent</div></td>
<td width="33" colspan="4"><div align="left"><?=$g?>%</div></td>
</tr>
</table>
</table>
</div>
<div id="sub">
<a><img src="images/arrow.png" alt="arrow" title="Back Arrow" height="20" width="20" onclick="javascript:history.back()"/></a> 
<a href="javascript:printOut();"><img src="images/print.png" alt="Edit" title="Edit" height="18" width="20"/></a>

</div>
<p id="p"> 
<font color="red" size="+2">Important Information</font><br />
    1)If your marks is greater than 90% and less than 100% than you are in <font color="green">A+ grade.</font><br>
	2)If your marks is greater than 75% and less than 90%  than you are in <font color="green">A grade.</font><br>
	3)If your marks is greater than 60% and less than 75% than you are in <font color="green"> B grade.</font><br>
	4)If your marks is greater than 45% and less than 60% than you are in <font color="green">C grade.</font><br>
    5)If your marks is less than 45% than you are <font color="red">faill.</font><br>

    

   
</p><div ><img  src="images/chart.jpg" id="footer"/></div>
<p id="p1">Notice:-It is Auto Generated.</p>	
</div>
</form>



