<?php
 $servername="localhost";
 $usrname="root";
 $passwrd="mylaptop62$$";
 $db="linkSaver";
 $conn=new mysqli($servername,$usrname,$passwrd,$db);
 if($conn->connect_error)
 {
   die("connection error".$conn->connect_error);
 }
?>
