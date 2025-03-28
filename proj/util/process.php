<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if (empty($name) || empty($age)) {
        echo "Please fill out all fields.";
    } elseif (!is_numeric($age) || $age < 0) {
        echo "Age must be a Positive number.";
    } else {

        echo "Hello, $name";
        echo "You are $age year old.";
    }
}
// print_r($_POST)
// $_SERVER['Request_method] checks if form was submitted via POST
//$_POST is a superglobal array holding form data,keyed by name attributes
?>