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
    
    // 새로운 레코드를 생성

    // 2-1: SQL문 작성 -> 문자열을 이용하여 실행하고자 하는 SQL문 생성
    $std_id = $_POST['std_id'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $birth = $_POST['birth'];
    
    $sql = "INSERT INTO student(std_id, id, password, name, age, birth) 
            values('$std_id', '$id', '$password', '$name', $age, '$birth')";
    echo $sql;
    
    // 2-2: SQL문 전송 Client -> DBMS 서버
    // result 결과 값
    // 1) true
    // 2) Instance of mysqli_result class
    // 3) false

    $result = $db_conn->query($sql); 
    // 2번 작업 -->>

    // 3번 작업: 반환값 처리
    // function mysqli_result($res, $row, $field) {
    //     $i=0; 
    //     while($result =mysqli_fetch_array($_))
    // }
    if ($result) {
        echo "<hr><br>레코드 생성 성공<br><hr>";
    } else {
        echo "<hr>><br>레코드 생성 실패<br><hr>";
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