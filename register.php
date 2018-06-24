<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <title>OMTS</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./OMTS_files/bootstrap.min.css">
    <link rel="stylesheet" href="regis.css">
  <script src="./OMTS_files/jquery.js.download"></script>
  <script src="./OMTS_files/bootstrap.min.js.download"></script>
  <link rel="icon" href="http://10.11.4.99/cse/assets/images/icon.png">
  <script src="./OMTS_files/modernizr.js.download"></script>
  <script>
	  var gen = document.registration.gndr;
	  function validgen()
		{
		x=0;
		if(gen.checked) 
		{
			x++;
		} 
		if(x==0)
		{
			alert('Select Male/Female');
			gen.focus();
			return false;
		}
  </script>
  <style>
  
input
{
	border-radius:5px;
}
p,input,marquee
{
	font-family:Times New Roman;
	color:#1980AF;
}

a:hover{font-size :20px;
		color :red;}
  </style>
<body style="width:100%; height:900px;position:absolute;background:url('3.jpg'); background-size:100% 100%;background-attachment:scroll;">
 <div> </div><br>
 </center>
 <div style="z-index:111;position:absolute;width:100%;left:10%;top:0%;background-image:url(bgm.jpg);left:0%;height:200px">
<p style="position:relative;top:35%;font-weight:50px;z-index:1111;font-size:50px;left:5%"><b>ONLINE MOCKTEST</b></p><img src="logo.png" border="5px solid red" style="position:absolute;top:3%;left:70%;height:150px;width:405px;" >
</div>
 <br><br><br>
 <center>
<div style="position:absolute;left:35%;top:25%;"  id="for">
	<fieldset style="width:550px;height:580px;border:2px solid #2370BC;box-shadow:15px 10px 10px #2370BC;background-color:lightgray;border-radius:25px;">
	 <legend style="color:white;text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue;font-size:18px; top:3%:"><h3><b>Registration form</b></h3></legend><br>
 <form method="POST" action="regstr.php" onChange="return validgen()" name="registration">
			<input type="text" class="form-control" id="inputdefault" name="name" placeholder="Enter Your Name" style="width: 250px;height :30px;background-color: #FFFFFF;border-radius :8px;" required=""><br> <br> 
			<input type="text" class="form-control" id="inputdefault" name="usrid" maxlength="7" pattern="[nN]{1}[0-9]{6}" placeholder="Enter User Id Ex:N130318" style="width: 250px;text-transform: uppercase;height :30px;background-color: #FFFFFF;border-radius :8px;"required=""><br><br>
			<input type="password" class="form-control" id="inputdefault" name="paswd" placeholder="Enter Password" style="width: 250px;height :30px;background-color: #FFFFFF;border-radius :8px;" required=""><br><br>
			<input type="password" class="form-control" id="inputdefault" name="cnfpaswd" placeholder="Enter Password Again" style="width: 250px;height :30px;background-color: #FFFFFF;border-radius :8px;" required=""><br><br>
			<input type="text" class="form-control" id="inputdefault" name="email" placeholder="Enter E-Mail Address" style="width: 250px;height :30px;background-color: #FFFFFF;" required=""><br><br>
			<label>Choose Gender:</label> &nbsp;<input type="radio" name="gendr" style="width: 50px;height :15px;background-color: #FFFFFF;border-radius :8px;" value="F"required><label>Female</label> &nbsp; &nbsp;
			<input type="radio" name="gendr" style="width: 50px;height :15px;background-color: #FFFFFF;left:70px;" value="M" required><label>Male</label><br><br>
			<center><a href="index.php"> Already have an account...?</a></center>
			<button type="submit" class="btn btn-success" style="width :80px;height :30px;color :white;background-color: #0099CC;border-radius :8px;">Register</button>
		</form>
 </form>
 </fieldset>
 </div>
 </center>
 </div>
 
 </body>
               
</body></html>
