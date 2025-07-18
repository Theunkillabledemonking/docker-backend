<?php
    
    session_start();
    require('./db_conf.php');
    mysqli_report(MYSQLI_REPORT_STRICT);
    $db_conn = null;
    try{
        $db_conn = new mysqli(DB_INFO::DB_HOST, DB_INFO::DB_USER, DB_INFO::DB_PASS, DB_INFO::DB_NAME);

        $username_raw = trim($_POST['username']);
        $password_raw = trim($_POST['password']);
        $name_raw = trim($_POST['name']);
        
        if ($username_raw === '' && $password_raw === '' && $name_raw === '') {
            $_SESSION['error'] = "입력을 해주세요!";
            header( "Location: register.php");
            exit;
        }
        
        $password_hash = password_hash($password_raw, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, password, name) VALUES ('$username_raw', '$password_hash', '$name_raw')";

        if($db_conn->query($sql)) {

            header("Location: login.php");
            exit;
        } else {
            $_SESSION['error'] = "회원가입 실패";
            header('Location: register.php');
            exit;
        }


    } catch(Exception $ex) {
        error_log("DB ERROR".$ex->getMessage());
    } finally {
        if ($db_conn instanceof mysqli) {
            $db_conn->close();
        }
    }
?>