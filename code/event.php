<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministry Management System</title>
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

        .container {
            width: 60%;
            margin: 100px auto;
            background-color: #fff;
            padding: 100px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #000;;
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
           .container {
           display: flex ;
           justify-content: space-between;
           }
           .login_icon img{
            height: 30px;
            width: 30px;
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
      <!--  <a href="report.php">Reports</a>-->
        <a href="login.php">Login</a>
        <div class="login_icon">
            <img src="../imgs/userred.jpg" alt="">
        </div>
    </nav>
  <h1>Upcoming Events</h1>

  <div class="container">
    <img src="../imgs/bible.jpg" width="180" height="180">
    <h3>Date January 1, 2024</h3>
    <h3>Time 10:00 AM - 12:00 PM</h3>
    <h3>Location Venue Name, City</h3>
  </div>

  <div class="container">
  <img src="../imgs/vbs.jpg" width="180" height="180">
    <h3>Vacation bible school</h3>
    <h3>Date May 1 to 10 , 2024</h3>
    <h3>Time 8:00 AM - 1:00 PM</h3>
   </div>

</div>

</body>
</html>


</body>
</html>
