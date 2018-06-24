<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}?>
<html>
	<body>
		<?php
		$sql="SELECT * FROM reg";
		$result=mysqli_query($conn,$sql);
		$i=0;
		$myIp = getHostByName(getHostName());
		?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<table style="font-family:arial;font-size:15" width="600" border="5" cellpadding="1" cellspacing="1" align="center">
			<font face="arial" size="15" color="blue"></font>
			<tr bgcolor="#009933">
				<th><b>ID No</b></th>
				<th><b>Name </b></th>
				<th><b>Batch</b></th>
				<th><b>Update</b></th>
				<th><b>Delete</b></th>
				<th><b>Check</b></th>
				<th><b><?php echo $myIp;?></b></th>
			</tr>
			<?php
			while($abc=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo '<input type="text" value="'.$abc['id'].'" name="uid'.$i.'" readonly />';
				echo "</td>";
				echo "<td>";
				echo '<input type="text" value="'.$abc['name'].'" name="name'.$i.'" />';
				echo "</td>";
				echo "<td>";
				echo '<input type="text" value="'.$abc['year'].'" name="batch'.$i.'"  />';
				echo "</td>";
				echo "<td>";
				echo '<input type="submit" value="Update" name="update'.$i.'"  />';
				if(isset($_POST['update'.$i.'']))
				{
					if(isset($_POST['check'.$i.'']))
					{
						$btch=$_POST['batch'.$i.''];
						$nm=$_POST['name'.$i.''];
						$id=$_POST['uid'.$i.''];
						$update="update reg set name='$nm', year='$btch' where id='$id'";
						$qry=mysqli_query($conn,$update);
						if(!$qry){echo "Update Failed";}
						else
						{
						     //header("location:userdetail.php");
							echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
						}
					}
					else
					{
						echo "Plz Select Checkbox";
					}
					
				}
				echo "</td>";
				echo "<td>";
				echo '<input type="submit" value="Delete" name="delete'.$i.'"  />';
				if(isset($_POST['delete'.$i.'']))
				{
					echo "Delete";
					if(isset($_POST['check'.$i.'']))
					{
						$id=$_POST['uid'.$i.''];
						$delete="delete from reg where id='$id'";
						$qry=mysqli_query($conn,$delete);
						if(!$qry){echo "Delete Failed";}
						else
						{
							//header("location:userdetail.php");
							echo "<script type='text/javascript'>alert('Deleted Successfully');</script>";
						}
					}
					else
					{
						echo "Plz Select Checkbox";
					}
					
				}
				echo "</td>";	
				
				echo "<td>";
				echo '<input type="checkbox" name="check'.$i.'"  />';

				echo "</td>";
				
				echo "</tr>";
				$i++;		
			}
		?>		
		</table>
		</form>
	</body>
</html>
