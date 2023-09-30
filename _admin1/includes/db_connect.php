<?php
global $con;
$con=mysqli_connect("localhost","root","vertrigo")or die(mysqli_error($con));
$db=mysqli_select_db($con,"university") or die(mysqli_error($con));
?>