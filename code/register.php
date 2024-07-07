<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 30px;
            padding: 0;
            background-color: #e8f5fa;
        }

        header {
            background-color: white;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 30px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #555;
        }
        h1, h2 {
            color: #333;
        }

        section {
            margin-bottom: 30px;
        }

          footer {

            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
           .login_icon img{
            height: 30px;
            width: 30px;
           }
           .card {
            border-radius: 10px;
            background-image: linear-gradient(#ff75d6, #ef9024);
            width: 300px;
            height: 450px;
            border: 1px solid black;
            margin: auto;
            margin-top: 60px;
           }
           .card h1{
            text-align: center  ;
            color: #e8f5fa;
            margin-bottom: 40px;
           }
           .card input{
            background-color: transparent;
            border-bottom-color: red;
            margin-left: 70px;
            border-radius: 7px;
            /* margin: 70px 20px 10px 20px; */
        }
        ::placeholder{
            color: rgb(252, 249, 249);
            font-size: medium;
        }
        .card img{
            position: absolute;
            margin-right: 90px;
            height: 15px;
            width: 15px;
        }
        input[type=submit]{
            text-decoration: none;
            background-color: blue;
            color: white;
            padding: 5px 5px;
            border-radius: 10px;
            margin-left: 120px;
        }
        p a{
            text-decoration: none;
        }
        p{
            margin-left: 40px;
            color:white;
        }
        .su{
            margin-left: 90px;
            color: Green;
        }
        .fa{
            margin-left: 90px;
            color: red;
        }
    </style>
</head>
<body>

    <header>
        <h1>Ministry Management System</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="gallery.php">Gallery</a>
        <a href="event.php">Events</a>
        <a href="login.php">Reports</a>
    </nav>
    <div class="card">
        <h1>REGISTER</h1>
        <form action="register.php" method="post">
        <input type="text" name="uname" id="uname" placeholder="Username" required><br><br>
        <input type="number" name="phone" maxlength="4" id="phone" placeholder="Phone" required><br><br> 
        <input type="radio" id="male"name="gender" value="1" checked>
        <label for="Netflix">Male</label>
        <input type="radio" id="female"name="gender" value="2">
        <label for="Audi">Female</label><br><br>
        <input type="password"  name="pwd" id="pwd" maxlength="8" placeholder="Password" required><br><br>
        <input type="password"  name="cpwd" id="cpwd" maxlength="8" placeholder="Confirm Password" required><br><br>
        <input type="radio" id="admin"name="desig" value="0">
        <label for="Netflix">Admin</label>
        <input type="radio" id="user"name="desig" value="1" checked>
        <label for="Audi">User</label><br><br>
        <input type="submit" value="Submit" name="submit">
        <?php
        include("db_conn.php");
        if(isset($_POST['submit']))
        {
            $uname = $_POST['uname'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $pwd = $_POST['pwd'];
            $cpwd = $_POST['cpwd'];
            $status = $_POST['desig'];
            if($pwd == $cpwd)
            {
                $sql = "INSERT INTO REGISTER (username,phone,gender,password,cpassword,status) VALUE ('$uname', '$phone', '$gender', '$pwd', '$cpwd','$status')";
            }
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                echo "<div class = 'su'> <br><b>User Registered</b></br></div>";
                // header('location:login.php');
            }
            else
            {
                echo "<div class = 'fa'> <br><b>Something Wrong..!</b></br> </div>";
            }
        }
        ?>
  </form>
        <p>Do you Have an I'd <a href="login.php">Login Here!</a></p>
    </div>
    <footer>
        &copy; 2023 - 2024 Ministry Management System / Powered by 21cos137
    </footer>
</body>
<?php
?>
</html>