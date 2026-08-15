<?php
include("../../includes/db.php");
include("../../includes/auth_session.php");
include("../../includes/header.php");

?>


<!DOCTYPE html>
<html>
<head>
    <title>Schedule</title>
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
    <h2 class="fw-bold">Class Schedule</h2>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <!-- <th>Date</th> -->
            <th>Description</th>
            <th>Created At</th>
        </tr>
        <?php
        $sql = "SELECT * FROM schedules ORDER BY date ASC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>

               
                <td>{$row['created_at']}</td>
            </tr>";
        }
        ?>
    </table>
</div>
    </div>
</body>
</html>
