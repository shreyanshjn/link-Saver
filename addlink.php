<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php session_start();
?>
<div class="log">
<a href="index.php" class="common">HOME</a>
<a href="viewLink.php" class="common" >View added link </a>
<a href="index.php" class="common">LOGOUT</a>
<?php 
 echo "<span class='welcome'> Welcome" . $_SESSION["username"];
?>
</div>

<div>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
<p> Just copy the link and paste below </p>
<input type="text" class="addlink" name="link" required placeholder="www.linkSaver.com"><br>
<p>Enter some description</p>
<input type="text" class="linkDesc" name="desc"  placeholder="eg:- study material of java"><br>
<input type="submit" class="submit" value="Add Link">
</form>
</div>

<?php 
include 'setup.php';
$link="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $link=$_POST["link"];
  $desp=$_POST["desc"];
  $user=$_SESSION["username"];
  $sql="INSERT INTO $user(link,description)
       VALUES('$link','$desp')";
  if($conn->query($sql)===TRUE)
  {
    echo "added successfully";
  }
  else
  {
   echo "error adding link ".$conn->error;
  }
}
?>
</body>
</html>
