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
$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$number=$row["questions"];
$time=$row["time"];
$k=1;
?><form method="post" name="quiz" action="evalution.php" >
<?php
while($k<=$number)
{
	?><img src="1/<?php echo $k.'.png';?>" style="position:relative;left:30%;width:40%;height:30%" id="k"><br><br><br><br>
	<center><select name="<?php echo "e_$k";?>">
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	<option value="D">D</option><br><br><br>
	</select></center><br><br><?php
	$k=$k+1;
}
?>
<input class="btn btn-success" id="ss" type="submit" name="quiz" value="submit">
</form><?php
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
	body
	{
		padding-top:10%;
	}
select,option
{
	width:10%;
	height:5%;
}
#ss
{
	position:absolute;
	width:200px;
	height:50px;
	border-radius:10px;
	left:600px;
	margin-top:30px;
	margin-bottom:90px;
	color:white;
	font-size:15px;
	text-align:center;
}
#k,select
{
		box-shadow: 0px 3px 10px #888888;
}
#ks
{
		box-shadow: 0px 0px 5px #888888;
}
hr
{
	position:fixed;
	top:25%;
	color:black;
	width:100%;
}
p,input,marquee,a
{
	font-family:Times New Roman;
	color:#1980AF;
}
select,option
{
	font-family:Times New Roman;
	font-size:15px;
	text-align:center;
}
#quiz-time-left
{
	font-family:Times New Roman;
}
#ksr
{
	box-shadow:#E4E4E4 0px 3px 0px;
}
</style> 
<body bgcolor="snow">
	
<div style="position:fixed;font-weight: bold;top:30%;font-size:30px;left:80%;background:#0080FF;width:10%;height:10%;border-radius:5px;text-align:center;color:white" id="quiz-time-left"></div>
 <script type="text/javascript">
	  var total_seconds = 60*<?php echo $row["time"];?>;
	   var c_minutes = parseInt(total_seconds/60);
	    var c_seconds = parseInt(total_seconds%60);
	     function CheckTime(){ document.getElementById("quiz-time-left").innerHTML =c_minutes + ':'+ c_seconds;
	      if(total_seconds <=0){ setTimeout('document.quiz.submit()',1); }
	       else { total_seconds = total_seconds -1; c_minutes = parseInt(total_seconds/60); c_seconds = parseInt(total_seconds%60); setTimeout("CheckTime()",1000); }} setTimeout("CheckTime()",1000);
	        </script>
<div> </div><br>
 </center>
 <div id="ksr" style="position:fixed;width:100%;left:0%;top:0%;background-image:url(bg.gif);left:0%;height:150px"><img src="logo.png" style="position:absolute;top:3%;left:75%;bottom:100%z-index:111" width="200" height="150">
<p style="position:fixed;top:20px;font-weight:50px;z-index:111;font-size:50px;left:5%"><i>MOCKTEST</i></p>
