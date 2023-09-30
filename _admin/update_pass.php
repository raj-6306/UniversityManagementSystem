<html>
<head>
<style>
body{
margin:0;
padding:0;
background-color:#f5f5f5;
}
.login-container{
height:350px;
width:350px;
margin:auto;
margin-top:200px;
text-align:center;
background-color:white;
box-shadow: 2px 2px 3px rgba(0,0,0,0.2);
position:absolute;
left:600px;
}

.login-page{
	position:relative;
	top:30px;

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
</style>
</head>
<body>
<center>
<div>
<form method="post" action="lib/login.php" name="frm" id="frm" class="frm1">

<div class="login-container">
<h1 style="color:#3bb19b;">Update Password</h1>
	<div class="login-page">
	
	<input type="password" name="pass" placeholder="Password"/><br />
<input type="password" name="cpass" placeholder="Confurm Password"/><br /> 
 <input type="submit" value="Update" class="btn"/>
 <input type="reset" value="cancel" class="btn"/>
 <div><?=$msg;?></div>
 	</div>
 </div>
 <input type="hidden" name="act" value="update"/>
 <input type="hidden" name="user" value="<?=$_REQUEST[user]?>"/>
  </form>
</div>
</center>
</body>
</html>