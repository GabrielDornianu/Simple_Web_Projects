<?php

$username = "nicusor";
$password = "capitadepaie";
$email = "nicu@alugavriil.com";

$connection = new mysqli("localhost", "root", "47rw9949;", "my_users") or die("connection failed");

$register_user = "INSERT INTO users (name, password, email) VALUES (".$username.", ".$password.", ".$email")";

if($connection->query($register_user)){
	echo "task failed sucessfully";
}

$connection->close();

?>
