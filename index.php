<!DOCTYPE html>
<html>
<head>
    <title>College Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>College Management System</h2>
    <div class="menu">
        <form method="GET" action="">
            <button type="submit" name="action" value="admission">Admission</button>
            <button type="submit" name="action" value="update">Update</button>
            <button type="submit" name="action" value="delete">Delete</button>
            <button type="submit" name="action" value="view">View</button>
            <a button href=home.php>Home Page</a>
        </form>
    </div>

    <?php
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action == 'admission') {
            header("Location: admission.php");
        } elseif ($action == 'update') {
            header("Location: update.php");
        } elseif ($action == 'delete') {
            header("Location: delete.php");
        } elseif ($action == 'view') {
            header("Location: view.php");
        }
    }
    ?>
</body>
</html>
