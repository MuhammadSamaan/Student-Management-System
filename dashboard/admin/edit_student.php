<?php
include("../../includes/db.php");
// include("../../includes/header.php"); 

$id = $_GET['id'];
$student = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $conn->query("UPDATE users SET full_name='$full_name', email='$email' WHERE id=$id");
    header("Location: manage_students.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
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
<body class="bg-white">
<?php include("../../includes/sidebar.php"); ?>

<div class="main-content">
    <div class="container-fluid mt-4">
        <h3>Edit Student</h3>
        <form method="POST">
            <input class="form-control mb-2" name="full_name" value="<?= $student['full_name']; ?>" required>
            <input class="form-control mb-2" name="email" type="email" value="<?= $student['email']; ?>" required>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="manage_students.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

</body>
</html>
