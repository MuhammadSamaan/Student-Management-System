<?php
include("../../includes/auth_session.php");
include("../../includes/db.php");
include("../../includes/header.php");



if (isset($_POST['delete_teacher'])) {
    $teacher_id = $_POST['teacher_id'];
    $conn->query("DELETE FROM users WHERE id = '$teacher_id' AND role='teacher'");
}

$result = $conn->query("SELECT * FROM users WHERE role='teacher'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Teachers</title>
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
    <div class="container-fluid">

    <h2 class="mb-4 fw-bold">Manage Teachers</h2>
    <a href="add_teacher.php" class="btn btn-success mb-3">Add New Teacher</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="edit_teacher.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <form method="post" action="" style="display:inline;">
                            <input type="hidden" name="teacher_id" value="<?= $row['id'] ?>">
                            <button type="submit" name="delete_teacher" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <a href="dashboard.php" class="btn btn-secondary">Back</a>
</div>
</div>
</body>
</html>
