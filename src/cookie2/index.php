<?php
echo "<h1>음료 주문</h1>";
if (isset($_COOKIE['username'])) {
    $username = htmlspecialchars($_COOKIE['username']);
    $latee = htmlspecialchars($_COOKIE['latee']);
    $ice = htmlspecialchars($_COOKIE['ice']);


    echo "$username 님의 주문 내용";
    echo "<li>라떼 수량: $latee 잔</li>";
    echo "<li>아이스 아메리카노 수량:: $ice 잔</li>";

    echo"<a href='edit_order.php'>주문 수정</a><br>";
    echo"<a href='delete_cookie.php'>주문 초기화</a>";
} else {
    echo "<form action='set_cookie.php' method='post'>
        이름: <input type='text' name='username'> <br>
        라떼 수량: <input type='text' name='latee'> <br>
        아이스 아메리카노 수량: <input type='text' name='ice'> <br>
        <button type='submit'>주문하기</button>
    </form>";
}
?>