<?php

$stu_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM student WHERE sid= {$stu_id}";

$result = mysqli_query($conn, $sql);

header('Location: http://localhost/Pondit%20Code/CRUD/index.php');

mysqli_close($conn);

?>