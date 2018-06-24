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
$userid=$_SESSION['id'];
$sql2 = "SELECT * FROM reg where id='$userid'";
$result2=mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
// Create connection
$sql = "SELECT * 
FROM  `key`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$sq="SELECT * FROM `check`";
	$result1= mysqli_query($conn,$sq);
	if (mysqli_num_rows($result1) > 0) {
		// output data of each row
		while($row1 = mysqli_fetch_assoc($result1)) {
			if($row1["id"]==$userid)
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
	if($x==false)
	{
		$vardhan="INSERT INTO  `note`.`check` (`id` ,`status`)VALUES ('$userid',  'started')";
		$s = "INSERT INTO  `note`.`result` (`idno`,`marks`,`content`,`adoupload`) VALUES ('$userid',  '0','Not Typed','Not Uploaded')";
		if(mysqli_query($conn,$vardhan))
		{
			if(mysqli_query($conn,$s))
			{
			}
		}
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
		?><form method="post" name="quiz" action="evalution.php" enctype="multipart/form-data">
		<center><video width="600" style="padding-top:40px;" controls controlsList="nodownload" autoplay>
		<source src="1/<?php echo $row['video'];?>" type="video/mp4;">
		</video></center><br><br>
		<?php
		while($k<=$number)
		{
			
			?><img src="1/<?php echo $k.'.png';?>" style="position:relative;left:15%;padding-top:5%;width:65%;height:40%" id="k"><br><br><br><br>
			<center><select name="<?php echo "e_$k";?>">
			<option value="Select">Select</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option><br><br><br>
			</select></center><br><br><?php
			if($k==$row['questions_video'])
			{
				?><img src="1/para.jpg" style="position:relative;left:15%;padding-top:3%;width:65%;height:50%"><br><br><?php
			}
			$k=$k+1;
		}
		?><br>
		<img src="1/text.jpg" style="position:relative;left:15%;padding-top:1%;width:65%;height:50%"><br><br>
		<center><textarea name="content" rows="6" style="width:340px;height:30%;" pattern="^(?:\b\w+\b[\s\r\n]*){1,250}$" onkeyup="wordcount(this.value)" placeholder="enter text here"></textarea>  <p style="width:370px;height:10%;" id="alrt"></p> <br>
		<input type="text" id="w_count" size="4" readonly value="250">&nbsp;<label>Words Reemaining</label><br><br>
		<img src="1/audio.jpg" style="position:relative;width:40%;height:30%;top:0%;"><br><br>
		<input type="file" name="file" accept=".mp3">
		</center>
		<input type="submit" class="btn btn-success" id="ss" value="submit" onclick="return validateForm()">
		</form><?php
	}
	else
	{
		echo "<script>alert('your already open and close the exam');window.location.assign('home.php');</script>";
	}
}
else
{
	header("Location:home.php");
}
?>
<?php
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
<script>
function validateForm(){
    if (confirm("click ok to submit") == true) {
        return true;
    } else {
        return false;
    }
}
</script>
<script type="text/javascript">
function imageExists(url, callback) {
  var img = new Image();
  img.onload = function() { callback(true); };
  img.onerror = function() { callback(false); };
  img.src = url;
}

// Sample usage
var imageUrl = 'http://10.11.4.35/SMS/usrphotos/user/<?php echo $userid.'.jpg';?>';
var a=imageExists(imageUrl, function(exists){
  if(exists)
  {
	  document.getElementById("tstimg").src="http://10.11.4.35/SMS/usrphotos/user/<?php echo $userid.'.jpg';?>";
  }
  else
  {
	  document.getElementById("tstimg").src="avatar.png";
  }
});
</script>
<script type="text/javascript">
var cnt;
function wordcount(count) {
count = count.replace(/(^\s*)|(\s*$)/gi,"");
count = count.replace(/[ ]{2,}/gi," ");
count = count.replace(/\n /,"\n");
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w_count');
ele.value = 250-cnt;
if(ele.value>250)
{
	alert("You Can't Enter more than 250 words;");
}
}
</script>
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
	
<div style="position:fixed;font-weight: bold;top:24%;font-size:30px;left:80%;background:#0080FF;width:10%;height:10%;border-radius:5px;text-align:center;color:white" id="quiz-time-left"></div>
 <script type="text/javascript">
	  var total_seconds = 60*<?php echo $row["time"];?>;
	   var c_minutes = parseInt(total_seconds/60);
	    var c_seconds = parseInt(total_seconds%60);
	     function CheckTime(){ document.getElementById("quiz-time-left").innerHTML =c_minutes + ':'+ c_seconds;
	      if(total_seconds <=0){ setTimeout('document.quiz.submit()',1);
			  <!--window.location.assign('exam.php');-->
			  }
	       else { total_seconds = total_seconds -1; c_minutes = parseInt(total_seconds/60); c_seconds = parseInt(total_seconds%60); setTimeout("CheckTime()",1000); }} setTimeout("CheckTime()",1000);
	        </script>
<div> </div><br>
 </center>
 <div id="ksr" style="position:absolute;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:150px">
	 <img src="http://10.11.4.35/SMS/usrphotos/user/<?php echo $userid.'.jpg'; ;?>" id="tstimg" style="position:absolute;top:11%;left:70%;bottom:100%;z-index:111" width="15%" height="125px">
	 <p style="position:absolute;top:30px;right:10px;">NAME:-&nbsp;&nbsp;<?php echo $row2["name"]; ?></p>
	<p style="position:absolute;top:60px;right:10px;">ID NO:-&nbsp;&nbsp;<?php echo $row2["id"]; ?></p>
	<p style="position:relative;top:20px;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p>
</div>
</body>
