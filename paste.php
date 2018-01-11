<?php
 include "setup.php";
 $name=$username=$email=$mobile=$password="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $name=$_POST["name"];
   $username=$_POST["username"];
   $email=$_POST["email"];
   $mobile=$_POST["mobile"];
   $password=$_POST["password"];
 }
 $sql="SELECT * FROM login WHERE username='$username' OR email='$email' ";
 $result=$conn->query($sql);
 if($result->num_rows>0)
 {
     include 'header.php';?>
     <h2 style="text-align:center">username or email is already taken <h2>
     <div class="signin" style="width:30%;margin:auto">
     <p style="color:blue">Sign up</p>
     <form action="paste.php" method="POST">
     <input type="text" name="name" placeholder="name" required><br>
     <input type="text" name="username" placeholder="Create username" required><br>
     <input type="text" name="email" placeholder="email" required> <br>
     <input type="text" name="mobile" placeholder="mobile" required><br>
     <input type="password" name="password" placeholder="password"required><br>
     <input type ="submit" value="SUBMIT">
     </form>
     </div>
 
    <?php include 'footer.php';
 }
 else
 {
      $sql="INSERT INTO login(name,username,email,mobile,password)
      VALUES('$name','$username','$email','$mobile','$password')";
      if ($conn->query($sql) === TRUE)
      {
         include 'header.php';
         ?>
         <?php
         if($conn->connect_error)
         {
            die("connecion failed".$conn->connect_error);
         }
         $sql1="CREATE TABLE $username(
         id INT(7) AUTO_INCREMENT PRIMARY KEY,
         link VARCHAR(250) NOT NULL)";
         include 'footer.php';
         if($conn->query($sql1)===TRUE)
         {
            echo  "<h2 style='text-align:center ;color:blue'>thank you for signing up<h2>";
         }
      }  
      else
      {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
$conn->close();
?>
