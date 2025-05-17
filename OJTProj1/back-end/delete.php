<?php
include 'database.php';
$email = $_POST['email'];
$sql = "DELETE FROM `faculty_acc` WHERE email = $email";
mysqli_query($conn, $sql);   
