<?php

$a = 0;
$b = 1;

echo $a . "\n";

while ($a <= 10000) {
    echo $b . "\n";

    $next = $a + $b;

    $a = $b;
    $b = $next;
}