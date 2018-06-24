<?php

$conn=mysqli_connect("localhost","root","","note");

if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());
}
?>
