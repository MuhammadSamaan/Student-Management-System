<?php
include("../../includes/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id' AND role = 'teacher'";
    if ($conn->query($sql)) {
        header("Location: manage_teacher.php");
        exit();
    } else {
        echo "Failed to delete teacher.";
    }
}
?>

<a href="delete_teacher.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>


