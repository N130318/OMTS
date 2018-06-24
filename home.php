<?php
session_start();
if(isset($_SESSION['id'])=="")
{
	header("Location: index.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$id=$_SESSION["id"];
$sql2="select * from result where idno='$id'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
$sql = "SELECT * FROM reg where id='$id'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$check=$sql = "SELECT * FROM myguests";
$chkresult=mysqli_query($conn,$sql);
$chkrow=mysqli_fetch_assoc($chkresult);
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
  <script type="text/javascript">
	function imageExists(url, callback) {
	  var img = new Image();
	  img.onload = function() { callback(true); };
	  img.onerror = function() { callback(false); };
	  img.src = url;
	}

	// Sample usage
	var imageUrl = 'http://10.11.4.35/SMS/usrphotos/user/<?php echo $id.'.jpg';?>';
	var a=imageExists(imageUrl, function(exists){
	  if(exists)
	  {
		  document.getElementById("tsimg").src="http://10.11.4.35/SMS/usrphotos/user/<?php echo $id.'.jpg';?>";
	  }
	  else
	  {
		  document.getElementById("tsimg").src="avatar.png";
	  }
	});
</script>
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
p
{
	text-transform:uppercase;
}
p,input,marquee,a
{
	font-family:Times New Roman;
	color:#1980AF;
}
  </style>
 <body bgcolor="snow">
 <div> </div><br>
 </center>
 <div style="position:fixed;width:100%;left:0%;top:0%;left:0%;height:212px;background-image:url(bgm.jpg);"><img src="logo.png" style="position:absolute;top:11%;left:70%;bottom:100%z-index:111" width="402" height="200">
<center><p style="position:fixed;top:10%;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p></center>
 <center><div style="position:fixed;left:10%;top:40%;height:55%;width:70%" id="for">
	 <?php 
	 if($chkrow){
		 if($row2["idno"]==$id)
		 {
			  ?><button href="" class="btn btn-success"style="POSITION:ABSOLUTE;left:400px;font-size:20px;top:270px;color:white;width:150px;height:40px;border-radius:10px;text-decoration:none" disabled>Submitted</button><?php
		 }
		 else
		 {
			 ?><a href="exam.php" class="btn btn-success" onclick="return confirm('Please confirm You have gone through the instructions given in your mail.If not,then go through the instructions and start exam.');" style="POSITION:ABSOLUTE;left:400px;font-size:20px;top:270px;color:white;width:150px;height:40px;border-radius:10px;text-decoration:none"><b><center>Start exam</center></b></a><?php
		 }
	 }
	 else
	 {
		 echo "<script>alert('Sorry for the delay in the exam paper setting, Please wait until we provide you an intimation regarding exam Thank you.');window.location.href('index.php');</script>";
	     if($row2["idno"]==$id)
		 {
			  ?><button href="" class="btn btn-success"style="POSITION:ABSOLUTE;left:400px;font-size:20px;top:270px;color:white;width:150px;height:40px;border-radius:10px;text-decoration:none" disabled>Submitted</button><?php
		 }
		 else
		 {
			 ?><a href="exam.php" class="btn btn-success" onclick="return confirm('Please confirm You have gone through the instructions given in your mail.If not,then go through the instructions and start exam.');" style="POSITION:ABSOLUTE;left:400px;font-size:20px;top:270px;color:white;width:150px;height:40px;border-radius:10px;text-decoration:none"><b><center>Start exam</center></b></a><?php
		 }
	 }
	 ?>
	 <P style="POSITION:ABSOLUTE;left:400px;font-size:30px;color:#1980AF;;top:40px"><u>PROFILE</u></P>
	 <p style="POSITION:ABSOLUTE;left:800px;font-size:30px;color:#1980AF;;top:40px"><a href="signout.php">Signout</a></p>
	 <img src="http://10.11.4.35/SMS/usrphotos/user/<?php echo $row["id"].'.jpg'; ;?>" style="position:fixed;left:20%;height:25%;width:12%;top:60%" id="tsimg">
	 <p style="POSITION:ABSOLUTE;left:400px;font-size:20px;color:black;top:150px">NAME:-&nbsp;&nbsp;<?php echo $row["name"]; ?></p>
	 <p style="POSITION:ABSOLUTE;left:400px;font-size:20px;color:black;top:190px">ID NO:-&nbsp;&nbsp;<?php echo $row["id"]; ?></p>
	 <p style="POSITION:ABSOLUTE;left:400px;font-size:20px;color:black;top:230px">Batch:-&nbsp;&nbsp;<?php echo $row["year"]; ?></p>
 </div>
 </body>
               
</body></html>
