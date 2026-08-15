<?php
include("../../includes/db.php");
include("../../includes/auth_session.php");
include("../../includes/header.php");

$students = $conn->query("SELECT * FROM users WHERE role='student'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $student_id = $_POST['student_id'];
    $teacher = $_SESSION['username'];

    $conn->query("INSERT INTO tasks (teacher_username, student_id, title, description)
                  VALUES ('$teacher', '$student_id', '$title', '$desc')");
    echo "<div class='alert alert-success'>Task assigned successfully.</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Assign Task</title>
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
<div class="container mt-4">
    <h4>Assign Task</h4>
    <form method="POST">
        <input class="form-control mb-2" name="title" placeholder="Task Title" required>
        <textarea class="form-control mb-2" name="description" placeholder="Task Description" required></textarea>
        <select class="form-control mb-2" name="student_id" required>
            <option value="">Select Student</option>
            <?php while ($row = $students->fetch_assoc()): ?>
                <option value="<?= $row['id']; ?>"><?= $row['full_name']; ?></option>
            <?php endwhile; ?>
        </select>
        <button class="btn btn-primary">Assign</button>
        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</div>
</body>
</html>
