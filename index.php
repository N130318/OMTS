<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=strtoupper($_POST['id']);
	$pass=$_POST['pass'];
	$sql = "SELECT * FROM reg where id='$name'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if($name=="ADMIN" && $pass=="iiitn")
	{
		$_SESSION["admin"] ="iiitn";
		header("Location:admin/admin.php");
	}
	if($row["id"]==$name && $row["password"]==$pass)
	{
		$_SESSION["id"] = $row["id"];
		header("Location: home.php");
	}
	else
	{
		?><script>alert("Invalid credentials")</script><?php
	}
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <title>OMTS</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./OMTS_files/bootstrap.min.css">
  <script src="./OMTS_files/jquery.js.download"></script>
  <script src="./OMTS_files/bootstrap.min.js.download"></script>
  <link rel="icon" href="http://10.11.4.99/cse/assets/images/icon.png">
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
  </style>
<body>
 </center>
  <div style="position:fixed;width:100%;top:0%;left:0%;height:200px;background-image:url(bgm.jpg);"><img src="logo.png" style="position:absolute;top:11%;left:66%;bottom:100%z-index:111" width="450" height="160">
  <p style="position:fixed;top:10%;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p>
  </div>
 <div style="position:fixed;top:31%;width:100%;height:0.5%;background-image:url(background-image:url(bgm.jpg);)">&nbsp;
 <marquee style="position:relative;left:20%;right:20%;font-size:20px;"behavior="alternate" onmouseover="stop()" onmouseout="start()">OMTS</marquee></div>
 <div style="position:fixed;top:39%;width:100%;height:0.5%;background-image:url(do.gif)">&nbsp;</div>
 <center><div style="position:absolute;left:30%;top:44%;height:330px;width:40%;background:#DFDFDF" id="for"><center><p style="position:absolute;top:3%;font-weight:bold;z-index:111;font-size:20px;left:43%"><b>Login form</b></p></center><br><br>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <input type="text" class="form-control" id="inputdefault" maxlength="7" name="id" style="width:300px;height:50px;text-align:center;padding-top:20px" placeholder="Enter Username: Ex:N130318"><br>
 <input type="password" class="form-control" id="inputdefault" name="pass" style="width:300px;height:50px;text-align:center" placeholder="Enter Password:" required=""><br>
 <label style="width:150px;height:50px;font-size:15px;background:lightgreen;font-color:white;padding:10px;border-radius:10px;"><a href="register.php">New User</a></label>&nbsp; &nbsp; &nbsp;
 <label style="width:150px;height:50px;font-size:15px;background:lightgreen;border-radius:10px;font-color:white;padding:10px;"><a href="forgot.php">Forgot Password</a></label><br><br>
 <input type="submit" class="btn btn-success" style="width:150px;height:50px;background:#5bb75b;color:white;font-size:20px" value="Submit"><br><br>
 </form></div>
 </center>
 </div>
 
 </body>
               
</body></html>
