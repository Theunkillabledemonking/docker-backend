<?php

if(isset($_COOKIE['username'])) {
    echo "<form action='update_cookie.php' method='post'>
        이름: <input type='text' name='username'> <br>
        라떼 수량: <input type='text' name='latee' value='$latee'> <br>
        아이스 아메리카노 수량: <input type='text' name='ice' value='$ice'> <br>
        <button type='submit'>수정 완료</button>
    </form>";

    echo "<a href='index.php'>뒤로가기</a>";
}
?>
