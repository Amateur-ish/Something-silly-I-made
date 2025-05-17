<?php

include 'database.php';

$sql = "SELECT * FROM `faculty_memb_details`";

$result = mysqli_query($conn, $sql);
$count = 0;
while($row = mysqli_fetch_assoc($result)) {
    $user =  $row['fullname'];
    $email = $row['email'];
    $facult_position = $row['faculty_position'];
    $count++;
    echo "       
    <tr>           
        <td scope='row'>".  $count ."</td>           
        <td>". $row['facult_id'] . "</td>           
        <td>". $row['fullname'] ."</td>           
        <td>". $row['faculty_position']."</td>
        <td> <button class='btn btn-success' onclick='openModal(\"". $row['fullname'] . "\", \"" . $email . "\", \"" .  $facult_position."\")'> Options </button> </td>           
    </tr>
    ";

}