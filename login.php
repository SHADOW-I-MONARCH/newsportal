<?php
session_start();

// Dummy validation (replace with database later)
$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];

if ($username === "admin" && $password === "1234" && $role === "admin") {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
    header("Location: homepage.php");
    exit();
} else {
    echo "<script>alert('Invalid credentials!'); window.location.href='login.html';</script>";
}
?>
