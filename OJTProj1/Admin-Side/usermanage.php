 <?php
// include 'C:\xampp\htdocs\ojtproj1\back-end\database.php';
// session_start();
// $sql = "SELECT * FROM `faculty_acc`";
// $result = mysqli_query($conn, $sql);
// $email = $_SESSION['email'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="/ojtproj1/css/main.css" />     
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css
" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">     
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<style>


</style>
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
    <div style="padding-top:200px"></div>

    <main class="container border pt-3">
        <a href="registration.php"><button class="btn btn-primary my-3">Register a Faculty Member</button></a>
        <table class="table table-bordered">
            <thead>
                <tr class="bg-dark text-light">  
                    <th scope="col">#</th>           
                    <th scope="col">ID</th>           
                    <th scope="col">Name</th>           
                    <th scope="col">Position</th>           
                    <th scope="col">Actions</th>
                </tr> 
            </thead>
            <tbody id="tableBody">
                <!-- 
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $facult_id = $row['facult_id'];
                    $name = $row['name'];
                    $position = $row['facult_position'];
                    $count++;
           
                    echo '                
                    <tr>
                      <td  scope="col">'. $count. '</th>           
                      <td scope="col">'. $facult_id .'</th>           
                      <td scope="col">'. $name .'</th>           
                      <td scope="col">'. $position .'</th>           
                      <td scope="col"><button class="btn btn-primary" onclick="openModal()">Manage User</button></th>
                    </tr>';
                  }
                 ?> -->
            </tbody>
        </table>
    </main>

    <!-- Modals -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">User Management</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
                <h3 id="username">Username: </h3>
                <h4 id="position">Position: </h4>
                <input id="user" style="display: none">
                <input type="text" id="pos"  style="display: none">
                <input type="text" id="email"  style="display: none">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" onclick="markAttendance()">Mark Attendance</button>
              <button type="button" class="btn btn-danger" onclick="sessionLogout()">Mark Logged Out</button>
              <button type="button" class="btn btn-warning" onclick="deleteUser()">Delete</button>
             
            </div>
          </div>
        </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Alert</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="outputphp">
              <p></p>
            </div>
            <div class="modal-footer">  
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <script>

    </script>
    <script src="/ojtproj1/admin-side/javascripts/ajaxuser.js">  </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>