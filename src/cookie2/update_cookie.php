<?php
if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    setcookie('username', $username, time() + 500, '/');

    $latee = trim($_POST['latee']);
    setcookie('latee', $latee, time() + 500, '/');

    $ice = trim($_POST['ice']);
    setcookie('ice', $ice, time() + 500, '/');

    header('Location: index.php');
    exit;
}
?>