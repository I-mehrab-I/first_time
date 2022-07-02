<?php
$b = 10;

$a = function() use($b)
{
    echo $b;
    return "hello";
};

echo $a();


?>