<!-- Admin dashboard -->
 <?php
include ("../../includes/auth_session.php");   // session check
include ("../../includes/header.php");                  // updated header
?>

<div class="container-fluid">
  <div class="row">
    <?php require_once ("../../includes/sidebar.php"); ?>
    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

       <?php
include("../../includes/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head >
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-img-1{
            background-image:url('../../assets/pexels-karolina-grabowska-7876786.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center;

        }
    </style>
</head>
<body class="bg-img-1">
<div class="container mt-4 justify-content-center align-content-center"style="min-height:100vh">
    <h2 class="text-center bg-dark text-light py-3">Welcome to Admin Dashboard</h2>
    <!-- <div class="row mt-4 justify-content-center align-content-center" style="min-height:70vh;">
        <div class="col-md-4">
            <div class="card text-center">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
            <a href="manage_students.php" class="btn btn-dark w-100">Manage Students</a>
            </span>
            </div>
        </div>

         <div class="col-md-4">
            <div class="card text-center">
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
</svg>
            <a href="manage_teacher.php" class="btn btn-dark w-100">Manage Teacher</a>
            </span>
            </div>
        </div> -->
        <!-- <div class="col-md-6">
            <a href="manage_teachers.php" class="btn btn-dark w-100">Manage Teachers</a>
        </div> -->
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

 
 
 

