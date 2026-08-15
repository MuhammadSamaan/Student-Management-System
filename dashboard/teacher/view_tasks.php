<?php
include("../../includes/db.php");
include("../../includes/auth_session.php");
include("../../includes/header.php");

$teacher = $_SESSION['username'];
$tasks = $conn->query("SELECT tasks.*, users.full_name FROM tasks
                       JOIN users ON tasks.student_id = users.id
                       WHERE teacher_username = '$teacher'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Tasks</title>
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
<div class="container-fluid mt-4">
    <h2 class="fw-bold">Assigned Tasks</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $tasks->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td><?= $row['assign_date']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Back</a>
</div>
</div>
</body>
</html>
