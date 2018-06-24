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
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$title=$_POST['title'];
	$question=$_POST['question'];
	$video_questions=$_POST['video_question'];
	$time=$_POST['time'];
	$folder=$_POST['folder'];
	$video=$_POST['video'];
	$sql = "INSERT INTO MyGuests (title,questions,time,folder,video,questions_video) VALUES ('$title', '$question', '$time','$folder','$video','$video_questions')";
	if (mysqli_query($conn, $sql)) {
		header("Location:key.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
  <link rel="icon" href="http://10.11.4.99/cse/images/logo.png">
  <script src="./OMTS_files/modernizr.js.download"></script>
  <style>
input
{
	border-radius:5px;
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
 <div style="position:fixed;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:150px"><img src="logo.png" style="position:absolute;top:9%;left:70%;bottom:100%z-index:111" width="450" height="140">
<p style="position:fixed;top:10%;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p><br>
<div style="position:fixed;left:30%;top:40%;height:40%;width:40%" id="for">
<div style="position:fixed;top:23%;width:100%;height:0.5%;background:light grey;left:0%">&nbsp;
 <a href="admin.php" style="position:fixed;left:250px;font-size:30px;padding-top:10px;text-decoration:none">Home</a>
 <a href="delete.php" style="position:fixed;left:350px;font-size:30px;padding-top:10px;text-decoration:none">Clear database</a>
 <a href="editing.php" style="position:fixed;left:550px;font-size:30px;padding-top:10px;text-decoration:none">Update Results</a>
 <a href="user_data.php" style="position:absolute;left:750px;font-size:30px;padding-top:10px;text-decoration:none">Registered Users</a>
 <a href="signout.php" style="position:fixed;left:980px;font-size:30px;padding-top:10px;text-decoration:none">Signout</a>
 </div>
 <div style="position:fixed;top:31%;width:100%;height:450px;background-image:url(bgm.jpg);left:0%">&nbsp;</div>
 <center><div style="position:absolute;top:-50px;height:420px;width:100%;background:lightgray" id="for"><br>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <input type="text" class="form-control" id="inputdefault" name="title" style="width:350px;height:40px;text-align:center" placeholder="Exam title" required="" ><br>
 <input type="text" class="form-control" id="inputdefault" name="question" style="width:350px;height:40px;text-align:center" placeholder="Total num of questions" required=""><br>
 <input type="text" class="form-control" id="inputdefault" name="video_question" style="width:350px;height:40px;text-align:center" placeholder="Number of questions for video" required=""><br>
 <input type="text" class="form-control" id="inputdefault" name="time" style="width:350px;height:40px;text-align:center" placeholder="Time" required="" ><br>
 <input type="text" class="form-control" id="inputdefault" name="folder" style="width:350px;height:40px;text-align:center" placeholder="Foldername" required=""><br>
 <input type="text" class="form-control" id="inputdefault" name="video" style="width:350px;height:40px;text-align:center" placeholder="Video name" required=""><br>
 <input type="submit" class="btn btn-success" style="width:150px;height:40px;background:#5bb75b;color:white;font-size:20px" value="Submit"><br><br>
 </form></div>
 </center>
 </body>
               
</body></html>
