<?php include 'college_db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Admissions</title>
</head>
<body>
    <h2>All Admissions</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Stream</th>
            <th>Course</th>
            <th>Admission Date</th>
            <th>Address</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['stream']}</td>
                    <td>{$row['course']}</td>
                    <td>{$row['admission_date']}</td>
                    <td>{$row['address']}</td>
                  </tr>";
        }
        ?>
    </table>
    <button onclick="window.location.href='index.php'">Back</button>
</body>
</html>
