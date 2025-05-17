<?php
include 'database.php';

$input = $_POST['input'] . "%";
$sql = "SELECT * FROM `faculty_memb_details` WHERE name LIKE '$input'";
