<?php
    include 'config.php';

    session_start();
    $Id = $_SESSION['id'];

    if(isset($_POST['update']))
    {
        $name = $_POST['name'];
        $phone_no = $_POST['phone_no'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        $query = "UPDATE `employee` SET `Name`='$name',`City`='$city',`Age`='$age',`Phone_no`='$phone_no' WHERE Id = '$Id' ";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo 'Data Updated Successfully';
            header('location:admin.php');
        }
        else
        {
            echo 'Data Not Updated';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

</head>
<body>
      <div>
          <?php
           $query = "SELECT `Name`, `City`, `Age`, `Phone_no`, `Id` FROM `employee` WHERE Id = '$Id' ";
           $result = mysqli_query($conn, $query);
           $row = mysqli_fetch_array($result);
           $name = $row['Name'];
          ?>
      </div>
      <?php
  
      
        echo "<div class='update_profile'>
          <form method='POST' action = ''>
             <label >Name   :</label>
             <input type='text' name = 'name' value=".$row['Name'].">
             <br>
             
              <label> Age :</label>
              <input type='number' name = 'age' value=".$row['Age'].">
              <br>
              <label>City :</label>
              <input type='text' name = 'city' value=".$row['City'].">
              <br>
              <label>Phone_no   :</label>
             <input type='text' name = 'phone_no' value=".$row['Phone_no'].">
             <br>
             <button type='submit' name = 'update'>
             Update 
             </button>
          </form>
      </div>"
      ?>
     

    </div>


</body>
</html>