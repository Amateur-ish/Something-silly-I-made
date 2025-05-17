<?php
include 'database.php';

$getTime = $_POST['time'];
$name = $_POST['name'];
$email = $_POST['email'];
$facultpos = $_POST['facultpos'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$submit_type = $_POST['submittype'];

$sql = "INSERT INTO attendance_submission(name, email, faculty_position, month, day , year, recorded_time, submit_type) 
VALUES('$name', '$email', '$facultpos', '$month', '$day', '$year', '$getTime', '$submit_type')";

mysqli_query($conn, $sql);
echo "sent successfully";
exit(); 
