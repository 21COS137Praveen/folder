<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Attendance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            }
        body {
            background-image: url('../imgs/atten bg img.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #submitBtn {
            background-color: #4CAF50;
            color: white;
            border: none;
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
    <a href="home.php">Back</a>
   </nav>
    <h2>Members Attendance</h2>
    <form action="attenteacher.php" method="post" id="attendanceForm">
        <label for="birthday">Date:</label>
        <input type="date" id="date" name="date">
        <label for="teacherName">Members Name:</label>
        <select id="teacherName" name="teacherName" required>
        <option value="">Select</option>
        <?php
            include("db_conn.php");
            $r = "SELECT * FROM member_details";
            $res = mysqli_query($conn,$r);
            // print_r($res);exit;
            if ($res->num_rows > 0) {
                // output data of each row
                while($row = $res->fetch_assoc()) {
            echo '<option value="'.$row["id"].'">'.$row["mname"].'</option>';
            // $id = row["id"];
        

                //   echo "id: " . $row["id"]. " - Name: " . $row["mname"]. " " . $row["lesson_notes"]. "<br>";""
                }
              } else {
                echo "0 results";
              }
            ?>
            </select>
        <!-- <input type="text" id="teacherName" name="teacherName" required> -->

        <label for="attendanceStatus">Attendance Status:</label>
        <select id="attendanceStatus" name="attendanceStatus" required>
            <option value="">Select</option>
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
        </select>
        <input type="submit" value="Add Attendance" id="submit" name="submit" onclick="pageRedirect()">
        <!-- <button type="button" class="btn" onclick="addAttendance()">Add Attendance</button> -->
        <?php
        include("db_conn.php");
        if(isset($_POST['submit']))
            { 
                $date = $_POST['date'];
                $id = $_POST['teacherName'];
                $att_status = $_POST['attendanceStatus'];
                if(!empty($att_status))
                {
                    $sql = "INSERT INTO member_attendance (id,date,status) VALUE ('$id', '$date','$att_status')";
                    $result = mysqli_query($conn,$sql);
                if($result)
                {
                    echo "<div class = 'su'> <br><b>Attendance Updated</b></br> </div>";
                }
                else
                {
                    echo "<div class = 'fa'> <br><b>Attendance Not Updated</b></br> </div>";
                }
                }
                
            }
        ?>
    </form>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Members Name</th>
                <th>Attendance Status</th>
            </tr>
        </thead>
        <tbody id="attendanceTableBody">
         <?php
            include("db_conn.php");
            $r = "SELECT member_attendance.date, member_attendance.id, member_details.mname, member_details.id, member_attendance.status
            FROM member_attendance
            INNER JOIN member_details
            ON member_attendance.id=member_details.id";
            //  echo $r;exit();
            $res = mysqli_query($conn,$r);
            // print_r($res);exit;
            if ($res->num_rows > 0) {
                // output data of each row
                while($row = $res->fetch_assoc()) {
                    '<tbody>';
                   echo '<tr><td>'. $row["date"].'</td><td>'. $row["mname"].'</td><td>'.$row["status"].'</td><td></td> </tr>';
                   '</tbody>';
                //   echo "date: " . $row["id"]. " - Name: " . $row["mname"]. " " . $row["lesson_notes"]. "<br>";""
                }
              } else {
                echo "0 results";
              }
            ?>
            <td></td>
        </tbody>
    </table>

    <script>
        function pageRedirect() {
        window.location.replace("http://localhost/mms_praveen/code/attenteacher.php");
    }      
    // setTimeout("pageRedirect()", 1000);
        // function addAttendance() {
        //     var teacherName = document.getElementById("teacherName").value;
        //     var attendanceStatus = document.getElementById("attendanceStatus").value;

        //     var tableBody = document.getElementById("attendanceTableBody");
        //     var newRow = tableBody.insertRow(tableBody.rows.length);
        //     var cell1 = newRow.insertCell(0);
        //     var cell2 = newRow.insertCell(1);
        //     var cell3 = newRow.insertCell(2);

        //     cell1.innerHTML = teacherName;
        //     cell2.innerHTML = attendanceStatus;
        //     cell3.innerHTML = '<button onclick="editAttendance(this)">Edit</button>';
        //     document.getElementById("teacherName").value = "";
        //     document.getElementById("attendanceStatus").value = "Present";
        // }

        // function editAttendance(button) {
        //     var row = button.parentNode.parentNode;
        //     var teacherName = row.cells[0].innerHTML;
        //     var newAttendanceStatus = prompt("Edit Attendance Status for " + teacherName + ":", row.cells[1].innerHTML);

        //     if (newAttendanceStatus !== null) {
        //         row.cells[1].innerHTML = newAttendanceStatus;
        //     }
        // }
    </script>
</body>
</html>
