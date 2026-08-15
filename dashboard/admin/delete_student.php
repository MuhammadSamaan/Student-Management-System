<?php
include("../../includes/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id' AND role = 'student'";
    if ($conn->query($sql)) {
        header("Location: manage_students.php");
        exit();
    } else {
        echo "Failed to delete student.";
    }
}


?>
<a href="delete_student.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
