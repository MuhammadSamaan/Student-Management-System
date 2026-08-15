<?php
include("../../includes/db.php");
session_start();
include("../../includes/header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $message = $_POST['message'];  

    $sql = "INSERT INTO notices (title, message) VALUES ('$title', '$message')";
    if ($conn->query($sql)) {
        $success = "Notice posted successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post Notice</title>
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
<body>
    <?php include("../../includes/sidebar.php"); ?>

<div class="main-content">
    <div class="container-fluid mt-5">
        <h2 class="fw-bold">Post Notice</h2>
        <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label>Title</label>
                <input name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="message" class="form-control" required></textarea> <!--  fixed name -->
            </div>
            <button class="btn btn-success">Post</button>
        </form>
    </div>
    </div>
</body>
</html>
