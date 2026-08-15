<!-- Student dashboard -->
 <?php
include ("../../includes/auth_session.php");   // session check
include ("../../includes/header.php");                  // updated header
?>

<div class="container-fluid">
  <div class="row">
    <?php require_once ("../../includes/sidebar.php"); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bg-img{
      background-image:url('../../assets/pexels-cottonbro-4778611.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center;

      }
    </style>
</head>

<body class="bg-img">
<div class="container mt-4 align-content-center" style="min-height:100vh">
    <h3 class="fs-1 fw-bold py-3 bg-dark text-light text-center">Welcome to Students Dashboard</h3>
    <!-- <div class="row mt-3 justify-content-center align-content-center" style="min-height:70vh">
        <div class="col-md-4">

        <div class="card text-center" style="width: 100%;">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg>
<a href="view_attendance.php" class="btn btn-dark w-100">My Attendance</a></div>
        </span>
        </div>

        <div class="col-md-3">
        <div class="card text-center" style="width: 130%;">
            <span>

            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"/>
  <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"/>
  <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"/>
</svg>
                <a href="view_tasks.php" class="btn btn-dark w-100">My Tasks</a></div>
            </span>
        </div>     -->
        <!-- <div class="col-md-3"><a href="view_notices.php" class="btn btn-warning w-100">Notices</a></div>
        <div class="col-md-3"><a href="view_schedule.php" class="btn btn-success w-100">Class Schedule</a></div> -->
    <!-- </div> -->
    <!-- <div class="text-center mt-3">
        <a href="../../logout.php" class="btn btn-danger">Logout</a>
    </div> -->
</div>
</body>
</html>



    </main>
  </div>
</div>

<?php include ("../../includes/footer.php"); ?>


