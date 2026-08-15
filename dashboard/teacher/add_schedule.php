<?php
include("../../includes/db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $creator = $_SESSION['user_role'];

    $sql = "INSERT INTO schedules (subject, date, time, created_by) VALUES ('$subject', '$date', '$time', '$creator')";
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
</head>
<body>
<div class="container mt-5">
    <h3>Add Schedule</h3>
    <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
    <form method="post">
        <div class="mb-3">
            <label>Subject</label>
            <input name="subject" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Time</label>
            <input type="text" name="time" class="form-control" required>
        </div>
        <button class="btn btn-success">Add</button>
    </form>
</div>
</body>
</html>
