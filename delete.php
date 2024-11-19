<?php include 'college_db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Record</title>
</head>
<body>
    <h2>Delete Admission</h2>
    <form method="POST" action="">
        <label>Enter ID or Name to Delete:</label><br>
        <input type="text" name="identifier" required><br>
        <button type="submit" name="delete">Delete</button>
        <button onclick="window.location.href='index.php'">Back</button>
    </form>

    <?php
    if (isset($_POST['delete'])) {
        $identifier = $_POST['identifier'];
        $sql = "DELETE FROM students WHERE id='$identifier' OR name='$identifier'";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
