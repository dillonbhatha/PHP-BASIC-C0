<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 10;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
}

if($test1 != $test2) {
    echo "ongelijk";
}

if($test1 === $test2) {
    echo "identiek";
}

if($test1 > $test2) {
    echo "groter";
}

if($test1 < $test2) {
    echo "kleiner";
}

if($test1 >= $test2) {
    echo "groter of gelijk aan";
}

if($test1 <= $test2) {
    echo "kleiner of gelijk aan";
}
?>

</body>
</html>