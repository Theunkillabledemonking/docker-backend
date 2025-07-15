<?php
session_start();
if(isset($_SESSION['user_name'])) {
    $name = $_SESSION['user_name']['id'];
    $latte = $_SESSION['user_name']['latte'];
    $ice = $_SESSION['user_name']['ice'];

    echo "<form method='post' action='set_session.php'>
        이름: <input type='text' name='id' value=$name> <br>

        라떼 수량: <input type='text' name='latte' value=$latte> <br>

        아이스 아메리카노 수량: <input type='text' name='ice' value=$ice> <br>

        <input type='submit' value='submit'> 제출
    </form>";
}

?>