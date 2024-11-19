<?php
include 'user_db.php';  // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user details from the database using the provided email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Use password_verify() to check the entered password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['email'] = $email; // Save user's email in session
            
            // Redirect to home page upon successful login
            header("Location: home.php");
            exit(); // Ensure no further code is executed
        }
        else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <label>Email</label><br>
            <input type="email" name="email" required><br>
            <label>Password</label><br>
            <input type="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>New user? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
