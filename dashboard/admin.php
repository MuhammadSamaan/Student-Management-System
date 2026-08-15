<?php
include("../includes/auth_session.php");
echo "<h2>Welcome Admin, " . $_SESSION['username'] . "</h2>";
echo "<p><a href='../logout.php'>Logout</a></p>";
?>
