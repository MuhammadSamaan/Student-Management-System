<?php
include("../../includes/db.php");
// include("../../includes/header.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO users (username, password, role, full_name, email)
                  VALUES ('$username', '$password', 'student', '$full_name', '$email')");
    header("Location: manage_students.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        #sidebarMenu {
            width: 250px;
            height: 100vh;
            position: fixed;
            /* top: 0; */
            left: 0;
            background-color: #343a40;
        }
        .main-content {
            margin-left: 250px;
            padding: 40px 20px 20px 20px;
        }
/* 
        .form-margin{
            margin-right: 50px;
        } */
    </style>
    </head>

    <body class="bg-white">
    <?php include("../../includes/sidebar.php"); ?>

<div class="main-content">
    
<div class="container-fluid m-5">
    <h2 class="fw-bold">Add Student</h2>
    <form method="POST">
        <input class="form-control w-75 mb-2" name="full_name" placeholder="Full Name" required>
        <input class="form-control w-75 mb-2" name="username" placeholder="Username" required>
        <input class="form-control w-75 mb-2" name="email" type="email" placeholder="Email" required>
        <input class="form-control w-75 mb-2" name="password" type="password" placeholder="Password" required>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="manage_students.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</div>
</body>
</html>
