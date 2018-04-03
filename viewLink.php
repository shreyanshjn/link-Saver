<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php 
 session_start();
?>
<div class="log">
<a href="index.php" class="common">HOME</a>
<a href="addlink.php" class="common">ADD LINK</a>
<a href="index.php" class="common">LOGOUT</a>
<?php
 echo "<span class='welcome'> Welcome  " . $_SESSION["username"];
?>

</div>

<?php
 include 'setup.php';
 $user=$_SESSION["username"];
 $sql="Select * from $user";
 $result=$conn->query($sql);
 if($result->num_rows>0)
 {?>   
      <table class="table">
      <tr> <th>Serial no. </th>
           <th>Description</th>
          <th>Link</th></tr>
      <?php
      while($rows=$result->fetch_assoc())
      { ?>
         <tr> <td><?php echo $rows["id"];?> </td>
              <td><?php echo $rows["description"];?></td>
         <td><a href="<?php echo $rows["link"]; ?>" class="TableLink" target="_blank"><?php echo $rows["link"]; ?></a> </td></tr>
         <?php
      } 
     echo  "</table>";
 }
?>
</body>
</html> 
