<?php
session_start();
if(isset($_SESSION['user_name'])) {
    print_r($_SESSION);
    $name = $_SESSION['user_name']['id'];
    $latte = $_SESSION['user_name']['latte'];
    $ice = $_SESSION['user_name']['ice'];
    echo "<h2>음료  주문</h2>";
    echo "<br><strong>$name</strong> 님의 주문 내용";
    echo "<br><li>라떼: $latte 잔</li>";
    echo "<li>아이스아메리카노: $ice 잔</li>";

    echo "<a href='order_edit.php'>수정</a>";
    echo "<a href='clear_session.php'>세션 초기화</a>";
    
} else {
    echo "<h2>음료  주문</h2>";
    echo "<form method='post' action='set_session.php'>
        이름: <input type='text' name='id'> <br>

        라떼 수량: <input type='text' name='latte'> <br>

        아이스 아메리카노 수량: <input type='text' name='ice'> <br>

        <input type='submit' value='submit'>
    </form>";
}

?>