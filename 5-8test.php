<?php

$array = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];

foreach($array as $value) {
    echo "{$value} \n";
}

$colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];

foreach($colors as $k => $v) {
    echo "{$k} -> {$v} \n";
}