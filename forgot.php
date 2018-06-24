<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['passwd'];
$cpass=$_POST['cpasswd'];
$sql = "SELECT * FROM reg where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$emlcmp=strcasecmp($row["email"],$email);
if($pass!=$cpass)
{
	echo "<script>alert('New Password and confirm password not matched'); window.location.assign('forgot.php')</script>";
}
else
{
	if($row["id"]==$id && $emlcmp==0)
	{
	 $con=mysqli_query($conn,"update reg set password='$pass',confirm='$cpass' where id='$id'");
	 if($con)
	 {
		 echo "<script>alert('password update successfully'); window.location.assign('index.php')</script>";
	 }
	 else
	 {
		 echo "<script>alert('password update failed');window.location.assign('forgot.php')</script>";
	 }
	}
	else
	{
	   echo "<script>alert('Invalid Username or Email');window.location.assign('forgot.php')</script>";
	}	
}
}
else
{
}
?>
<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <title>OMTS</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./OMTS_files/bootstrap.min.css">
    <link rel="stylesheet" href="regis.css">
  <script src="./OMTS_files/jquery.js.download"></script>
  <script src="./OMTS_files/bootstrap.min.js.download"></script>
  <link rel="icon" href="http://10.11.4.82/eceiiitn/images/logoi.png">
  <link rel="stylesheet" href="./assets/style.css" type="text/css" >
  <!--<script src="./assets/script.js"></script>-->
  <script src="./OMTS_files/modernizr.js.download"></script>
  <style>
  
input
{
	border-radius:5px;
}
p,input,marquee
{
	font-family:Times New Roman;
	color:#1980AF;
}

a:hover{font-size :20px;
		color :red;}
  </style>
<body style="width:100%; height:900px;position:absolute;background:url('3.jpg'); background-size:100% 100%;background-attachment:scroll;">
 <div> </div><br>
 </center>
 <div style="z-index:111;position:absolute;width:100%;left:10%;top:0%;background-image:url(bgm.jpg);left:0%;height:200px">
<p style="position:relative;top:2%;font-weight:50px;z-index:1111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p><img src="logo.png" border="5px solid red" style="position:absolute;top:3%;left:70%;height:150px;width:405px;" >
</div>
 <br><br><br>
 <center>
	 <div style="position:absolute;left:35%;top:25%;"  id="for">
			<fieldset>
				<legend><h3>CHANGE PASSWORD FORM</h3></legend>
				<br>
				<form method="post">
					<table cellpadding="10" cellspacing="8">
						<!--<tr><td>User name :</td><td><input type="text" id="user" class="form-control" id="inputdefault" required="required"/></td><td><span id="uerror"></span></td></tr>
						<tr><td>Email ID :</td><td><input type="email" name="email" id="email" class="form-control" id="inputdefault" required="required"/></td><td><span id="eerror"></span></td></tr>
						<tr><td>New Password:</td><td><input type="password" id="dob" class="form-control" id="inputdefault" required="required"/></td></tr>
						<tr><td>Confirm Password:</td><td><input type="password" id="phone" class="form-control" id="inputdefault" required="required"/></td><td><span id="pherror"></span></td></tr>-->
						<tr><td>User name :</td><td><input type="text" class="form-control" id="inputdefault" name="username" maxlength="7" pattern="N[0-9]{6}" placeholder="Enter User Id Ex:N130318" style="width: 250px;height :30px;background-color: #FFFFFF;border-radius :8px;"required=""></td><td><span id="uerror"></span></td></tr>
						<tr><td>Email ID :</td><td><input type="text" class="form-control" id="inputdefault" name="email" placeholder="Enter E-Mail Address" style="width: 250px;height :30px;background-color: #FFFFFF;" required=""></td><td><span id="eerror"></span></td></tr>
						<tr><td>New Password:</td><td><input type="password" class="form-control" id="inputdefault" name="passwd" placeholder="Enter Password" style="width: 250px;height :30px;background-color: #FFFFFF;border-radius :8px;" required=""><span id="perror"></span></td></td></tr>
						<tr><td>Confirm Password:</td><td><input type="password" class="form-control" id="inputdefault" name="cpasswd" placeholder="Enter Password Again" style="width: 250px;height :30px;background-color: #FFFFFF;border-radius :8px;" required=""></td><td><span id="cperror"></span></td></tr>
						
						<tr><td><input type="reset" class="btn btn-success" name="reset" value="Clear"/></td><td><input type="submit" name="change" class="btn btn-success" style="float:right;margin-top:10px;margin-left:100px;" value="Submit" /></td></tr>
						<tr><td colspan="2"><center><a href="index.php">Click here to login ...!!!</a></center></td></tr>
					</table>
				</form>
			</fieldset>
			</div>
		</center>
 
 </body>
               
</body></html>
