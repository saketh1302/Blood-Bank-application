
<?php
  include 'config.php';

  if(isset($_POST['submit']))
  {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO `employee`(`Name`, `City`, `Age`, `Password`, `Email`, `Phone_no`) VALUES ('$name','$city','$age','$pass','$email','$phone_no')";
    if(mysqli_query($conn,$sql))
    {
        echo "Saved Successfully.";
    }
    else
    {
        echo "Error: Could Not able to Excute $sql.".mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
    background-color: #dee9ff;
}

.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
    </style>
</head>
<body>
    <div class="registration-form">
        
        <form method="post" action="" id="registration">
           <h1 style="text-align : center;">Registration Form</h1>
            <div class="form-group">
                <input type="text" class="form-control item" name = 'name' placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name = 'city' placeholder="City">
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" name = 'age' placeholder="Age">
            </div>
            <div class="form-group">
                <input type="number" class="form-control item"  name = 'phone_no' placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name = 'email' placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name = 'pass' placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name = 'Cpass' id="password" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <button type="submit" name = 'submit' class="btn btn-block create-account">Create Account</button>
            </div>
            <p>Already Have an Account? <a href="login.php">Login Here</a></p>
        </form>
    </div>
</body>
</html>