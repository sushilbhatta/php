<!-- operations in php -->

<!-- 1.Arthematic Operations(+ - * / %) -->
<?php
$x = 10;
$y = 3;
echo $x + $y; //addition
echo '<br>';
echo $x - $y;
echo '<br>';
echo $x * $y;
echo '<br>';
echo $x / $y;
echo '<br>';
echo $x % $y;
?>

<br>
<!-- 2.Assignment operations(= += -=) -->
<?php
$number = 5;
$number = $number + 3;
$number += 3;
echo "Assigned number is " . $number;

?>
<br>

<!-- 3. Concatnication Operator(.) -->
<?php
$greeting = "Hello";
$name = "Sushil";
echo $greeting . " " . $name
    ?>

<br>
<!-- 4. comparison Operator( == != < > <= >=) -->
<!-- return either true or false -->

<?php
$a = "5";
$b = 5;
echo $a > $b; //o/p 1 if true else nothing;
echo "<br>";
echo "is Equal " . ($a == $b); //if true 1 else nothing
?>
<br>
<!-- practice  -->
<?php
$num1 = 10;
$num2 = 4;
echo "sum is " . $num1 + $num2;
echo "<br>";
$reminder = $num1 % $num2;
echo "Reminder is " . $reminder;
echo "<br>";
echo $num1 . " is greater then " . $num2 . " : " . ($num1 > $num2);
?>

<!-- type casting -->
<?php
$input = "42";
$number = (int) $input; //casting to integer;
echo "Casted Number is" . $number; //op: 42 as integer
echo "<br>";

$text = '3.14abc';
echo "Casted FLoat is " . (float) $text; //op3.14(non numeric part is ignored)
echo "<br>";

$value = '-222';
echo "Casted Boolean is " . (bool) $value; //op : 1 as "1" is true

?>