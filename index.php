<?php
session_start();
include("includes/db.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // md5 encryption

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Redirect by role
        if ($row['role'] == 'admin') {
            header("Location: dashboard/admin/dashboard.php");
        } elseif ($row['role'] == 'teacher') {
            header("Location: dashboard/teacher/dashboard.php");
        } else {
            header("Location: dashboard/student/dashboard.php");
        }
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .bg-img{
            background-image:url('./assets/pexels-yaroslav-shuraev-6279794.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center;
        }
    </style>
</head>
<body class="bg-img">
<div class="container mt-5">
    <h2 class="text-center mb-4 bg-dark text-light fs-1 fw-bold py-3">Student Management System</h2>
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white p-4 rounded shadow">
            <form method="POST">
                <div class="mb-4">
                    <label class="fw-bold">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label class="fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <?php if (isset($error)) echo "<p class='text-danger'>$error</p>"; ?>
                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
