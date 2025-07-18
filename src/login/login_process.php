<?php
session_start();
require('./db_conf.php');
try {

    $db_conn = new mysqli(DB_INFO::DB_HOST, DB_INFO::DB_USER, DB_INFO::DB_PASS, DB_INFO::DB_NAME);

    $username_raw = trim($_POST['username']);
    $password_raw = trim($_POST['password']);

    if ($username_raw==='' && $password_raw==='') {
        $_SESSION['error'] = "아이디 및 비밀번호 입력해주세요";
        header("Location: login.php");
        exit;
    }

    $query = "SELECT * FROM user WHERE username = $username_raw";
    $result = $db_conn->query($query);

    if ($result && $row = $result->fetch_assoc()) {
        if(password_verify($password_raw, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");
            exit;
        } else {
            $_SESSION['error'] = "로그인 실패! 비밀번호 틀렸습니다.";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = '아이디가 존재하지 않음';
        header("Location: login.php");
        exit;
    }


} catch (Exception $er) {
    echo $er->getMessage();
} finally {
    $db_conn->close();
}
?>