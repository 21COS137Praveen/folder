<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministry Management System</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
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
        .module {
            text-align: center;
            border: 1px solid #ddd;
            padding: 20px;
            width: 45%;
        }

        .module h2 {
            color: #555;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<nav>
    <a href="index.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="event.php">Events</a>
</nav>
<body>

    <h1>Attendance & Notes Management</h1>

    <div class="container">
        <div class="module">
            <h2>Ministry members attendance</h2>
            <p>Track and manage Member's & student's attendances.</p>
            <a href="attenteacher.php" class="button" target="_blank"> Go to members Attendance</a>
        </div>

        <div class="module">
            <h2>Student details and lesson Notes</h2>
            <p>Manage and view notes for students.</p>
            <a href="lesson details.php" class="button" target="_blank"> Go to Student Notes List</a>
        </div>
    </div>

</body>

</html>
</head>