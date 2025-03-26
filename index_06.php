<!-- loop -->
<!-- 1.while loop -->
<?php
$count = 1;
while ($count <= 5) {
    echo "Count :$count<br>";
    $count++;
}
?>

<!-- do while loop -->
<?php
$number = 0;
do {
    echo "Number:$number<br>";
    $number++;

} while ($number < 3);
?>
<!-- // for loop -->
<?php
for ($i = 0; $i <= 5; $i++) {
    echo "Iteration : $i<br>";
}
?>
<!-- Break and Continue -->
<!-- break:exists the loop entirely -->
<!-- continue:skips the rest of the current iteration and moves to the next one. -->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue; //skip 3 ie current iteration 
    }
    if ($i === 5) {
        break;
    }
    echo "Number : $i<br>";
}
?>
<!--  practice -->

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {

        echo "Even is:is $i<br>";
    } else {

        echo "Number is:is $i<br>";
    }
    if ($i === 8) {
        break;
    }

}
?>