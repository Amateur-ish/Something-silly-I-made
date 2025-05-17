<?php
include "database.php";

// All the loaded post stuff
$email = $_POST['email'];
// $password = $_POST['password'];

//The detailed stuff 
$fileName = $_FILES['profile']['name'];
$first_name = $_POST['fname'];  
$last_name = $_POST['lname'];
$full_name = $first_name . " " . $last_name;
$facult_pos = $_POST['facult_pos'];
$phone_num = $_POST['phone_num'];
$birth_date = $_POST['birth_date'];
$facult_id = $_POST['facult_id'];
$passcode = $_POST['passcode']; 
$tempfileName = $_FILES['profile']['tmp_name'];

// filter and stuff
$allowedTypes = array("jpg", "jpeg", "png", "webp");
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$targetLocation = "uploads/".$fileName;

if(!in_array($ext, $allowedTypes)) {
    die("Invalid file");    
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if(move_uploaded_file($tempfileName, $targetLocation)) {
        echo "upload successful";
    }
    else {
        echo "upload unsuccessful";
    }


    $sql = "INSERT INTO faculty_memb_details(fullname, last_name, first_name, profilepicture, facult_id,
    faculty_position, email, cont_num, birth_date, passcode, status) 
    VALUE('$full_name', '$last_name', '$first_name', '$fileName', '$facult_id', '$facult_pos',   
    '$email', '$phone_num', '$birth_date', '$passcode', 'newregi')";
    // $sql2 = "INSERT INTO faculty_acc(facult_id, name, email, password, facult_position, permissions, status)
    // VALUE('$facult_id', '$full_name', '$email', '$password','$facult_pos' ,'faciliJutator', 'login')";
    
    mysqli_query($conn, $sql);
    // mysqli_query($conn, $sql2);
    // header('location: /ojtproj1/admin-side/usermanage.php');
}
else {
    
}



        
