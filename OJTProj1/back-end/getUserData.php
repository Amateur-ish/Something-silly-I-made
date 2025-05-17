<?php
include 'database.php';

$user = $_POST['user'];
$month = $_POST['month'];
$year = $_POST['year'];
$day = $_POST['day'];

$sql = "SELECT * FROM `faculty_memb_details` WHERE fullname = '$user' ";
$sql2 = "SELECT * FROM `attendance_submission` WHERE name = '$user' AND submit_type = 'login'";
$sql3 = "SELECT * FROM `attendance_submission` WHERE name = '$user' AND submit_type = 'logout'";
$response = [];
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);
$timein = (mysqli_num_rows($result2) > 0) ? $row2['recorded_time'] : "N/A";
$timeout = (mysqli_num_rows($result3) > 0) ? $row3['recorded_time'] : "N/A";

$response['user'] =  $row['fullname'];
$response['email'] = $row['email'];
$response['img'] = $row['profilepicture'];
$response['facultid'] = $row['facult_id'];
$response['position'] = $row['faculty_position'];
$response['phone_num'] = $row['cont_num'];
$response['timein'] = $timein;
$response['timeout'] = $timeout;



echo json_encode($response);