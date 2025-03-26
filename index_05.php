<!-- conditional Statement in php -->

<?php
$age = 13;
// if-else
// if ($age > 18) {
//     echo "You are an adult";
// } else {
//     echo "You are not adult yet.";
// }
//elseif
if ($age >= 18) {
    echo "You are an adult";
} elseif ($age >= 13) {
    echo "You are a tennager.";
} else {
    echo "you are a child";
}
?>
<br>

<!-- combining the Conditions -->
<!-- 
    &&(AND):both must be true
    ||(OR): At least one must be true;
    !(NOT): Reverse true to false and vice versa.
 -->
<?php
$age = 25;
$hasID = true;
if ($age >= 21 && $hasID) {
    echo 'You can enter the club.';

} else {
    echo "Sorry! no entry.";
}
?>

<br>
<!-- thuthy/Falsy recap
Php treats certain values as True or Fasle 
false:null,false,"","0", 0
truthy: Non zero numbers, non string strings, true -->
<?php
$name = "";
if ($name) {
    echo "Name exists!";

} else {
    echo "No name provided.";
}
?>
<br>
<!-- practice qns -->

<?php $score = 100;
if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80 && $score <= 89) {
    echo "Grade B";

} elseif ($score >= 70 && $score <= 79) {
    echo "Grade: C";

} elseif ($score >= 60 && $score <= 69) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}
if ($score === 100) {
    echo "Perfect Score";
}
?>