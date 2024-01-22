<?php
function showType($value) {
    $Type = gettype($value);
    echo "Тип данних: $Type";
}


showType(null);
echo "<br>";
showType(13.23);
echo "<br>";
showType(1488);
echo "<br>";
showType(true);
echo "<br>";
showType($arr = [1, 2, 3]);
echo "<br>";
showType('Nastya');