<?php

// db 라는 주소를 가지는 mysql에 접속
// 인증 ID: root
// password: root
// 선택 DB: gs



    // 1번 작업: DBMS와의 연결 설정
    $db_conn = new mysqli("db", "root", "root", "gsc");

    // // 연결 결과 확인
    // if ($db_conn->errno) {
    //     // 연결 실패 시 -> 프로그램 종료
    //     exit();
    // }

    // 2번 작업 : sql 전송 
    $sql = "SELECT * FROM student";
    $result = $db_conn->query($sql);

    // mysqli_result() -> fetch_field(), fetch_fields()
    $field_info = $result->fetch_field();
    foreach ($field_info as $key => $filed) {
        echo $key . ":" . $filed ."<br>";
    }
    echo "<hr>";

    // 4번 작업: 연결 종료
    $db_conn->close();

?>