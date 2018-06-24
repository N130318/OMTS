<?php

include 'dbh.php';

$nam = $_POST['name'];
$uid = strtoupper($_POST['usrid']);
$pwd = $_POST['paswd'];
$cnfpwd = $_POST['cnfpaswd'];
$emal = $_POST['email'];
$gender = $_POST['gendr'];
$batch="";
$btch="";
$batch=strtoupper(substr($uid,0,3));
if($batch==="N12")
{
	$btch="E4";
}
else if($batch==="N13")
{
	$btch="E3";
}
else if($batch==="N14")
{
	$btch="E2";
}
else if($batch==="N15")
{
	$btch="E1";
}
else if($batch==="N16")
{
	$btch="P2";
}
else if($batch==="N17")
{
	$btch="P1";
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$sql = "SELECT * FROM reg where id='$uid'";
	$reslt = mysqli_query($conn, $sql);
	$num=mysqli_num_rows($reslt);
	if($pwd!=$cnfpwd)
	{
		echo "<script>alert('password not match');window.location.assign('register.php');</script>";
	}
	else if($num!=0)
	{
		echo "<script>alert('User Already existed');window.location.assign('register.php');</script>";
	}
	else
	{
		$sql2="INSERT INTO reg (id, name, year, password, confirm, email, gender) 
			values ('$uid', '$nam', '$btch', '$pwd', '$cnfpwd', '$emal', '$gender')";
		$result2=$conn->query($sql2);
		
		/*ini_set("SMTP", "aspmx.l.google.com");
		ini_set("sendmail_from", "n130318@rguktn.ac.in");
		$message = "Thois jjj";
		$headers = "From: admin@rguktn.ac.in";
		mail("n130318@rguktn.ac.in", "Testing", $message, $headers);
			echo "Check your email now....<BR/>";*/
	   //$myIp = getHostByName(getHostName());
	   $mailto = $emal;
	   $mailSub = "Regarding OMTS Registration";
	   $mailMsg = "Hi <b>" .$nam ."</b>,<br/>Your Registration for OMTS is Successfully Completed...<br />We will send you an exam link soon... <br/> Keep the following Registration details to take exam:<br/> Your Username is:".$uid."<br/>Password is:".$pwd."<br/>If you have any Registration problem,Please consult OMTS Team from E3CSE4,SG06";
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

	   if(!$mail->Send())
	   {
		   echo "<center><h1 style='color:Red;font-weight:200'>Mail Not Sent.Please Check your Network Connection.Requires Full Internet Access.</h1></center>";
	   }
	   else
	   {
		   echo "<center><h1 style='color:Green;font-weight:200'>Thank you for registering to OMTS<br>We have sent an registration details to your registered E-Mail.Please check it.Please Verify your mobile by clicking on below button</h1>
		   <form action='moblverify.php' method='post'><button type='submit' name='btn-save'>Verify Mobile</button></form></center>";
	   }
		
	   echo "<script>alert('Successfully Registered.');</script>";
	   //<script>window.location.assign('index.php')</script>;
	}
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
	<title>OMTS</title>
</html>
