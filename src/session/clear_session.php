<?php
session_start();

$_SESSION = [];

session_destroy();

header('Location: order_form.php');
?>