<?php
// cookie2.php

// 1) 쿠키 생성 요청 (A)
// 2) 쿠키 생성 (C)
// 3) 쿠키 전달 (C)
// 4) 쿠키 읽기 (A)

print_r($_COOKIE);
echo time() - 3600;

echo date(DATE_RFC822)."<br>";
echo $_COOKIE['session_cookie'];
?>