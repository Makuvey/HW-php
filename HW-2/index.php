<?php
function showType($value) {
    $type = gettype($value);
    return "Тип данних: $type";
}

$user = ["name" => "Nastya", "age" => 45, "city" => "New York"]

echo showType(null);
echo "<br>";
echo showType(13.23);
echo "<br>";
echo showType(1488);
echo "<br>";
echo showType(true);
echo "<br>";
echo showType([1, 2, 3]);
echo "<br>";
echo showType('Nastya');
echo "<br>";
echo showType($user);
echo "<br>";
