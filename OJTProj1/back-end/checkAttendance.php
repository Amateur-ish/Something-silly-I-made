<?php
include 'database.php';
session_start();
$type = $_POST['submit_type'];
if(array_key_exists('login', $_SESSION) && !$_SESSION['login'] && $type === "login" && $_SESSION['onetime']) {
    echo "loggedin";
    $time = $_POST['time'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $name = $_POST['name'];
    $pos = $_POST['pos'];
    $email = $_POST['email'];
    $sql = "INSERT INTO attendance_submission(email, faculty_position, name, month, day, year, recorded_time, submit_type)
    VALUES('$email', '$pos', '$name', '$month', '$day', '$year', '$time', '$type')";
    $sql2 = "UPDATE `faculty_acc` SET status = 'login' WHERE email = '$email'";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    $_SESSION['onetime'] = false;
    $_SESSION['login'] = true;
}