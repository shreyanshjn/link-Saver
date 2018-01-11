<html>
<head>
<link rel="stylesheet" href="css/main.css"> 
</head>
<body>
<?php
 session_start();
 include 'setup.php';
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $_SESSION["username"]=$_POST["username"];
   $_SESSION["password"]=$_POST["password"];
 }
 $user=$_SESSION["username"];
 $pass=$_SESSION["password"];
 $sql="SELECT * FROM login
       WHERE username=BINARY '$user' AND password=BINARY '$pass'";
 $sql2="SELECT * FROM login
        WHERE username= BINARY '$user'";
 $result=$conn->query($sql);
 $result2=$conn->query($sql2);
 if($result->num_rows>0)
 {
    $sql1="SELECT * FROM BINARY $user";
    $result1=$conn->query($sql1);
         ?>   
         <div class="log">
         <a href="index.php" title='home page' class="common">Home</a>
         <a href="index.php" class="common">LOGOUT</a>
         <?php echo "<span class='Welcome' >Welcome $user</span>";?>
        </div>
 
        <div class="log1">
       <a href="addlink.php" class="common">Add Link</a>
        <a href="viewLink.php" class="common">View Link</a>
         </div>
       <?php 
       
 }
 else if($result2->num_rows>0)
 {
      echo "<script>alert('Incorrect password')  </script>";
      echo "<script>windows.location.href='/var/www/html/Link\ Saver/login.php'</script>";
      echo "<a  class='common' title='go back to login page' href='login.php'>BACK</a>";
 }
 else
 {
   include 'header.php';
    echo "<h2 class='not'>you are not registered with us</h2>".$conn->error;
 } 
 ?>
</body>
</html>
