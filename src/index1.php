<?php
// session_start();


if(session_id() !== '') {
    echo "세션 시작 중";
}

if(session_status() == PHP_SESSION_ACTIVE){
    echo "<br>세션 활동 중";
}

// http 리퀘스트가 올때 session id가 오면 배열을 찾아 세션을 자동적으로 매핑을 한다
print_r($_SESSION);
?>