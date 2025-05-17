<?php
include 'database.php';

$email = $_POST['email'];
$type = $_POST['type'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$time = $_POST['time'];
$passcode = $_POST['passcode'];

$sql = "SELECT * FROM `faculty_memb_details` WHERE email = '$email'";

function changePassword($email, $type) {
   
    include 'database.php';
    // getting data.
    $sql = "SELECT * FROM `faculty_memb_details` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['fullname'];
    $faculty_position = $row['faculty_position'];
    global $month;
    global $day;
    global $year;
    global $time;
    global $passcode;
    
    if ($type === "newregi" && $row['passcode'] === $passcode) {
        $sql = "INSERT INTO attendance_submission(name, faculty_position, email, month, day, year, recorded_time, submit_type) 
        VALUES('$name', '$faculty_position', '$email', '$month', '$day', '$year', '$time', 'login')";
        $sql2 = "UPDATE `faculty_memb_details` SET status = 'login' WHERE email = '$email'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        
        echo 'changepass';
    }
    else if ($type === "changepass") {
        $newPass = $_POST['newPass'];
        $sql = "UPDATE `faculty_memb_details` SET passcode = $newPass WHERE email = '$email'";
        mysqli_query($conn, $sql);
        echo 'changed';
    }
    else {
        echo 'invalid';
    }
}

function submitLogout($email) {
    include 'database.php';
    $sql = "SELECT * FROM `faculty_memb_details` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['fullname'];
    $faculty_position = $row['faculty_position'];
    global $month;
    global $day;
    global $year;
    global $time;
    global $passcode;

    if ($row['passcode'] === $passcode) {
        $sql = "INSERT INTO attendance_submission(name, faculty_position, email, month, day, year, recorded_time, submit_type) 
        VALUES('$name', '$faculty_position', '$email', '$month', '$day', '$year', '$time', 'logout')";
        $sql2 = "UPDATE `faculty_memb_details` SET status = 'logout' WHERE email = '$email'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        echo 'logout';
    }
    else {
        echo "invalid";
    }
}

function submitAttendance($email) {
    include 'database.php';
    $sql = "SELECT * FROM `faculty_memb_details` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
    $name = $row['fullname'];
    $faculty_position = $row['faculty_position'];
    global $month;
    global $day;
    global $year;
    global $time;
    global $passcode;
    if ($row['passcode'] === $passcode) {
        $sql = "INSERT INTO attendance_submission(name, faculty_position, email, month, day, year, recorded_time, submit_type) 
        VALUES('$name', '$faculty_position', '$email', '$month', '$day', '$year', '$time', 'login')";
        $sql2 = "UPDATE `faculty_memb_details` SET status = 'login' WHERE email = '$email'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        echo 'login';   
    }
    else {
        echo "invalid";
    }
}

try {
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if($type !== "newregi") {
        $sqlnine = "SELECT * FROM `attendance_submission` WHERE name = '$name' AND  month = '$month' AND day = '$day' AND year = '$year' AND submit_type = '$type'";
        $resultFinal = mysqli_query($conn, $sqlnine);
        if (mysqli_num_rows($resultFinal) != 0) {
            die("errorsubmit");
        }
    }

    switch($type) {
        case "login":
            submitLogout($email);
            break;

        case "logout":
            
            submitAttendance($email);
            break;
        
        case "newregi":
            changePassword($email, $type);
            break;

        case "changepass":
            changePassword($email, $type);
            break;

        default: 
            echo "error";
            break;
    }
}

catch (mysqli_sql_exception) {

}