
<?php 
	include "include/header.php";
?>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body style="background:url(http://localhost/nahiyan/final/pics/logo/450629125.jpg); background-size: 100%">

<div id="consignup">
<div id="left" >
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="check.php" method="POST" onsubmit="return validate() && checkpass() && checkname() && checkemail()">
		<table width="500px" border="2" align="center">
			<tr align="center">
				<td colspan="3"><h1>Profile Info</h1></td>
			</tr>
			<tr >
				<td width="150px">ID </td>
				<td width="250px"><input type="text" name="name" id="id"></td>
				<td id="idError"> &nbsp </td>
			</tr>
			<tr >
				<td width="150px">Password </td>
				<td width="250px"><input type="text" name="pass" id="pass"></td>
				<td id="passerror"> &nbsp </td>
			</tr>
			<tr >
				<td width="150px">Name </td>
				<td width="250px"><input type="text" name="name" id="name" onclick="getSelectedData() ></td>
				<td id ="nameerror"> &nbsp </td>
			</tr>
			<tr >
				<td width="150px">Email </td>
				<td width="250px"><input type="text" name="email" id="email"></td>
				<td id="emailerror"> &nbsp </td>
			</tr>
			<tr >
				<td width="150px">Gender </td>
				<td width="250px"><input type="radio" name="name">Male <input type="radio" name="name">Female <input type="radio" name="name">Other</td>
				<td> &nbsp </td>
			</tr>
	

			<tr >
				<td width="150px">Country </td>
				<td width="250px"><select style="width:100px">
						<option>India</option>
						<option>Australia</option>
						<option>Bangladesh</option>
						<option>Pakistan</option>
						<option>Nepal</option>
						<option>South Africa</option>
						<option>New Zealand</option>
						<option>West endies</option>
						<option>Srilanka</option>
						<option>England</option>
						<option>Afghanistan</option>
						<option>Zimbabwe</option>
					
				</select></td>
				<td> &nbsp </td>
			</tr>

			<tr >
				<td width="150px">Photo </td>
				<td width="250px"><input type="file" name="name"> </td>
				<td> &nbsp </td>
			</tr>
			<tr align="center">
				<td colspan="3" height="30px"></td>
			</tr>
			<tr >
				<td width="150px"> </td>
				<td width="250px"><input type="submit" name="name" value="Sign Up"> </td>
				<td> &nbsp </td>
			</tr>
		</table>

	</form>
		<script>
		
		function getSelectedData(){
		
		var name = document.getElementById('name').value;

		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "test.php?dept="+dept, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
				if( $name="Nahiyan")
				{
			     document.getElementById("name").innerHTML ="name exists";
				}
			    }
			};
		}

	</script>

	<script>
		
		function validate(){

			var id = document.getElementById('id').value;

			if(id == ""){
			    document.getElementById('idError').style.color = 'red';
				document.getElementById('idError').innerHTML = "*Invalid id";
				return false;

			}else{
				document.getElementById('idError').innerHTML = "";
				return true;
			}
		}
		function checkpass(){
	
		var pass = document.getElementById('pass').value;

			if(pass == ""){
			    document.getElementById('passerror').style.color = 'red';
				document.getElementById('passerror').innerHTML = "*Invalid pass";
				return false;

			}else{
				document.getElementById('passerror').innerHTML = "";
				return true;
			}
			}
			
			function checkname(){
	
		var name = document.getElementById('name').value;

			if(name == ""){
			    document.getElementById('nameerror').style.color = 'red';
				document.getElementById('nameerror').innerHTML = "*name required";
				return false;

			}else{
				document.getElementById('nameerror').innerHTML = "";
				return true;
			}
			}
			function checkemail(){
	
		var email = document.getElementById('email').value;

			if(email == ""){
			    document.getElementById('emailerror').style.color = 'red';
				document.getElementById('emailerror').innerHTML = "*email required";
				return false;

			}else{
				document.getElementById('emailerror').innerHTML = "";
				return true;
			}
			}
			
	
		
		
	</script>
</body>
</html>
</div>
