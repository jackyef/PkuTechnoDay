<?php
$hostname = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "bb6eed09f722d6";
$password = "e12b9056";
$database = "jacky-webapp_db";

$conn = mysql_connect($hostname, $username, $password) or die ("Error connecting to database server");

$db = mysql_select_db($database) or die ("Error connecting to database");

?>