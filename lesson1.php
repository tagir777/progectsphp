<?php
$name = "Тагир";
$age = 38;

echo "Привет, $name!<br>";

if ($age < 18) {
    echo "Ты ещё слишком молод.";
} elseif ($age >= 18 && $age < 60) {
    echo "Ты в активном возрасте.";
} else {
    echo "Ты опытный и мудрый.";
}
?>
