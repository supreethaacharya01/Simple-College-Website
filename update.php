<?php include 'college_db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Admission</title>
</head>
<body>
    <h2>Update Stream or Course</h2>
    <form method="POST" action="">
        <label>Enter Student ID:</label><br>
        <input type="text" name="id" required><br>
        <label>New Stream:</label><br>
        <select name="stream">
            <option value="">Select Stream</option>
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option>
        </select><br>
        <label>New Course:</label><br>
        <input type="text" name="course"><br>
        <button type="submit" name="update">Update</button>
        <button onclick="window.location.href='index.php'">Back</button>
        
    </form>

    <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $stream = $_POST['stream'];
        $course = $_POST['course'];

        $sql = "UPDATE students SET stream='$stream', course='$course' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
