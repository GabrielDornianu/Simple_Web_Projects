<?php
	
	
	echo '<link rel="stylesheet" href="login_reg_style.css" type="text/css">';
	echo '<link rel="stylesheet" href="main_style.css" type="text/css">';
	echo '<link rel="stylesheet" href="footer_style.css" type="text/css">';

?>

<html>
<body>

<div class="register">
<form action="main_page.php" method="post">
<label for="username">Username:</label>
<input type="text" name="username" id="username"></br>
<label for="password1">Password:</label>
<input type="password" name="password1" id="password1"></br>
<label for="password2">Repeat password:</label>
<input type="password" name="password2" id="password2"></br>
<label for="email">Email:</label>
<input type="email" name="email" id="email"></br>
<input type="submit" value="Sign up">
</form>
<a href="login.php">Or login..</a>
</div>
</body>
</html>
