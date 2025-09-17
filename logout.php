<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html");
exit();
// Vercel-compatible session handling
ini_set('session.save_path', '/tmp');
?>

