<!-- VENKATESH KALISETTY ( N120034 ) E3CSE01 / ST06 -->
<?php
	session_start();
	if(isset($_SESSION['kalisetty'])){
		header("Location:index.php");
	}else{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="assets/style.css" type="text/css" >
        <script src="assets/script.js"></script>
	</head>
	<body onload="">
		<center>
			<fieldset>
				<legend><h3>LOGIN FORM</h3></legend>
				<br>
				<form method="post" action="login.php" onsubmit="return loginValidate()" >
					<table cellpadding="10">
						<tr><td>User name :</td><td><input type="text" name="user" id="user" /></td><td><span id="uerror"></span></td></tr>
						<tr><td>Password :</td><td><input type="password" name="passwd" id="passwd" /></td><td><span id="perror"></span></td></tr>
						<tr><td colspan="2"><center><button type="submit" name="login" value="Signin" >Submit</button></center></td></tr>
						
						<tr><td colspan="2"><center><a href="register.html">Don't have an account..??</a></center></td></tr>
						<tr><td colspan="2"><center><a href="forgotpassword.html">forgot password..??</a></center></td></tr>
					</table>
				</form>
			</fieldset>
		</center>
	</body>
</html>
<?php
	}
	
	if(isset($_POST['login'])){
		$user=htmlentities(mysql_real_escape_string($_POST['user']));
		$passwd=htmlentities(mysql_real_escape_string($_POST['passwd']));
		include "dbconfig.php";
		$sql=mysql_query("SELECT * FROM student_details WHERE username='$user' AND password='$passwd'");
		$row=mysql_fetch_array($sql);
		if(empty($row)){
			echo "<script>alert('Invalid Details');</script>";
		}else{
			echo "<script>alert('Success');</script>";
			$_SESSION['kalisetty']=$user;
			echo "<script>window.location='index.php';</script>";
		}
	}

?>
