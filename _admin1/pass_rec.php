<?php
 include("includes/function.php"); 
if(!isset($_SESSION['f_id'])){
header("location:index.php?msg=Plz Login first to Continue!!!");
}
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
height:350px;
width:350px;
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
<form method="post" action="lib/login.php" name="frm" id="frm" class="frm1">\

<div class="login-container">
<h1 style="color:#3bb19b;">Password Recovery<h1>
	<div class="login-page">
	<input type="text" name="uname" placeholder="userName"/><br />
		<label>Sequrity Questions:</label> 
<select name="seq_que" id="seq_que">
		<?= get_option_list("sequrity_question","seq_id","seq_que",$data['seq_id'])?>
        </select>
			<input type="text" name="seq_ans" placeholder="Sequeity Answer"/><br />

 <input type="submit" value="Recovery" class="btn"/>
 <input type="reset" value="cancel" class="btn"/>
 <div><?= $msg; ?></div>
 	</div>
 </div>
 <input type="hidden" name="act" value="recover"/>
  </form>
</div>
</center>
</body>
</html>