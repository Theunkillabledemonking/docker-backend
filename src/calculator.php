<?php


$space = [57900000, 150000000, 230000000]; // 단위: km
$hikari = 299792458; // m/s

$reulst;
if(isset($_GET['mercury'])) {
    $result = round(($space[0] * 1000) / $hikari / 60);
    echo "Trave Time from Sun to mercury: " . number_format($result, 2) . "minutes";
} else if (isset($_GET['earth'])) {
    $result = round(($space[1] * 1000) / $hikari / 60);
    echo "Trave Time from Sun to earth: " . number_format($result, 2) . "minutes";
} else if (isset($_GET['mars'])) {
    $result = round(($space[2]* 1000) / $hikari / 60);
    echo "Trave Time from Sun to mars: " . number_format($result, 2) . "minutes";
}
?>