<?php
include("../../includes/db.php");
include("../../includes/auth_session.php");
include("../../includes/header.php");


$username = $_SESSION['username'];
$get_id = $conn->query("SELECT id FROM users WHERE username='$username'");
$student = $get_id->fetch_assoc();
$student_id = $student['id'];

$records = $conn->query("SELECT * FROM attendance WHERE student_id='$student_id'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Attendance</title>
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
    <h2 class="fw-bold">Attendance Report</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Date</th>
        <th>Status</th>
    </tr>
    </thead>
        <tbody>
            <?php while($row = $records->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['date']; ?></td>
                    <td><?= $row['status']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Back</a>
</div>
</div>
</body>
</html>
