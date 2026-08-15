<?php
include("../../includes/db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['message'];
    $creator = $_SESSION['user_role']; 

    $sql = "INSERT INTO notices (title, message, created_by) VALUES ('$title', '$content', '$creator')";
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
</head>
<body>
    <div class="container mt-5">
        <h3>Post Notice</h3>
        <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label>Title</label>
                <input name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="message" class="form-control" required></textarea>
            </div>
            <button class="btn btn-success">Post</button>
        </form>
    </div>
</body>
</html>
