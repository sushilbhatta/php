<!-- creating and accessing array -->
<?php
$fruits = ['apple', 'bananna', 'orange'];
echo $fruits[1]//bananaa
    ?>

<!-- Associative Array  -->
<?php
$person = [
    'name' => 'John',
    'age' => '25',
    'city' => 'New York'
];
echo $person['name']
    ?>

<!-- for each -->
<!-- 1.value-only Synatax -->
<?php
$fruits = ['apple', 'bananna', 'orange'];
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
?>
<!-- key-valued Syntax -->
<?php
$person = [
    'name' => 'John',
    'age' => '25',
    'city' => 'New York'
];
foreach ($person as $key => $value) {
    echo "$key:$value<br>";
}
?>

<!-- modifying arrays -->
<?php
$fruits = ['apple', 'banana'];
$fruits[] = 'grape';
$fruits[1] = 'mango';
print_r($fruits)
    ?>

<br>
<!-- practice -->
<?php
$student = [
    "name" => 'Sushil Bhatta',
    "grade" => 91,
    "subject" => "Math"
];
foreach ($student as $key => $value) {
    echo "$key:$value<br>";
    if ($key === 'grade' && $value >= 90) {
        echo "Excellent grade!<br>";
    }
}
?>