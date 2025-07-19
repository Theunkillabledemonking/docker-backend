<? session_start();?>

<h2>로그인</h2>
<?php
if(isset($_SESSION['error'])) {
    echo"<p style='color: red'>".htmlspecialchars($_SESSION['error'])."</p>";
    unset($_SESSION['error']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./login_process.php" method="post"><br><br>
        <label>ID: </label><input type="text" name="username"><br><br>
        <label>PW: </label><input type="password" name="password"><br><br>
        <input type="submit" value="로그인">
        <a href="./register.php" type="button">회원가입</a>
    </form>
</body>
</html>