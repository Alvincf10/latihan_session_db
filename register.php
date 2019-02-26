<?php 

//register php

session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message']!=""){
		echo"<span
		style='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message']="";
	}
}


 ?>

 <!DOCTYPE html>
 <html>
 	<head>
 		<title>REGISTER</title>
 		<link rel="stylesheet" type="text/css" href="cssregister.css">
 	</head>

	<body>
		<center>
			<div class="background">
	 		<div class="bb">
			<div class="out">
			<div class="in">
			<h2>REGISTER</h2>
			</div>
			<form method="POST" action="cekregister.php">
					<input class="username" type="text" name="username" required placeholder="Username">
					<input class="password" type="password" name="password" required placeholder="Password">
			 		<button id="button" type="submit" name="register">Register</button>
			</form>
			<div class="link">
				<ul>
					<p>Have an Account ??</p>
					<a style="border: 0px; border-collapse: 5px;" href="login.php">LOGIN</a>
				</ul>
				</div>
			</div>
			</div>
			</div>
		</center>
	</body>
		
 </html>
