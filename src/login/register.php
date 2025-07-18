<? session_start();?>
<?php if (isset($_SESSION['error']))
    echo "<p style='color:red'>".htmlspecialchars($_SESSION['error'])."</p>";
    unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>회원가입</h1>
    <form action="./register_process.php" method="post">
        <label>ID:</label><input type="text" name="username"><br><br>
        <label>PW:</label><input type="password" name="password"><br><br>
        <label>이름:</label><input type="text" name="name"><br><br>
        <input type="submit" value="회원가입">
        <a href="./login.php">돌아가기</a>
    </form>
</body>
</html>