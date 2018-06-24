<?php
session_start();
if(isset($_SESSION['admin'])!="iiitn")
{
	header("Location: ../index.php");
}
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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$number = $_POST['number'];
    $k=1;;
    while($k<=$number)
    {
		$ram=$_POST["a_$k"];
		$sql = "INSERT INTO  `note`.`key` (`id`,`title`)VALUES ('$k',  '$ram')";
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} 
		$k=$k+1;
	}
	?><script>alert("Key uploaded successfully ");window.location.assign("admin.php")</script><?php
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
  <link rel="icon" href="http://10.11.4.99/cse/images/logo.png">
  <script src="./OMTS_files/modernizr.js.download"></script>
  <style>
  #for{
    border-style: dashed;
    border-color:#C0C0C0;
    border-width:1px;
     box-shadow: 0px 0px 5px #888888;
    
}
input
{
	border-radius:5px;
}
a
{
	font-size:30px;
	color:blue;
}
p,input,marquee,a
{
	font-family:Times New Roman;
	color:#1980AF;
}
  </style>
  <body>
 <div> </div><br>
 </center>
 <div style="position:fixed;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:150px"><img src="logo.png" style="position:absolute;top:9%;left:70%;bottom:100%;z-index:111" width="445px" height="135px">
<p style="position:fixed;top:10%;font-weight:20px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p><br>
	 <div style="position:fixed;top:22%;width:100%;height:80px;background-image:url(bgm.jpg);left:0%">&nbsp;
 <a href="admin.php" style="position:fixed;left:400px;font-size:30px;padding-top:10px;text-decoration:none">Home</a>
 <a href="delete.php" style="position:fixed;left:600px;font-size:30px;padding-top:10px;text-decoration:none">Clear Database</a>
 <a href="signout.php" style="position:fixed;left:920px;font-size:30px;padding-top:10px;text-decoration:none">Signout</a>
 </div>
 <div style="position:fixed;top:33%;width:100%;height:0.5%;background-image:url(do.gif);left:0%">&nbsp;</div>
</body></html>

