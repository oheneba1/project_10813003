<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pjwork1_10813003";


if(!$con =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}