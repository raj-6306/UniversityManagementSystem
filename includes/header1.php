<?php 
session_start();
if(!isset($_SESSION['stu_id'])){
header("location:stu_admin.php?msg=Plz Login first to Continue!!!");
}
include("db_connect.php");
include("function.php");
?><head>
  <link rel="stylesheet" href="css/home1.css"/>
  <link rel="stylesheet" href="css/result.css"/>
  <script src="js/validation.js"></script>
</head>



<div id="noprint">
<div id="head">
    <img src="images/uni.png" id="logo1"/>
    <p id="un">University of Allahabad</p>
    <p id="cotesion">&#9733&#9733&#9733 We Educate People about Life&#9733&#9733&#9733 </p>
    <img src="images/uni.png" id="logo2"/></div>
  <table width="1503" border="1">
    <tr >
      <td width="293"><div align="center" class="a1"><a href="student_details.php">Student Details</a></div></td>
      <td width="340"><div align="center" class="a1"><a href="fees_details.php">Fees Details </a></div></td>
      <td width="344"><div align="center" class="a1"><a href="lib/admit_cardDB.php?st_id=<?=$_SESSION[stu_id]?>">Admit Card </a></div></td>
      <td width="245"><div align="center" class="a1"><a href="result_view.php">Generate Result</a></div></td>
      <td width="269"><div align="center" class="a1"><a href="lib/stu_admin_DB.php?act=Logout">LogOut</a></div></td>
    </tr>
</table>
</div>
<img src="images/uni.png" id="back"/>