<?php
 include("includes/header.php"); 
?>
<html>
<head>
<style>
body{
margin:0;
padding:0;
background-color:rgb(209, 222, 234);
}
.login-container{
height:100px;
width:200px;
margin:auto;
margin-top:150px;
text-align:center;
background-color:white;
box-shadow: 2px 2px 3px rgba(0,0,0,0.2);
position:absolute;
left:600px;
}

.login-page{
	position:relative;
	top:0px;

}
input[type="text"],input[type="password"]{
	border:none;
	outline:none;
	text-align:center;
	border-bottom: 2px solid teal;
	margin:10px;
   
	 
}
#seq_que{
	border:none;
	outline:none;
	text-align:center;
	border-bottom: 2px solid teal;
	margin:10px;
   color:#3bb19b;
	 
}
img{/*
margin-top:-40px;
height:70px;
width:70px;
border-radius:20px;*/
}
.btn{
  border:none;
  width:70px;
  height:30px;
  border-radius:4px;
  border-bottom:2px groove silver;
  background-color: #3bb19b;
  color: white;
 cursor:pointer;
}
.btn:hover{
            background-color: #f5f5f5;
            color: #3bb19b;
        }
        ::placeholder{
            color:#3bb19b;
            text-align:center;
        }
		label{
		font-size:20px;
		color:#3bb19b;
		}
</style>
</head>
<body>
<center>
<div>
<form method="post" action="lib/gallery.php" enctype="multipart/form-data" name="gallery_add" id="gallery_add" class="frm1">

<div class="login-container">

	<div class="login-page">
	<input type="file" name="g_name[]" multiple/>
	

 <input type="submit" value="Add" class="btn"/>
 <input type="reset" value="cancel" class="btn"/>
 <div><?= $msg; ?></div>
 	</div>
 </div>
 <input type="hidden" name="act" value="recover"/>
  </form>
</div>

</center>
<?php #include_once("includes/footer.php"); ?>
</body>
</html>
