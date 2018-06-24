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
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	?>
	<div style="position:absolute;width:50%;height:50%;top:22%;left:25%;padding-top:20px;color:blue;font-size:20px"><table border="2px solid blue" style="font-size:15px;color:blue;" width="40%"><tr><td colspan="4"><center>Video QUESTIONS</center></td></tr>
<tr><th>Q.no</th><th>Your answers</th><th>CORRECT ANSWERS</th><th>STATUS</th></tr><?php
$sql="SELECT * FROM  `key`";
$result = mysqli_query($conn, $sql);
$id=$_SESSION["id"];
$sql2 = "SELECT * FROM `reg` where id='$id'";
$result2=mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$id=$_SESSION["id"];
$flname="Not Uploaded";

	$extension=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
	if($_FILES['file']['name']!="" && ($extension=='mp3' || $extension=='wav' || $extension=='mpeg3'))
	{ 
		    $flname=$_FILES['file']['name'];
			$temp=$_FILES['file']['tmp_name'];
			move_uploaded_file($temp,"upload/".$flname);
	}
	else if($_FILES['file']['name']=="")
	{
			?><script>alert("You have not uploaded any audio file.");
			</script><?php
			$x=true;
	}
	else
	{
		?><script>alert("Upload Only Audio Files.Please Upload The Audio File Only");
		//window.location.assign('exam.php');
		</script><?php
		$x=true;
	}
    $k=1;
    $count=0;
    $d="select * from myguests";
    $re=mysqli_query($conn,$d);
    $p=mysqli_fetch_assoc($re);
    $content=$_POST['content'];
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			?><tr><td><?php echo $k;?></td><td><center><?php echo $_POST["e_$k"];?></center></td><?php
			$ram=$_POST["e_$k"];
			
			?><td><center><?php echo $row["title"]; ?></center></td><?php
			if($row["title"]==$ram)
			{
				$count=$count+1;
				?><td><img src="r.jpg" width="30" height="30"></td></tr><?php
			}
			else
			{
				?><td><img src="w.jpg" width="30" height="30"></td></tr><?php
			}
			if($k==$p['questions_video'])
			{
				?><tr><td colspan="4"><center>PARAGRAPH QUESTIONS</center></td></tr><?php
			}
			$k=$k+1;
		}
		?><tr><td colspan="4"><center>Writing Answer</center></td></tr>
		<tr><td colspan="2"><center>Entered Answer is:</center></td><td colspan="2"><center><?php echo $content;?></center></td></tr><?php
				?><tr><td colspan="4"><center>Speaking Answer</center></td></tr>
		<tr><td colspan="2"><center>Uploaded file is:</center></td><td colspan="2"><center><?php echo $flname;?></center></td></tr><?php
	}


?><?php
?></table></div><?php
$idnumber=$_SESSION['id'];
echo "$idnumber";
$sq="SELECT * FROM `result`";
$result= mysqli_query($conn, $sq);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		if($row["idno"]==$idnumber)
		{
			$x=true;
			break;
		}
		else
		{
			$x=false;
		}
	}
}
else
{
	$x=false;
}

if($x==true)
{
	
		$s = "update `note`.`result` set marks='$count',content='$content',adoupload='$flname' where idno='$idnumber'";
		if (mysqli_query($conn, $s)) {
			?><script>alert("your exam has succesfully finished");</script><?php

	}
}
else
	{
		?><script>alert("your are already finished exam")</script><?php
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
		  document.getElementById("tstimg").src="http://10.11.4.35/SMS/usrphotos/user/<?php echo $id.'.jpg';?>";
	  }
	  else
	  {
		  document.getElementById("tstimg").src="avatar.png";
	  }
	});
	</script>
<style>
table {
    border-collapse: collapse;
}
p,input,marquee,a,table
{
	font-family:Times New Roman;
	color:#1980AF;
}
table, th, td {
    border: 1px solid black;
}
table {
    width: 100%;
}
td {
    padding: 5px;
}
th {
    height: 30px;
} 
table, td, th {
    border: 1px solid green;
}

th {
    background-color: green;
    color: white;
    border:1px solid white;
}
#ksr
{
	box-shadow:#E4E4E4 0px 3px 0px;
}
</style>
<body bgcolor="snow">
</body>
<div class=""> 
<a href="home.php" style="position:fixed;z-index:111;top:40%;left:80%;color:white;width:10%;height:10%;border-radius:5px;background:blue;text-decoration:none;font-size:20px"><center><-----BACK To Home</center></a>

 </div><br>
<div id="ksr" style="position:absolute;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:150px;">
<img src="http://10.11.4.35/SMS/usrphotos/user/<?php echo $idnumber.'.jpg'; ?>" style="position:absolute;top:11%;left:70%;bottom:100%;z-index:111" id="tstimg" width="15%" height="125">
<p style="position:absolute;top:30px;right:100px;">NAME:- &nbsp;&nbsp;<?php echo $row2["name"]; ?></p>
<p style="position:absolute;top:60px;right:80px;">ID NO:- &nbsp;&nbsp;<?php echo $row2["id"]; ?></p>
<p style="position:relative;top:20px;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p>
 
