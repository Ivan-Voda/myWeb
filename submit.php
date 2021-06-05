<?php
	//opens a new file to write
	$data_file = fopen("example.txt","w");

	$name = $_POST["name"];
	$name = $_POST["email"];
	$name = $_POST["password"];
	$text_to_write = $email. " " .$password;

	//write data to server side
	fwrite($data_file, $text_to_write)
	fclose($data_file);
?>