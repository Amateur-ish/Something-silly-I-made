<?php
include 'C:\xampp\htdocs\ojtproj1\back-end\database.php';
// session_start();
// if(!array_key_exists('email', $_SESSION) && $_SESSION['email'] == null) {
//   header('location: /ojtproj1/mainpages/login.php');
// }
// $email = $_SESSION['email'];
// $sql2 = "SELECT * FROM `faculty_acc` WHERE email = '$email'";
// $result2 = mysqli_query($conn, $sql2);
// $row = mysqli_fetch_assoc($result2);
// $name = $row['name'];


// 
?>

<!DOCTYPE html> 
<html> 

  <head>     
    <title>Faculty Attendance Monitoring Sheet</title>
    <link rel="stylesheet" href="/ojtproj1/css/main.css" />     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css
" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css
" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>  
</head>   
  
<body>
    
<header class="container-fluid position-fixed pb-4" style="background-color: yellow;">
        <ul class="p-3 m-2 text-primary font-weight-bold">
                  <ul>
          <a href="usermanage.php">
            <li>Manage</li>
          </a>
          <a href="main.php">
            <li>Current Attendance</li>
          </a>
          <a href="view.php">
            <li>View Faculty Members</li>
          </a>
        </ul>
        </ul>
    </header>

    <!-- Displays and Introduction -->
    <div class="container py-5"></div>
    <img src="https://lh3.googleusercontent.com/DJrSgu8nszGVCX2GojGIxkmP64PFLNr3cxqClm-7b5F4XUMA9c6753paIiHRX7HHzqfN0p-tn55qSkRz=s1600"
     alt="STI Logo" height="100" class="border rounded-pill m-2 ml-3" />
    <img src="data:image/jpeg;base64,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" alt="STI College Marikina Logo" height="100" class="float-right border rounded-pill m-2 mr-3" />
    
    <p class="text-center ml-3 my-3 font-weight-bold" style="font-size: 30px;">STI COLLEGE MARIKINA FACULTY ATTENDANCE MONITORING SHEET</p>
    
    <!-- Daily Attendance Records of STI Faculty Members -->
    <main class="py-5 border container mb-4" style="border-radius: 20px;">
 
<section class="d-flex justify-content-start my-3">
      <div class='bg-danger rounded rounded-pill py-3 px-1' style="width: 120px"> </div> = Not Attended
    </section>
    <section class="d-flex justify-content-start my-3">
      <div class='bg-success rounded rounded-pill py-3 px-1' style="width: 120px"> </div> = Attended
    </section>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Faculty ID</th>
            <th scope="col">Position</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <h1></h1>
        <tbody>
                    <?php
      $result =  mysqli_query($conn, "SELECT * FROM `faculty_memb_details`");
      $count = 0;
      while($row = mysqli_fetch_assoc($result)) {
        $name = $row['fullname'];
        $status = "";
        
        if ($row['status'] === "login") {
          $status = "<div class='bg-success rounded rounded-pill py-3 px-3'> </div>";
        }
        else {
          $status = "<div class='bg-danger rounded rounded-pill py-3 px-3'> </div>";
        }
      
       
        $facult_id = $row['facult_id'];
        $email = $row['email'];
        $position = $row['faculty_position'];
        $count++;
          echo "
          <tr>
            <td>$name</td>
            <td>$facult_id</td>
            <td>$position</td>
            <td>$email</td>
            <td>$status</td>
          </tr>
          ";
          
      }
      ?>
        </tbody>
      </table>

    </main>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js
" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>       
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js
" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>       
<script src="https://code.jquery.com/jquery-3.7.1.min.js
" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>   
</body> 
  
</html>