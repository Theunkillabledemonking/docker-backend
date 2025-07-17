<?php

// db 라는 주소를 가지는 mysql에 접속
// 인증 ID: root
// password: root
// 선택 DB: gs



try{ 
    // 1번 작업: DBMS와의 연결 설정
    $db_conn = new mysqli("db", "root", "root", "gsc");

    // 연결 결과 확인
    if ($db_conn->errno) {
        // 연결 실패 시 -> 프로그램 종료
        printf("Connect failed: $s\n", $db_conn->errno);
        exit();
    }

    // 2번 작업 : sql 전송 
    $result = $db_conn->query($sql);

    while($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo $key. ":" .$value."<br>";
        }
        
        // echo $row["std_id"] . "<br>";
        // echo $row["std_id"] . "<br>";
        // echo $row["std_id"] . "<br>";
        // echo $row["std_id"] . "<br>";

    }

    // 새로운 레코드를 생성

    // 2-1: SQL문 작성 -> 문자열을 이용하여 실행하고자 하는 SQL문 생성
    $std_id = $_POST['std_id'];

    
    $sql = "DELETE FROM student where id = '$std_id'";
    echo $sql;
    
    // 2-2: SQL문 전송 Client -> DBMS 서버
    // result 결과 값
    // 1) true
    // 2) Instance of mysqli_result class
    // 3) false

    $result = $db_conn->query($sql); 
    // 2번 작업 -->>
    if ($result) {
        echo "<hr><br>레코드 삭제 성공<br><hr>";
    } else {
        echo "<hr>><br>레코드 삭제 실패<br><hr>";
    }
    // mysqli_result($result);

    } catch (Throwable $e) {
        echo $e->getMessage();
    } finally {
        // 4번 작업: 연결 종료
        $mysqli->close();   
        echo "프로그램 종료";
}

?>