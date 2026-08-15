<?php
include("../../includes/db.php");
session_start();
include("../../includes/header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $created_at = $_POST['created_at']; 

    $sql = "INSERT INTO schedules (title, description, created_at) VALUES ('$title', '$description', '$created_at')";
    if ($conn->query($sql)) {
        $success = "Schedule added!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Add Schedule</title>
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
    </style></head>
<body>
    <?php include("../../includes/sidebar.php"); ?>

<div class="main-content">
<div class="container-fluid mt-5">
    <h2 class="fw-bold">Add Schedule</h2>

    <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
    <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="post">
        <div class="mb-3">
            <label>Title</label>
            <input name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Date & Time</label>
            <input type="datetime-local" name="created_at" class="form-control" required>
        </div>
        <button class="btn btn-success">Add</button>
    </form>
</div>
</body>
</html>
