<?php

$username = "nicusor";
$password = "capitadepaie";
$email = "nicu@alugavriil.com";

$connection = new mysqli("localhost", "root", "", "my_users") or die("connection failed");

$register_user = "INSERT INTO users (name, password, email) VALUES (".$username.", ".$password.", ".$email")";

if($connection->query($register_user)){
	echo "task failed sucessfully";
}

$connection->close();

?>
