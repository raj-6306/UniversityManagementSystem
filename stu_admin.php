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
let is_show=true;
function toggel(){
   if(is_show){
   stu_dob.type="text";
   is_show=false;
   icon.src="images/show.png";
   }else{
    stu_dob.type="password";
   is_show=true;
   icon.src="images/hide.png";
   }
} 
</script>
</head>
<body>
<center>
<div>
<form method="post" action="lib/stu_admin_DB.php" name="frm" id="frm" class="frm1">

<div class="login-container">
<img src="images/login.png"/>
	<div class="login-page">
	
	<input type="text" name="stu_name" placeholder="StudentName"/><br />
	<input type="password" name="stu_dob" id="stu_dob" placeholder="DOB:10/02/2020"/>
<img src="images/hide.png" name="icon" id="icon" onClick="toggel();" /><br /> 

 <input type="submit" value="Login" class="btn"/>
 <input type="reset" value="cancel" class="btn"/>
 <div><?= $msg; ?></div>
 	</div>
	
 </div>

 <input type="hidden" name="act" value="login"/>
  </form>
</div>
</center>
</body>
</html>