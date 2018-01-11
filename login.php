<html>
<head>
</head>
<body>
<?php
  include 'header.php';
?>

<div class="login">
<h1 class="login">&nbsp &nbsp LOGIN</h1>
<form action="logout.php" method="POST">
<input class="sign1" type="text" name="username" placeholder="Username" required><a href="mail.php" title="reset using email id ">forgot username</a><br>
<input class="sign1" type="password" name="password"  placeholder="Password" required><a href="mail2.php" title="reset using email id ">forgot password</a> <br>
<input class="submit" type="submit" value="login">
</form>
</div>

<?php
 include 'footer.php';
?>
</body>
</html> 
