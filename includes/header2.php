<?php 
session_start();
if(!isset($_SESSION['stu_id'])){
header("location:stu_admin.php?msg=Plz Login first to Continue!!!");
}
include("db_connect.php");
include("function.php");
?>
<head>
  <link rel="stylesheet" href="css/home1.css"/>
  <link rel="stylesheet" href="css/admit.css"/>
</head>




<div id="head">
    <img src="images/uni.png" id="logo1"/>
    <p id="un">University of Allahabad</p>
    <p id="cotesion">&#9733&#9733&#9733 We Educate People about Life&#9733&#9733&#9733 </p>
    <img src="images/uni.png" id="logo2"/></div>
  
<img src="images/uni.png" id="back"/>