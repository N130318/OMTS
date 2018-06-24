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
$dm_id="";
$ve="";
if(isset($_POST['sendmail']))
	{
		$dm_id=$_POST['user_id'];
	   $sq="select * from reg where id='$dm_id'";
	   $ret=mysqli_query($conn,$sq);
	   $retr=mysqli_fetch_assoc($ret);
	   $nam="";
	   $uid="";
	   $pwd="";
	   $emal="";
	   if($retr)
	   {
		   $emal=$retr["email"];
		   $uid=$retr["id"];
		   $pwd=$retr["password"];
		   $nam=$retr["name"];
	   }
	   $path="instr.pdf";
	   $name="OMTS_instructions.pdf";
	   $type=".pdf";
	   $encoding="quoted-printable";
	   $mailto = $emal;
	   $mailSub = "Regarding OMTS Exam Link";
	   $mailMsg = "Hi " .$nam .",<br/>Please Click on below link to login and start exam...<br /> Link is:<a href=http://" .getHostByName(getHostName()). "/omts/index.php>http://" .getHostByName(getHostName()). "/omts/index.php</a><br/>Your Exam Username is:".$uid."<br/>Password is:".$pwd."<br/><b>Please read below attachment before taking test</b><br/>If you have any Login problem,Please consult OMTS Team from E3CSE4,SG06<br/>If any problem occured while taking exam please send a mail<br/> to rguktn.omts13@gmail.com we will rectify as soon as possible";
	   require 'PHPMailer-master/PHPMailerAutoload.php';
	   $mail = new PHPMailer();
	   $mail ->IsSmtp();
	   $mail ->SMTPDebug = 0;
	   $mail ->SMTPAuth = true;
	   $mail ->SMTPSecure = 'ssl';
	   $mail ->Host = "smtp.gmail.com";
	   $mail ->Port = 465; // or 587
	   $mail ->IsHTML(true);
	   //$mail ->Username = "rguktn.omts13@gmail.com";
	   //$mail ->Password = "grass@841";
	   //$mail ->SetFrom("rguktn.omts13@gmail.com");
	   $mail ->Username = "gopi.martha269@gmail.com";
	   $mail ->Password = "sureshmartha";
	   $mail ->SetFrom("gopi.martha269@gmail.com");
	   $mail ->Subject = $mailSub;
	   $mail ->Body = $mailMsg;
	   $mail ->AddAddress($mailto);
	   $mail->AddAttachment($path,$name,$encoding,$type);
	   if (!$sock = @fsockopen('www.google.com', 80, $num, $error, 5))
	     echo "<script>alert('You are in Offline');</script>";
	   else
	   {
		 //echo 'OK';

		   if(!$mail->Send())
		   {
				echo "Mail Not Sent.Please Check your Network Connection.Requires Full Internet Access.";
		   }
		   else
		   {
			   //echo "<script>alert('Not came');</script>";
			   echo "We had sent Exam Link to Your Registered E-Mail";
			   $ve="update `reg` set mailstatus='Y' where id='$dm_id'";
			   if(mysqli_query($conn,$ve))
			   {
			   }
			   else
			   {
				   echo "<script>alert('Status Update Failed');</script>";
			   }
				/*?><script>alert("the mail is succesfully sent");</script><?php*/
			
            }
      }
}
$sql = "SELECT * FROM reg";
$result = mysqli_query($conn, $sql);?>
<div style="position:fixed;width:50%;height:58%;top:32%;left:25%;color:blue;font-size:20px;z-index:111;overflow-y:auto;"><center><h1 style="border:5px solid maroon ;"><b>Registered Users</b></h1></center><table border="2px solid blue" style="font-size:15px;color:blue" width="40%"><tr><th>University ID:</th><th>Name:</th><th>Email</th><th>Mail Status</th></tr><?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		?>
        <tr>
        	<td> <?php echo $row["id"]; ?> </td>
        	<td> <?php echo $row["name"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td style="padding-left:5; padding-top:8;">
			<?php
			       $ud=$row["id"];
				   $fm="select mailstatus from reg where id='$ud'";
				   $ex=mysqli_query($conn,$fm);
				   $r1=mysqli_fetch_assoc($ex);
				   if($r1)
				   {
					   if($r1["mailstatus"]=='Y')
					   {
						   ?><form method="post"> 
							<input type="hidden" name="user_id" value="<?php echo $row["id"]; ?>"> 
							<input type="submit" name="alreadymail" class="btn btn-success" value="Already Sent" disabled> 
							</form> <?php
					   }
					   else
					   {
						   /*?><a href="user_data.php" class="btn btn-success" style="POSITION:ABSOLUTE;left:400px;font-size:20px;top:270px;color:white;width:150px;height:40px;border-radius:10px;text-decoration:none"><b><center>Send mail</center></b></a><?php*/
						    ?><form method="post"> 
							<input type="hidden" name="user_id" value="<?php echo $row["id"]; ?>"> 
							<input type="submit" name="sendmail" class="btn btn-success" value="Send Mail"> 
							</form> <?php
					   }
					}
				?>
				
            </td>
        </tr><?php
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
    position:absolute;
}
td {
    padding: 3px;
}
th {
    height: 30px;
} 
table, td, th {
    border: 1px solid green;
    text-align:center;
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
<body ></body>
<div class=""> 
<a href="admin.php" style="position:fixed;z-index:111;top:40%;left:80%;color:white;width:10%;height:10%;border-radius:5px;background:blue;text-decoration:none;font-size:20px"><center><-----BACK</center></a>

 </div><br>
<div id="ksr" style="position:fixed;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:200px"><img src="logo.png" border="5px solid red" style="position:absolute;top:3%;left:70%;height:150px;width:405px;">
<p style="position:relative;top:40px;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p>

 

