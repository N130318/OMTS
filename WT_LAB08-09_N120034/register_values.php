<?php
    include "dbconfig.php";
    
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $dob=$_POST["dob"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $year=$_POST["year"];
    $fav_wt=$_POST["WT"];
    $fav_cn=$_POST["CN"];
    $fav_cc=$_POST["CC"];
    $fav_oops=$_POST["OOPs"];
    $user=htmlentities(mysql_real_escape_string($_POST['uname']));
    $passwd=htmlentities(mysql_real_escape_string($_POST['passwd']));
    $secques=$_POST["security"];
    $sqanswer=$_POST["sqanswer"];
    
    
    $sql="INSERT INTO student_details (firstname,lastname,dob,email,phone,address,year,fav_wt,fav_cn,fav_cc,fav_oops,username,password,sec_ques,sec_ans) 
    values('$firstname','$lastname','$dob','$email','$phone','$address','$year','$fav_wt','$fav_cn','$fav_cc','$fav_oops','$user','$passwd','$secques','$sqanswer')";
    mysql_query($sql);
    
    echo "<script>window.location='login.php';</script>";
?>
