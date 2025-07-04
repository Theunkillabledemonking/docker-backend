<?php

// Operator
/**
 * 1) 기능
 * 2) 우선순위
 * 3) 이항연산시 묵시적 형변환 규칙
 */

/**
 * 비교: ==, !=, >, <, >=, <=, ===
 */
$bar = 1;
$foo = 1.0;

// !==

if($bar === $foo) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";

$a = 1;
$b = 2;
print_r ($a <=>$b);
print_r (2 <=> 1);
print_r (1 <=> 2);

echo "<br>";


$my_array = [10, 1, 5, 90, 3];

// 소팅을 하기 위한 알고리즘 작성
usort($my_array, function($a, $b) {
    return $a <=> $b;
    // if ($a == $b) { 
    //     return 0;
    // } else {
    //     return $a < $b ? 1 : -1;
    // }
});
var_dump($my_array);

echo "<br>";

/**
 * 논리 : !, &&, ||
 *      and, or
 */

$bar = true && false;
var_dump($bar);


$foo = true and false;
var_dump($foo);

echo "<br>";

/**
 * 문자열 연산자: .
 */
echo "1" . "222ff";
$bar = "hello";
$bar .= "world!";
echo $bar;
echo "<br>";

/**
 * 에러 제어 연산자: @
 */
@include 'dfjsdlkfjksldfkj.php'; // 화면에 보이지 않게 한다.

/**
 * 실행 연산자: ``
 */
echo `ls -la`;
echo "<br>";
/**
 * 배열 연산자
 */
$bar = [1, 2, 3];
$foo = [1, 2 => 3, 1 => 2]; // 모든 원소의 key와 value 값을 비교함.
if($bar === $foo) { // 키 + 밸류와 순서까지 비교를 함
    echo "True";
} else {
    echo "false";
}
echo "<br>";
/**
 * Array -> 순서가 보장된 HasmMap
 * HashMap: Key <-> value pair
 * key => value
 */
$bar = [3 => 1, "mynum" => 2 , 4];
var_dump($bar);

echo 2 > 3 ? "hello" : "world";
echo "<br>";

/**
 * flow control
 */
$bar = [20, 10, 100];
foreach ($bar as $key => $value) {
    echo "bar[{$key}] : [$value] <br>";
};

// function
// hoisting O
// overloading X
// call-by-value & call-by-reference
// First-class- citizen -> lamda function
// -> closure function

require_once('myutil.php');
echo "<br>hello<br>";
sum(1, 2);
echo"<br>";

function bar(&$a) {
    $a[0] = 900;
}

$my_list = [3, 10, 100];

bar($my_list);

var_dump($my_list);
echo "<br>";

$foo = 2;
$bar = function() use ($foo) { // 상태값을 유지하기 위해 use를 사용
    
    echo "배고파<br>" . $foo;
};

$foo = 10;
$bar();

echo "<br>";
// php의 특징 함수의 이름으로 변수로 지정 가능
function sum2($a, $b) {
    echo $a + $b;
}
$test = "sum2";

$test(1, 2);

?>
