<?php
session_start();

if (!isset($_SESSION['username'])) {
    ?>
    <a href="login.php">Login</a>
    <?php
    die("For registered users only!");
}

echo "Wellcome user {$_SESSION['username']}!";
?>

<a href="logout.php">Logout</a>

