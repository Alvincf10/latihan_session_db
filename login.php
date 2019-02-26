<?php 
	// login.php
	session_start();

	if (isset($_SESSION['message'])) {
		if ($_SESSION['message']!="") {
			echo"<span style='color:red'>".$_SESSION['message']."</span>";
			$_SESSION['message'] = "";
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>LOGIN FORM</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <center>
 	<div class="boday">
 	<h2 class="h2">LOGIN HERE</h2>
 	<form class="tabel" method="POST" action="ceklogin.php">
		
 		<table>
 			<tr>
 				<td><input class="usernem" type="text" name="username" class="username" placeholder="Username" required></td>
 			</tr>
 			<tr>

 				<td><input class="pw" type="password" name="password" placeholder="Password" required></td>
 			</tr>
 			<tr>
 				<td><button class="air" type="submit" name="login">SIGN IN</button></td>
 			</tr>
 		</table>
	 </form>
	 <a href="register.php" class="have-account">Don't have a account?</a>
	 <br>
	 <a href="register.php" class="sign-up">SIGN UP NOW</a>
 	<div class="link">
	 
 </div></div>
 </body>
 </center>
 </html>