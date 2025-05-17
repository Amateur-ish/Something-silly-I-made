<?php
include 'database.php';

$input = $_POST['input']."%";
$sql = "SELECT * FROM `faculty_memb_details` WHERE fullname LIKE '$input'";

try {
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $profile = $row['profilepicture'];
            $name = $row['fullname'];
            $type = $row['status'];
            $faculty_position = $row['faculty_position'];
            $email = $row['email'];
            $faculty_position = $row['faculty_position'];

            echo '  
      <profile class="card bg-dark mx-3" style="width: 18rem; height: 25rem; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), 
      url(\'/ojtproj1/back-end/uploads/'. $profile .'\');
      background-size: cover; background-position: center;">
        <div style="height:13rem"></div> <!-- Used to put the section to the bottom. -->
        <section style="position: relative; bottom: 0px; margin-left: 13px;">
          <h3 class="text-light">'. $name .'</h3>
          <h4 class="text-light">'. $faculty_position .'</h4>
        </section>
        <button onclick="showModalPass(\''. $type . '\', \'' . $name . '\', \'' . $faculty_position . '\', \'' . $email . '\')" class="btn btn-success position-absolute" style="bottom: 20px; margin-left: 20px;">Go to Profile</button>
      </profile>
            ';
        }
    }
    else {
        echo "
        <h1 class='text-center'> No results have been shown. </h1>
        ";
    }

}
catch (mysqli_sql_exception) {
    echo "Error lol!!";
}
