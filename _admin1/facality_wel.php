<?php session_start();
include("includes/db_connect.php");
if(!isset($_SESSION['f_id'])){
header("location:index.php?msg=Plz Login first to Continue!!!");
}
global $con;
$sql="select f_image from facality where f_id='$_SESSION[f_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<html>
<head>
<style>
body{
margin:0;
padding:0;
background-color:#f5f5f5;
}
.login-container{
height:400px;
width:400px;
margin:auto;
margin-top:250px;
text-align:center;
background-color:white;
box-shadow: 2px 2px 3px rgba(0,0,0,0.2);
position:absolute;
left:600px;
}

.login-page{
	position:relative;
	top:50px;

}
input[type="text"],input[type="password"]{
	border:none;
	outline:none;
	text-align:center;
	border-bottom: 2px solid teal;
	margin:10px;
   
	 
}
img{
margin-top:-40px;
height:70px;
width:70px;
border-radius:20px;
}
.btn{
  border:none;
  width:80px;
  height:30px;
  border-radius:4px;
  border-bottom:2px groove silver;
  background-color: #3bb19b;
  color: white;
 cursor:pointer;
 margin-top:20px;
}
.btn:hover{
            background-color: #f5f5f5;
            color: #3bb19b;
        }
        ::placeholder{
            color:#3bb19b;
            text-align:center;
        }
		#dp{
			background-color: #3bb19b;
			width:63%;
			position:relative;
			left:100px;
			maegin:50px;
		}
		input[type=file]::file-selector-button{
			background-color: #3bb19b;
			border:none;
			padding:5px;
		}
</style>
</head>
<body>
<center>
<div>
<form method="post" action="lib/facality.php" enctype="multipart/form-data" name="frm" id="frm" class="frm1">

<div class="login-container">
<img src="upload_fac/<?=$data[f_image]?>"/>
	<div class="login-page">
	
	<h1>Welcome  <?=$msg?></h1>
	
	
	
	<div id="dp">
	<input type="file" name="f_image" id="f_image" />
	</div>
	 <input type="submit" value="change DP" class="btn"/>
	
	
	
	
	<a href="facality_add1.php"><input type="button" value="Details" class="btn"/></a>
	<a href="update_fac_pass.php"><input type="button" value="PassUpdate" class="btn"/></a>
 	</div>
 </div>
 <input type="hidden" name="act" value="sign_in"/>
 <input type="hidden" name="id" value="<?=$_SESSION['f_id']?>"/>
  </form>
</div>
</center>
</body>
</html>