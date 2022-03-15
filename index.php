<?php
// KISS: keep it simple silly

echo "hello";

$var = 'abdo';

function changeName(&$var) {
    $var = 'Mahmood';
}

changeName($var);

echo $var;
