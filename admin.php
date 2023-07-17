<?php
  include 'config.php';

  session_start();

  $Id = $_SESSION['id'];  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin</title>
    <style>
    </style>
</head>     
<body>
   
<ul class="nav nav-pills nav-fill" style="background-color: #ff3f62;height: 100px;">
        <li class="nav-item" >
          <a class="nav-link " aria-current="page" href="#" style="color: white;font-size: 20px;padding-top: 30px;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donors_list.php" target="_blank" style="color: white;font-size: 20px;text-align: center;padding-top: 30px;">DONORS-LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SA.php" target="_blank" style="color: white;font-size: 20px;text-align: center;padding-top: 30px;">AVAILABILITY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update_profile.php" target="_blank" style="color: white;font-size: 20px;font-size: 20px;text-align: center;padding-top: 30px;">UPDATE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php" style="color: white;font-size: 20px;text-align: center;padding-top: 30px;">LOGOUT</a>
          </li>
</ul>


<div style="height: 500px;margin-top: 150px;margin-left: 450px;"> 
          <div style="width: 50%;height: 40%;background-color: #ff3f62;text-align: center;font-size: 20px;color: white;">
            <?php
                $query = "SELECT `Name`, `City`, `Age`, `Password`, `Email`, `Phone_no`, `Id` FROM `employee` WHERE Id = '$Id' ";    
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

               echo "<div class = 'person'>
                      <p style='font-size:30px;'>".$row['Name']."</p>
                      <p>".$row['Email']."</p>
                      <p>".$row['Phone_no']."</p>
                      <p>".$row['City']."</p>
                    </div>"

            ?>
          </div>
      </div>



</body>
</html>