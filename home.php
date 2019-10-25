<?php 
	include "include/header.php";
?>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body style="background:url(http://localhost/nahiyan/final/pics/logo/641545454.jpg); background-size: 100%">

<div id="container">
<div id="left" >
 <b><b>This is for notice</b></b>
</div>
<div id="right" >



<center>
<form action="#" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset id="fieldset">
					<legend><h3>LOGIN</h3></legend>
					<b>User Id</b><br/>
					<input type="text" name="id" width="100"><br/> </br>                              
					<b>Password</b><br/>
					<input type="password" name="pass">
					<br /><hr/>
					 <br/>
					<input type="submit" name="login"  value="LOGIN" id="button1">
					</br></br></br>
				<a href="signup.php" id="reg">REGISTER</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</div>
<style>
#button1{
	padding:10px;
	background-color:#6495ED;
	font-size:20px;
	border-radius:10px;
	color:white;
	
	
}
a{
	text-decoration:none;
}
#button1:hover{
	background-color:white;
	color:red;
}
#reg{
	padding:10px;
	background-color:#6495ED;
	font-size:20px;
	border-radius:10px;
	color:white;
	
}
#reg:hover{
	background-color:white;
color:red;}

</style>
</div>
	</body>
