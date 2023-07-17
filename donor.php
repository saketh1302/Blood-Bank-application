<?php
  include 'config.php';

   if(isset($_POST['submit']))
   {
       $name = $_POST['name'];
       $age = $_POST['age'];
       $city = $_POST['city'];
       $email = $_POST['email'];
       $Radio = $_POST['Radio'];
       $bloodgroup = $_POST['bloodgroup'];
       $dob = $_POST['bdtae'];
       $quantity = $_POST['quantity'];

       $query = "INSERT INTO `blood_donors`(`Name`, `Age`, `Email`, `DOB`, `Gender`, `Blood_group`, `Address`, `Quantity`) VALUES ('$name','$age','$email','$dob','$Radio','$bloodgroup','$city','$quantity') ";

       $result = mysqli_query($conn, $query);

       
   }

?>


<!DOCTYPE html>
<html>

<head>
    <title>Donor Registration</title>
    <link rel="stylesheet" href="donor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
        <div class="wrapper-outer">
            <div class="wrapper-inner">
                <form action="" method="POST">
                    <div class="banner">
                        <h1>Donor Registration</h1>
                    </div>
                    
                    <!-- Full name -->
                    <div class="mb-3">
                      <label for="Email" class="form-label"> <b>Full Legal Name</b></label>
                      <input type="text" class="form-control small" id="exampleInputEmail1" name = 'name' aria-describedby="emailHelp">
                    </div>
                    <!-- City -->
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>City of residence</b></label>
                    <textarea class="form-control small" id="exampleFormControlTextarea1" name="city" rows="1"></textarea>
                    </div>
                
                    <!-- Email address -->
                    <div class="mb-3">
                      <label for="Email" class="form-label"> <b>Email address</b></label>
                      <input type="email" class="form-control small"  name = 'email' id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <!-- Gender -->
                    <label for="Gender" class="form-label"> <b>Gender</b></label>
                    <br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Radio" id="inlineRadio1" value="M">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Radio" id="inlineRadio2" value="F">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <br>
                    <br>
                    <!-- Age -->
                    <div class="form-floating gap">
                        <label for="floatingInputValue" style="padding-bottom: 0.5rem;">Age</label>
                    <input type="number" class="form-control small" id="floatingInputValue" name="age" placeholder="18" value="age">
                    </div>
                    <br>
                    <br>
                      <!-- Blood group -->
                        <label for="Blood-Group" class="form-label"> <b>Blood group</b></label>
                        <div class="form-floating align_center">
                          <select class="form-select small" id="floatingSelect" name="bloodgroup" aria-label="Floating label select example">
                              <option selected>Select</option>
                              <option value="A+">A +ve</option>
                              <option value="A-">A-ve</option>
                              <option value="B+">B +ve</option>
                              <option value="B-">B -ve</option>
                              <option value="AB+">AB +ve</option>
                              <option value="AB-">AB -ve</option>
                              <option value="O+">O +ve</option>
                              <option value="O-">O -ve</option>
                            </select>
                            <label for="floatingSelect">Blood Group</label>
                      </div>
                      <br>
    
                      <!-- Date of birth -->
                      <div class="form-label">
                          <label for="bdate" class="form-label"> <b>Date of Birth</b></label>
                          <br>
                          <input type="date" name="bdtae" required>
                      </div>
                        <br>
                        <br>
                        <!-- Quantity -->
                        <label for="quanity" style="padding-bottom: 0.5rem;"> <b>Quantity</b></label>
                        <br>
                        <div class="form-floating gap small">
                            <input type="number" class="form-control" id="quanity" name="quantity" placeholder="number of packets">
                       </div>
                
                        <!-- Submit -->
                        <div class="mb-3">
                            <input type="reset" value="Reset" name="reset" >
                            <input type="submit" value="Submit" name="submit" >
                        </div>
            </div>
                    </form>
        </div>

</body>

</html>