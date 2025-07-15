<?php

// read 
$name = $_SESSION['std_info']['name'];
echo "$name";

// delete
unset($_SESSION['std_info']['name']);

print_r($_SESSION);

// CREATE, update
$_SESSION['std_info'] = [
    "id" => 243008, "name" => "김성관"
];

if(isset($_SESSION['std_info'])) {
    $_SESSION['std_info'] = [
        "id" => 243008, "name" => "김성관"
    ];
} else {
    echo "정보 없음";
}
?>