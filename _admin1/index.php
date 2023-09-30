<html>
<head>
<style>
body{
margin:0;
padding:0;
background-color:#f5f5f5;
}
.login-container{
height:270px;
width:270px;
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
  width:50px;
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
        #icon{
          height:25;
          width:25;
        }
        #icon:hover{
          cursor:pointer;
        }
</style>
<script>
// let pass=document.getElementById('pass');
// let icon=document.getElementById('icon');
let is_show=true;
function toggel(){
   if(is_show){
   pass.type="text";
   is_show=false;
   icon.src="images/show.png";
   }else{
    pass.type="password";
   is_show=true;
   icon.src="images/hide.png";
   }
} 
</script>
</head>
<body>
<center>
<div>
<form method="post" action="lib/login.php" name="frm" id="frm" class="frm1">

<div class="login-container">
<img src="images/login.png"/>
	<div class="login-page">
	
	<input type="text" name="user" placeholder="UserName"/><br />
<input type="password" name="pass" id="pass" placeholder="Password"/>
<img src="images/hide.png" name="icon" id="icon" onClick="toggel();" /><br /> 
<select name="opt" id="opt">
<option value='0'>Plz select</option>
<option value='admin'>Admin</option>
<option value='facality'>Facality</option>
</select><br>
 <input type="submit" value="Login" class="btn"/>
 <!--<input type="reset" value="cancel" class="btn"/>-->
  <a href="facultiy_add.php"><input type="button" value="Sign In" class="btn"/></a>
 <div> <a href="pass_rec.php">forgetPassword?</a></div>
 <div><?= $msg; ?></div>
 	</div>
 </div>
 <input type="hidden" name="act" value="sign_in"/>
  </form>
</div>
</center>
</body>
</html>