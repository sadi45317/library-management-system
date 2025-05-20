<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Management</title>
</head>
<body>
<h2>Manage Your Profile</h2>
<p>Edit your info here.</p>
<a href="dashboard.php">← Back to Dashboard</a>
</body>
</html>
