<?php
include("../../includes/db.php");
// include("../../includes/header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, email, username, password, role)
            VALUES ('$name', '$email', '$username', '$password', 'teacher')";
    
    if ($conn->query($sql)) {
        header("Location: manage_teacher.php");
        exit();
    } else {
        echo "Error adding teacher.";
    }
}
?>
<!-- 
<form method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Add Teacher</button>
</form> -->


<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
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
    </style>
    </head>
<body class="bg-white">
    <?php include("../../includes/sidebar.php"); ?>

<div class="main-content">
    
<div class="container-fluid m-5">
    <h2 class="fw-bold">Add Teacher</h2>
    <form method="POST">
        <input class="form-control w-75 mb-2" name="name" placeholder="Full Name" required>
        <input class="form-control w-75 mb-2" name="email" type="email" placeholder="Email" required>
        <input class="form-control w-75 mb-2" name="username" placeholder="Username" required>
        <input class="form-control w-75 mb-2" name="password" type="password" placeholder="Password" required>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="manage_students.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</div>

</body>
</html>
