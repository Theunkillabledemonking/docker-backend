<?php
session_start();
if(isset($_POST['id'])) {

    $_SESSION['user_name'] = [
        'id' => $_POST['id'], 'latte' => $_POST['latte'], 'ice' => $_POST['ice']
    ];

    header('Location: order_form.php');
    exit;
} {
    error_log('Post data not received');
}
?>