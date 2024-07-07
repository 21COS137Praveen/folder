<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lesson Notes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 50;
            padding: 20;
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
            bottom: 20;
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
        form {
            margin: 20px;
          
        }
        table {
         margin: 20px;
         border-collapse: collapse;
         height: 0px;
         width: 100%;
        }
        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
    <nav>
       <a href="index.php">Home</a>
        <a href="gallery.php">Gallery</a>
        <a href="event.php">Events</a>
        <a href="home.php">Back</a>;
      <!--  <a href="login.php">Login</a>
        <div class="login_icon">
            <img src="../imgs/userred.jpg" alt="">-->
        </div>
    </nav>
    <form action="lesson details.php" method="post" id="studentForm">
        <label for="studentName">Member Name:</label>
        <input type="textbox" id="studentName" name="studentName" required>
        <label for="lessonNotes">Lesson Notes:</label>
        <input type="textbox" id="studentName" name="lessonNotes" required>
      <!--   <textarea id="lessonNotes" name="lessonNotes" rows="4" required></textarea>
       <label for="fileUpload">File Upload:</label>
        <input type="file" id="fileUpload" name="fileUpload">--> 
       <input type="submit" value="Add Details"id="submit" name="submit">
    <!-- <button type="button" onclick="addStudent()">Add details</button> -->
        <?php
        include("db_conn.php");
        if(isset($_POST['submit']))
            {
                $studentName = $_POST['studentName'];
                $lessonNotes = $_POST['lessonNotes'];
                // $fileUpload = $_POST['fileUpload'];
                // print_r($studentName);exit;
                if(!empty($studentName) && !empty($lessonNotes))
                {
                    $sql = "INSERT INTO member_details (mname,lesson_notes) VALUE ('$studentName', '$lessonNotes')";
                    $result = mysqli_query($conn,$sql);
                        if($result)
                        {
                            echo "<div class = 'su'> <br><b>User Registered</b></br> </div>";
                        }
                        else
                        {
                            echo "<div class = 'fa'> <br><b>Something Wrong..!</b></br> </div>";
                   
                        }
                }
                else
                {
                    echo "<div class = 'su'> <br><b>All Fields are required</b></br> </div>";
                }
                
            }
        ?>
    </form>

    <table id="studentTable">
        <thead>
            <tr>
                <th>Member Name</th>
                <th>Lesson Notes</th>
            <!--<th>File Upload</th>
                <th>Edit details</th>
                <th>Download</th>-->
            </tr>
        </thead>
        
            <?php
            include("db_conn.php");
            $r = "SELECT * FROM member_details";
            $res = mysqli_query($conn,$r);
            // print_r($res);exit;
            if ($res->num_rows > 0) {
                // output data of each row
                while($row = $res->fetch_assoc()) {
                    '<tbody>';
                   echo '<tr><td>'. $row["mname"].'</td><td>'. $row["lesson_notes"].'</td>
                   </tr>';
                   '</tbody>';
                //   echo "id: " . $row["id"]. " - Name: " . $row["mname"]. " " . $row["lesson_notes"]. "<br>";""
                }
              } else {
                echo "0 results";
              }
            ?>
        
    </table>

    <script>
           arun code
        function addStudent() {
            var studentName = document.getElementById("studentName").value;
            var lessonNotes = document.getElementById("lessonNotes").value;

            if (studentName && lessonNotes && fileUpload) {
                var table = document.getElementById("studentTable").getElementsByTagName('tbody')[0];
                var newRow = table.insertRow(table.rows.length);
                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);
                var cell3 = newRow.insertCell(2);
                var cell4 = newRow.insertCell(3);

                cell1.innerHTML = studentName;
                cell2.innerHTML = lessonNotes;
                cell3.innerHTML = fileUpload.name; 
                cell4.innerHTML = '<button onclick="editStudent(this)">Edit</button>';

                newRow.file = fileUpload;

                
                document.getElementById("studentName").value = "";
                document.getElementById("lessonNotes").value = ""; 
            } else {
                alert("Please fill in all fields.");
            }
        }

        function editStudent(button) {
            var row = button.parentNode.parentNode;
            var studentName = row.cells[0].innerHTML;
            var lessonNotes = row.cells[1].innerHTML;

            var newStudentName = prompt("Edit Student Name:", studentName);
            var newLessonNotes = prompt("Edit Lesson Notes:", lessonNotes);
            var newLessonNotes = prompt("Edit fileUpload:", fileUpload.name);

            if (newStudentName !== null && newLessonNotes !== null) {
                row.cells[0].innerHTML = newStudentName;
                row.cells[1].innerHTML = newLessonNotes;
            }
        }
    </script>
</body>
</html>
