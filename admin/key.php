<?php
session_start();
if(isset($_SESSION['admin'])!="iiitn")
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
?><form style="position:absolute;top:120px;left:520px" method="post" action="process.php">
<?php
$i=1;
while($i<=$number)
{
	$k="a_$i";
	?><center><input type="text" class="form-control" id="inputdefault" name="<?php echo "$k" ; ?>" placeholder="ans of <?php echo "$i" ; ?> Ex:A/B/C/D" required="" pattern="[A-D]{1}" maxlength="1"></center><br><?php
	$i=$i+1;
}?>
<center>
	<input type="hidden" name="number" value="<?php echo $number;?>">
	<input class="btn btn-success" type="submit" style="padding-top:10px" value="submit"></center>
</form><?php
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
	<style>
	input
	{
		position:absolute;
		width:10%;
		height:5%;
	}
	p,input,marquee,a
{
	font-family:Times New Roman;
	color:#1980AF;
}
input
{
	text-align:center;
}
#sri
{
	box-shadow:#CACACA 0px 5px 0px;
}
	</style>

	</head>
<body >
 <div> </div><br>
 </center>
 <div id="sri" style="position:absolute;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:100px"><img src="logo.png" style="position:absolute;top:5%;left:70%;bottom:100%z-index:111" width="200" height="100">
<p style="position:absolute;top:5%;font-weight:50px;z-index:111;font-size:40px;left:5%"><i>ONLINE MOCKTEST</i></p><br>
</body>
</html>
