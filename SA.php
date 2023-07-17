<?php
  include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Availability</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: rgb(132, 185, 232);
      }
    </style>
</head>
<body>
    <h1 style="text-align: center;">AVAILABILITY</h1>

    <div class="availability">

        <br> <br>
    
        <div style="display: flex;">
        <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
          <a href="" style="text-decoration: none;color: white;"> 
            <h2 style="padding: 15px;">A+</h2></a>
            <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'A+'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
           
        </div>
        <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
          <a href="" style="text-decoration: none;color: white; font-weight: 700;"><h2 style="padding: 15px;">A-</h2></a>
          <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'A-'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
       <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
         <a href="" style="text-decoration: none;color: white;"> <h2 style="padding: 15px;">B+</h2></a>
         <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'B+'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
       <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
         <a href="" style="text-decoration: none;color: white;"><h2 style="padding: 15px;">B-</h2></a>
         <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'B-'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
       <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62; margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
         <a href="" style="text-decoration: none;color: white;"><h2 style="padding: 15px;">AB+</h2></a>
         <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'AB+'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
       <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
         <a href="" style="text-decoration: none;color: white;"><h2 style="padding: 15px;">AB-</h2></a>
         <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'AB-'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
       <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
         <a href="" style="text-decoration: none;color: white;"><h2 style="padding: 15px;">O+</h2></a>
         <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'O+'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
       <div class="group" style="width: 200px;height: 200px;background-color: #ff3f62;margin-left: 20px;padding: 20px;border-radius: 20px;text-align: center;">
         <a href="" style="text-decoration: none;color: white;"> <h2 style="padding: 15px;">O-</h2></a>
         <?php
                $query = "SELECT SUM(Quantity) from blood_donors where Blood_group = 'O-'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo "<p><h2 style='font-size: 30px;color: white;'>".$row['SUM(Quantity)']."</h2></p>"
            ?>
       </div>
   
     </div>

    </DIv>
</body>
</html>
</body>
</html>