<?php

function myFuncStringAdd(string $a, string $b): string
{
    $c = "{$a}{$b}";
    return $c;
}
echo myFuncStringAdd("テスト", "1テスト");