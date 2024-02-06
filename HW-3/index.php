<?php
// 3.1 HW
$arr = [1, 22, 333, 4444, 5555];

function allNumbers($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}

$result = allNumbers($arr);


// 3.2 HW
function showFullName($array) {
    return $array["firstName"] . " " . $array["lastName"];
}

$arrAcc = [
   "firstName" => "John",
   "lastName" => "Dryha"
];


$result = showFullName($arrAcc);
echo $result;