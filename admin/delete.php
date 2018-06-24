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
$sql1="TRUNCATE TABLE  `key`";
$sql2="TRUNCATE TABLE result";
$sql3="TRUNCATE TABLE myguests";
$sql4="TRUNCATE TABLE  `check`";
if(mysqli_query($conn,$sql1))
{
	?><script>alert("key table has empty")</script><?php
}
if(mysqli_query($conn,$sql2))
{
	?><script>alert("result table has empty")</script><?php
}
if(mysqli_query($conn,$sql3))
{
	?><script>alert("myguests table has empty")</script><?php
}
if(mysqli_query($conn,$sql4))
{
	?><script>alert("check table has empty");window.location.assign("admin.php")</script><?php
}
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
}p,input,marquee,a
{
	font-family:Times New Roman;
	color:#1980AF;
}
  </style>
  <body >
 <div> </div><br>
 </center>
 <div style="position:fixed;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:220px"><img src="logo.png" style="position:absolute;top:3%;left:70%;bottom:100%z-index:111" width="250" height="150">
<p style="position:fixed;top:10%;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p><br><br><br>
	 <div style="position:fixed;top:32%;width:100%;height:8%;background-image:url(bgm.jpg);left:0%">&nbsp;
 <a href="admin.php" style="position:fixed;left:400px;font-size:30px;padding-top:10px;text-decoration:none">Home</a>
 <a href="delete.php" style="position:fixed;left:600px;font-size:30px;padding-top:10px;text-decoration:none">Clear database</a>
 </div>
 <div style="position:fixed;top:42%;width:100%;height:380px;background-image:url(bg.jpg);left:0%;background-attachment:scroll;">
 </div>
 <div style="position:fixed;top:31%;width:100%;height:0.5%;background-image:url(do.gif);left:0%">&nbsp;</div></html>
