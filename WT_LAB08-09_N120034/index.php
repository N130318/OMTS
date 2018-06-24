<?php
	include "dbconfig.php";
	session_start();
	if(($_SESSION['kalisetty']!=NULL)){
		$user=$_SESSION['kalisetty'];
		
		$sql=mysql_query("SELECT * FROM student_details WHERE username='$user'");
		$details=mysql_fetch_array($sql);
		$wt=$details['fav_wt'];
		$cn=$details['fav_cn'];
		$cc=$details['fav_cc'];
		$oops=$details['fav_oops'];
		
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>KALISETTY</title>
		<link rel="stylesheet" href="assets/style.css" type="text/css" >
	</head>
	<body>
		<span style="float:right;color:#FF0000;"><a href="logout.php" style="color:#FF0000;box-shadow: 0 0 5px #FF4000;">Logout</a></span>
		<center>
			<h2>USER PROFILE</h2>
			
			<div>
				<table cellpadding="5" cellspacing="3">
					<tr><th>User Name : </th><td><?php echo $details['username']; ?></td></tr>
					<tr><th>First Name : </th><td><?php echo $details['firstname']; ?></td></tr>
					<tr><th>Last Name : </th><td><?php echo $details['lastname']; ?></td></tr>
					<tr><th>Date of Birth : </th><td><?php echo $details['dob']; ?></td></tr>
					<tr><th>Email : </th><td><?php echo $details['email']; ?></td></tr>
					<tr><th>Phone No : </th><td><?php echo $details['phone']; ?></td></tr>
					<tr><th>Address : </th><td><?php echo $details['address']; ?></td></tr>
					<tr><th>Year : </th><td><?php echo $details['year']; ?></td></tr>
					<tr><th>Favorite Subjects : </th><td><?php echo $wt."&nbsp;&nbsp;".$cn."&nbsp;&nbsp;".$cc."&nbsp;&nbsp;".$oops; ?></td></tr>
					<tr><th>Security Question : </th><td><?php echo $details['sec_ques']; ?></td></tr>
					<tr><th>Security Answer : </th><td><?php echo $details['sec_ans']; ?></td></tr>
				</table>
			</div>
		</center>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>
