<?php include("includes/header.php");?>
<style>     
.course{
height:350px;
width:370px;
box-shadow:2px 2px 3px 4px #003333;
display:inline-block;
margin-top:80px;
margin-left:200px;
margin-bottom:50px;
background-color:white;
text-align:center;
}
	p{
	font-size:25px;
	color:black;
	}
h2{
font-size:50px;
color:#006699;
}
body{
background-color:silver;
}
</style>

<?php
include("includes/db_connect.php");
global $con;
$sql="select * from courses";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
#echo "$data[course_name]. <br/>";

?>
<div class="course">
<h2><?=$data[course_name]?></h2>
<p>Course Fees:<?=$data[course_total_fees]?></p>
<p>Course About:<?=$data[course_name]?></p>
<p>Course Duration:<?=$data[course_duration]?></p>
<p>Course Eligibility:<?=$data[course_eli]?></p>
</div>

<?php }?>