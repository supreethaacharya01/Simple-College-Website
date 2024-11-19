<?php
include 'college_db.php';
$message = ''; // Variable to store success message

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $stream = $_POST['stream'];
    $course = $_POST['course'];
    $admission_date = $_POST['admission_date'];
    $address = $_POST['address'];
    
    // Insert data into the database
    $sql = "INSERT INTO students (name, stream, course, admission_date, address) 
            VALUES ('$name', '$stream', '$course', '$admission_date', '$address')";

    // Check if the query executed successfully
    if ($conn->query($sql) === TRUE) {
        $message = "Admission successful!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Admission</title>
    <style>
        label { display: block; margin: 8px 0; }
        input, select, textarea { width: 100%; padding: 8px; }
        button { margin-top: 10px; }
        .message { color: green; margin-top: 15px; }
        .error { color: red; margin-top: 15px; }
    </style>
</head>
<body>
    <h2>Student Admission Form</h2>
    <form method="POST" action="" id="admissionForm">
        <label>Student Name</label>
        <input type="text" name="name" required>
        
        <label>Stream</label>
        <select name="stream" id="stream" required>
            <option value="">Select Stream</option>
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option>
        </select>
        
        <label for="course">Course:</label>
        <input list="courses" name="course" id="course" required>
        <datalist id="courses">
            <option value="PCMB">
            <option value="PCMC">
            <option value="PCMS">
            <option value="CEBA">
            <option value="CSBA">
            <option value="SEBA">
            <option value="HEPS">
            <option value="HESP">
            <option value="JESP">
        </datalist>
        
        <label>Admission Date</label>
        <input type="date" name="admission_date" required>
        
        <label for="address">Address:</label>
        <textarea name="address" id="address" rows="4" required></textarea>
        
        <button type="submit" name="submit">Submit</button>
        <a href="index.php">Go back to Menu</a>
    </form>

    <!-- Display success or error message after form submission -->
    <?php if ($message): ?>
        <div id="messageBox" class="<?php echo ($message === "Admission successful!") ? 'message' : 'error'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <script>
        // Automatically hide the message after 5 seconds
        window.onload = function() {
            const messageBox = document.getElementById('messageBox');
            if (messageBox) {
                setTimeout(function() {
                    messageBox.style.display = 'none';
                }, 5000); // Hide after 5 seconds
            }

            // Clear form inputs after successful submission
            <?php if ($message === "Admission successful!") { ?>
                document.getElementById('admissionForm').reset();
            <?php } ?>
        };
    </script>
</body>
</html>
