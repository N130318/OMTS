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
if(isset($_POST['mdelete']))
	{
		$dm_id=$_POST['user_id'];
		//echo $dm_id;
		$ve="delete from `check` where id='$dm_id'";
		$sq="delete from `result` where idno='$dm_id'";
		if(mysqli_query($conn,$ve))
		{
		   if(mysqli_query($conn,$sq))
		   {
				?><script>alert("the result is succesfully deleted");</script><?php
		   }
		   else
		   {
				?><script>alert("the result table is not deleted");</script><?php
		   }
		}
		else{
			?><script>alert("the check table is not deleted");</script><?php
		}  
	}
$sql = "SELECT * FROM result";
$count=1;
$result = mysqli_query($conn, $sql);?>
<div style="position:absolute;width:50%;height:50%;top:30%;left:25%;padding-top:20px;color:blue;font-size:20px"><table border="2px solid blue" style="font-size:15px;color:blue" width="40%"><tr><th>ID</th><th>User id</th><th>Marks</th><th>delete result</th></tr><?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		?>
        <tr>
        	<td> <?php echo $count; ?> </td>
        	<td> <?php echo $row["idno"]; ?> </td>
            <td> <?php echo $row["marks"]; ?> </td>
            <td style="padding-left:5; padding-top:8;"><form method="post"> 
            	<input type="hidden" name="user_id" value="<?php echo $row["idno"]; ?>"> 
            	<input type="submit" name="mdelete" class="btn btn-success" value="delete"> 
                 </form> 
            </td>
        </tr><?php
        $count++;
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
<div id="ksr" style="position:fixed;width:100%;left:0%;top:0%;background-image:url(bgm.jpg);left:0%;height:200px"><img src="logo.png" style="position:absolute;top:5%;left:75%;bottom:100%z-index:111" width="150" height="100">
<p style="position:fixed;top:40px;font-weight:50px;z-index:111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p>

 
