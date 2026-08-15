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
    <title>Teacher Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
         .teacher-bg-img{
            background-image:url('../../assets/pexels-yankrukov-8199141.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;

        } 
    </style>
  
</head>

<body class="teacher-bg-img">
     <div class="container mt-4 text-center justify-content-center align-content-center" style="min-height:100vh;"> 
        <h2 class="text-center bg-dark text-light py-3">Welcome to Teacher Dashboard</h2>
    <!-- <h3 class="text-center fw-bold fs-1 border border-5 border-dark bg-dark text-light py-3">Welcome to Teacher Dashboard</h3>
    <div class="row mt-3 justify-content-center">
        

            <div class="col-md-4">
                <div class="card">
                    <span class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                         <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                         <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                    </svg>
                   <a href="view_students.php" class="btn btn-dark text-white w-100">View Students</a></div>
                    </span>
                </div>

                <div class="col-md-4">
                <div class="card" style="width:100%">
                    <span class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-highlighter" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M11.096.644a2 2 0 0 1 2.791.036l1.433 1.433a2 2 0 0 1 .035 2.791l-.413.435-8.07 8.995a.5.5 0 0 1-.372.166h-3a.5.5 0 0 1-.234-.058l-.412.412A.5.5 0 0 1 2.5 15h-2a.5.5 0 0 1-.354-.854l1.412-1.412A.5.5 0 0 1 1.5 12.5v-3a.5.5 0 0 1 .166-.372l8.995-8.07zm-.115 1.47L2.727 9.52l3.753 3.753 7.406-8.254zm3.585 2.17.064-.068a1 1 0 0 0-.017-1.396L13.18 1.387a1 1 0 0 0-1.396-.018l-.068.065zM5.293 13.5 2.5 10.707v1.586L3.707 13.5z"/>
                         </svg>

                    

                    <a href="mark_attendance.php" class="btn btn-dark text-white w-100">Mark Attendance</a></div>
                    </span>
                </div>
                 </div>
                  </div>

                  <div class="row my-3 justify-content-center">
                      <div class="col-md-4" style="width:33%;">
                        <div class="card">
                            <span class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
</svg>

                                <a href="assign_task.php" class="btn btn-dark text-white w-100">Assign Task</a></div>
                            </span>
                        </div>

                         <div class="col-md-4" style="width:33%;">
                        <div class="card">
                         <span class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
  <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
</svg>


                           <a href="view_tasks.php" class="btn btn-dark text-white w-100">View Tasks</a></div>
                        </span>
                        </div>
                  </div> -->
    </div> 

    <!-- <div class="row">

    </div> -->
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




 