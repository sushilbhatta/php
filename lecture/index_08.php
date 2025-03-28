<?php
function sayHello($name)
{
    echo "Hello " . $name;
}
sayHello('sushil');

// returning value
function add($a, $b)
{
    return $a + $b;
}
$result = add(5, 6);
echo "<br> sum is " . $result
    ?>