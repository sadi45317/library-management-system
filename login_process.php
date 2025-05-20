<?php
session_start();

 $users = [
    ['email' => 'user@example.com', 'password' => '1234'],
    ['email' => 'admin@example.com', 'password' => 'admin']
];

$email = $_POST['email'];
$password = $_POST['password'];

$found = false;
foreach ($users as $user) {
    if ($user['email'] == $email && $user['password'] == $password) {
        $_SESSION['user_email'] = $email;
        $found = true;
        break;
    }
}

if ($found) {
    header("Location: dashboard.php");
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>
