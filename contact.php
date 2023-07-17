<?php
  include 'config.php';

  if(isset($_POST['contact']))
  {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`Email`, `Name`, `Message`) VALUES ('$email','$name','$message')";
    if(mysqli_query($conn,$sql))
    {
        echo '<script>alert("We Will Contact U Soon")</script>';
    }
    else
    {
        echo "Error: Could Not able to Send message  $sql.".mysqli_error($conn);
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!--<link rel='stylesheet' href="./contact.css">-->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }

        .container {
            height: 100%;
            width: 100%;
            margin: 0px;

        }

        .navbar {
            margin: 0px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
        }

        .heading {
            width: 90%;
            display: flex;
            justify-content: center;
            font-size: 33px;
            background-color: #ff3f62;
            border-radius: 20px;
            color: white;
        }

        .heading:hover {
            transition: 2ms;
            color: black;
            background-color: #c2bbf0;
        }


        .content {
            display: flex;
            margin-top: 150px;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .Left {
            margin-right: 50px;
            padding-top: 100px;
            font-size: 30px;
            font-weight: 600;
            margin-left: 100px;
            width: 50%;
            text-align: center;
            border-radius: 30px;
            color: #ff3f62;

        }

        .Left:hover {
            background-color: #ff3f62;
            transition: 0.5s;
            color: white;
        }

        .right {
            margin-right: 50px;
            width: 50%;

        }

        .form {
            border: 2px solid #f2f0ff;
            padding: 50px;
            box-shadow: none;
            border-radius: 20px;
            user-select: none;
        }

        .form:hover {
            background-color: blanchedalmond;
            transition: 0.5s;
        }

        .filed {
            padding: 20px;
        }

        input {
            border: none;
            padding: 10px;
            background-color: #f7f6ff;
            border-radius: 6px;
            border: 1px solid blue;
            width: 100%;
        }

        .message {
            text-align: center;
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 20px;
        }

        .btn {
            padding-top: 50px;
            text-align: center;
        }

        button {
            padding: 10px;
            border: none;
            background-color: #ff3f62;
            border-color: #ff3f62;
            border-radius: 10px;
            color: whitesmoke;
            box-shadow: 1px 1px 7px #ff3f62;
            cursor: pointer;

        }

        a {
            padding: 10px;
            text-decoration: none;
            font-size: 20px;
            margin-right: 20px;
            color: white;
            font-weight: bold;
        }
        a:hover {
            transition: 2ms;
            color: black;
        }

        .nav-link {
            background-color: #ff3f62;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            color: white;
            user-select: none;
        }

        .nav-link:hover {
            background-color: #c2bbf0;
            transition: 2ms;
        }

        @media screen and (max-width : 620px) {
            .content {
                flex-direction: column;
            }

            .right {
                width: 100%;
            }

            .Left {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div class="heading">
                <h1>BLOOD BANK</h1>
            </div>
            <div class="nav-link">
                <a href="http://localhost:3000/">Home</a>
            </div>
        </nav>
        <div class="content">
            <div class="Left">
                <h1> Let's Save.</h1>
                <br>
                <h2>Donate Blood</h2>
                <br>
                <h2>Save People</h2>
            </div>
            <div class="right">
                <div class="form">
                    <p class="message"><b>Send us a message🚀</b></p>
                    <form method="post" action="">
                        <div class="filed">
                            <input type="text" id="name" placeholder="Full Name" required class="input" autofocus='true'
                                name="name">
                            <br>
                        </div>
                        <div class="filed">
                            <input type="email" id="email" placeholder="Email Address" required class="input"
                                name="email">
                            <br>
                        </div>
                        <div class="filed">
                            <input type="text" id="name" placeholder="Message " required class="input" name="message">
                            <br>
                        </div>
                        <div class="btn">
                            <button type="submit" id="btn" name="contact">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>