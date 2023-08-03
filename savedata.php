<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];


include 'connection.php';

$sql = "INSERT INTO student(sname, saddress, sclass, sphone) 
    VALUE('{$stu_name}' , '{$stu_address}', '{$stu_class}', '{$stu_phone}')";

$result = mysqli_query($conn, $sql);


header("Location: http://localhost/Pondit%20Code/CRUD/index.php");
// mySQL connection cluse
mysqli_close($conn);


?>