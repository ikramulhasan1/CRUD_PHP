<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '';
$dbName = 'crud';

$conn = mysqli_connect("$serverName", "$userName", "$userPassword", "$dbName") or die('Connection Failed');

?>