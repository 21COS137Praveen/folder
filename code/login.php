<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
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
            margin-top: 70px;
           }
           .card h1{
            text-align: center  ;
            color: #e8f5fa;
            margin-bottom: 120px;
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
        .button{
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
            margin-left: 30px;
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
    <?php
    session_start();
    ?>
    <header>
        <h1>Ministry Management System</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="gallery.php">Gallery</a>
        <a href="event.php">Events</a>
       <!-- <a href="login.php">Reports</a>-->
    </nav>
    <div class="card">
    <?php
            if(isset($_SESSION['show_message'])){
                echo '<h4 class="alert">'.$_SESSION['show_message'].'</h4>';
                unset($_SESSION['show_message']);
            }
            ?>
        <h1>LOGIN</h1>
        <form action="login.php" method="post">
        <input type="text" name="uname" id="uname" placeholder="Username" required><br><br>
        <input type="password" name="pwd" id="pwd" placeholder="Password" required><br><br>
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
                $pwd = $_POST['pwd'];
                $des = $_POST['desig'];

                if(!empty($uname) && !empty($uname))
                {
                    if($des == '0')
                    {
                        $user_check = "SELECT * FROM register WHERE username = '$uname' AND password = '$pwd' AND status = '0' ";
                        // echo $user_check;exit();
                        $result = mysqli_query($conn,$user_check);
                        if($result)
                        {
                            if(mysqli_num_rows($result) > 0)
                            {
                                echo "<div class = 'su'> <br><b>Admin Logged in Successfully</b></br> </div>";
                                $_SESSION['show_message'] = 'Logged In Succcessfully';
                                header('location:home.php');
                            }
                            else
                            {
                                echo "<div class = 'fa'> <br><b>Invalid Email and Password</b></br> </div>";
                            }
                        } 
                    }
                    elseif($des == '1')
                    {
                        $user_check = "SELECT * FROM register WHERE username = '$uname' AND password = '$pwd' AND status = '1' ";
                        // echo $user_check;exit();
                        $result = mysqli_query($conn,$user_check);
                        if($result)
                        {
                            if(mysqli_num_rows($result) > 0)
                            {
                                echo "<div class = 'su'> <br><b>User Logged in Successfully</b></br> </div>";
                                $_SESSION['show_message'] = 'Logged In Succcessfully';
                                header('location:userhome.php');
                            }
                            else
                            {
                                echo "<div class = 'fa'> <br><b>Invalid Email and Password</b></br> </div>";
                            }
                        } 
                    }
                    else
                    {
                        echo "<div class = 'fa'> <br><b>Invalid Email and Password</b></br> </div>";
                    }
                }
                else    
                {
                    echo "<div class = 'su'> <br><b>All Fields are required</b></br> </div>";
                }
                }
                
            ?>
            </form>
        <p>Don't Have an I'd <a href="register.php">Register Here!</a></p>
    </div>
    <footer>
        &copy; 2023 - 2024 Ministry Management System / Powered by 21cos137
    </footer>

</body>
</html>