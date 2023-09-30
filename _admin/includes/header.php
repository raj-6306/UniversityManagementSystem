<?php 
session_start();
if(!isset($_SESSION['login_user'])){
header("location:index.php?msg=Plz Login first to Continue!!!");
}
include("includes/db_connect.php");?>
<?php include("includes/function.php");?>
<html>
<link type="text/css" href="plugins/calendar/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="plugins/calendar/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="plugins/calendar/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#st_dob").datepicker({changeMonth: true,changeYear: true,startYear:1900,EndYear:2000});
$("#st_doa").datepicker({changeMonth: true,changeYear: true});
});
function limitchar(e)
{
	var key, keychar;
	if (window.event)
		key=window.event.keyCode;
	else if (e)
		key=e.which;
	else
		return true;
	keychar = String.fromCharCode(key);
	keychar = keychar.toLowerCase();
	goods = goods.toLowerCase();
	if (goods.indexOf(keychar) != -1)
	{
		goods="0123456789.";
		return true;
	}
	if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )
	{
		goods="0123456789.";
		return true;
	}
	return false;
}
</script>
<head><title>University Management...</title>
<link rel="stylesheet" href="css/decoration.css">
<script src="js/validation.js"></script>
</head>
<body>
<center>
<div id="nav">
<table width="1444" border="1" id="head_table">
  <tr>
    <td width="156"><div align="center"><a href="student_add.php">Home</a></div></td>
    <td width="181"><div align="center"><a href="student_view.php">Student</a></div></td>
    <td width="188"><div align="center"><a href="student_fees.php">Fees</a></div></td>
	 <td width="235"><div align="center"><a href="exam_view.php">Exam</a></div></td>
    <td width="212"><div align="center"><a href="#">Contact</a></div></td>
	 <td width="210"><div align="center"><a href="galary.php">Gallery</a></div></td>
    <td width="216"><div align="center"><a href="lib/login.php?act=Logout">LogOut</a></div></td>
  </tr>
</table>
<img src="images/img1.jpg" height="200" width=95%/>
</div>