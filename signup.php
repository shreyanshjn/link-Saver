<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body class=signupPart>
<?php
include 'header.php';
?>
<div class="signup">
<h1 class="signup" >&nbsp &nbsp Sign up</h1>
<form  class="signup" action="paste.php" method="POST">
<input  class="sign1" type="text" name="name" placeholder="name" required><br>
<input class="sign1" type="text" name="username" placeholder="Create username" required><br>
<input class="sign1" type="text" name="email" placeholder="email" required> <br>
<input class="sign1" type="text" name="mobile" placeholder="mobile" required><br>
<input class="sign1" type="password" name="password" placeholder="password"required><br>
<input class="submit"  type ="submit" value="SUBMIT">
</form>
</div>
</body>
</html>
