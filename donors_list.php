<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Donors</title>
  
</head>
<body>


<ul class="nav nav-pills nav-fill" style="background-color: #ff3f62;height: 100px;">
        <li class="nav-item" >
          <a class="nav-link " aria-current="page" href="http://localhost/bd/home/admin.php" style="color: white;font-size: 20px;padding-top: 30px;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;font-size: 20px;text-align: center;padding-top: 30px;">DONORS-LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SA.php" style="color: white;font-size: 20px;text-align: center;padding-top: 30px;">AVAILABILITY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/bd/home/update_profile.php" style="color: white;font-size: 20px;font-size: 20px;text-align: center;padding-top: 30px;">UPDATE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/bd/home/login.php" style="color: white;font-size: 20px;text-align: center;padding-top: 30px;">LOGOUT</a>
          </li>
</ul>

<div class = "Content" style="padding-top: 40px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">City</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT `Name`, `Age`, `Gender`, `Blood_group`, `Address`, `Quantity` FROM `blood_donors` ";
      $result = mysqli_query($conn,$sql);
      if($result->num_rows > 0)
      {
        $i = 0;
        while($rows = $result->fetch_assoc())
        {
          echo"<tr><td>".++$i."</td>
               <td>".$rows['Name']."</td>
               <td>".$rows['Age']."</td>
               <td>".$rows['Gender']."</td>
               <td>".$rows['Address']."</td>
               <td>".$rows['Blood_group']."</td>
               <td>".$rows['Quantity']."</td></tr>";

        }
      }
      mysqli_close($conn);
      ?>
  </tbody>
</table>
</div>
</body>
</html>