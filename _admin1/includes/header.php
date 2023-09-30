<?php 
session_start();
if(!isset($_SESSION['login_user'])){
header("location:index.php?msg=Plz Login first to Continue!!!");
}
include("includes/db_connect.php");?>
<?php include("includes/function.php");?>
<html>
<link type="text/css" href="plugins/calendar/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	

 <!-- <link rel="stylesheet" href="css/home1.css"/>-->

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
  <link rel="stylesheet" href="css/result.css"/>
     <link rel="stylesheet" href="css/home.css"/>
<script src="js/validation.js"></script>
</head>
<body>
<div id="print">
<div id="head">
    <img src="images/uni.png" id="img1"/>
    <p id="un">University of Allahabad</p>
    <p id="cotesion">&#9733&#9733&#9733 We Educate People about Life&#9733&#9733&#9733</p>
    <img src="images/uni.png" id="img2"/></div>
<center>
<form id="header" name="header" action="lib/login.php">
<div id="nav">
<table width="1232" border="1" id="head_table">
  <tr>
    <td width="106"><div align="center" class="a1"><a href="student_add.php">Home</a></div></td>
    <td width="119"><div align="center" class="a1"><a href="student_view.php">Student</a></div></td>
    <td width="116"><div align="center" class="a1"><a href="student_fees.php">Fees</a></div></td>
	 <td width="128"><div align="center" class="a1"><a href="exam_view.php">Exam</a></div></td>
    <td width="131"><div align="center" class="a1"><a href="marks_view.php">Marks</a></div></td>
	 <td width="130"><div align="center" class="a1"><a href="gallery_add.php">Gallery</a></div></td>
	 	 <td width="135"><div align="center" class="a1"><a href="facality_req.php">Facality Request</a></div></td>
		 	 <td width="135"><div align="center" class="a1"><a href="facality_list.php">Facality List</a></div></td>
    <td width="156"><div align="center" class="a1" onClick="admin_logout()">LogOut</div></td>
  </tr>
</table></div>
<input type="hidden" name="act" value="Logout"/>
</form>
<div><img src="images/img1.jpg" height="200" width=80%/></div>
</div>
