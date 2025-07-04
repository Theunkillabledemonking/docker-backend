<?php

$ary = [];
$n = 5;
for ($i = 0; $i < $n; $i++) {
    $num = $_GET[$i + 1];
    $ary[$i] = $num;
}

echo "입력 값 : ";

$sum = array_sum($ary);
$avg = $sum / $n;
global $sam_var;

foreach ($ary as $value) {
    echo "$value ";
    $sam_var += (pow(($value - $avg), 2));
};


echo "<br>평균: ".$avg . "<br>";

$sam_var /= ($n - 1);
$san_dev = sqrt($sam_var);
echo"표본분산: ". number_format($sam_var, 2) . "<br>";

echo "표본표준편차: " . number_format($san_dev, 2);



//echo pow();

// echo sqrt();
?>