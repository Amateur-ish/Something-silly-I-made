<?php
include 'database.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];  
    $sql = "SELECT * FROM `attendance_submission` WHERE month='$month' AND
    day = '$day' AND year = '$year' AND submit_type = 'login'";

    try {
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) <= 0){
            echo "
                <tr>           
                    <td colspan='5' class='text-center bg-secondary text-light' >There are no faculty members that have submitted their attendance yet.</td>     
                </tr>";        
        }
        else {
            $count = 1;
            while($row = mysqli_fetch_assoc($result)) {
                $nameThing = $row['name'];
                $email = $row['email'];
                $pos = $row['faculty_position'];
                $time = $row['recorded_time'];
                echo "       
                <tr>           
                    <td scope='row'>$count</td>           
                    <td><a href='/ojtproj1/mainpages/newprofile.php?user=$email'> $nameThing </a></td>            
                    <td>$email</td>           
                    <td>$pos</td>           
                    <td>$time</td>
                </tr>";
                $count++;
            }
        }
    
    }
    catch (mysqli_sql_exception) {
        echo "
            <tr>           
                <td colspan='5'>Error! Something went wrong with connection to our database!.</td>     
            </tr>";
    }
}
