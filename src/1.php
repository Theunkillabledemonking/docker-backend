<?php
    // hello 
    /**
     * 
     */
    # 은 추천 안한다.
    
    // 변수 선언 -> 동적 타이핑
    // 변수 자료형 -> 원시형(scalr), 참조형(compound)
    $foo = 1;
    $kin = true;
    $bar = 2.9;
    $pos = "hello";

    var_dump($bar, $pos, $kin, $foo);
    echo "<br>";
    function bar(array $arg) {
        foreach ($arg as $key => $value) {
            echo "{$key}: {$value}<br>";
        }
    }
    $hello = [1, 2, 3];

    bar($hello);
    var_dump($hello);

    // 변수에 저장 되고
    $a = function () {
        echo "helo";
    };

    // 매개 변수로 전달되고
    function foo($arg) {
        // 반환값 사용되면
        return $arg;
    }

    $kin = foo($a);

    $kin();

    var_dump($a);
    // 접근 범위
    // - 출생 - 소멸
    //   선언   전역(프로그램 종료), 지역(함수 종료)

    // php -> 함수 기반
    function pospos() {
        static $count = 0; // 힙 영역에 존재
        $count++; // 기존의 링크로 증감해줌.

        echo $count."<br>"; // oop로는 X
    }

    pospos();
    pospos();
    pospos();

    // 생명 주기

    if(isset($_GET['bar']))
        echo $_GET['bar']."<br>";
    
    // 상수
    define('NAME', "ycJung");
    echo NAME;

    const NAME1 = "test";
    echo NAME1;
?>