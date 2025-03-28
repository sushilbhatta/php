<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>

    <h1>Recommanded Books</h1>

    <?php
    $books = ["Do Android Dream of Electric Sheep", "The Langoliers", "Hail mary"]
        ?>
    <!-- <?php foreach ($books as $book) {
        echo "<li> $book </li>";
    } ?> -->

    <!-- Alternative way -->

    <!-- <?php foreach ($books as $book): ?>
        <li><?= $book; ?></li>
    <?php endforeach ?> -->

    <!-- <?php
    $name = "sushil Kumar Bhatta"; //stores name as string;
    $message = "I am learning Php!"; //store the string
    echo $name; //o/p whatever is stroed in $name
    echo '<br>';
    echo $message;
    ?> -->
    <!-- data types -->
    <!-- <?php
    $age = 25; //Integer
    $height = 5.9; //Float
    $is_student = true; //boolean
    $name = 'Sushil Kumar Bhatta';
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Is a student? " . $is_student . "<br>";
    ?> -->
    <!-- practice task -->
    <?php
    $first_name = 'Sushil';
    $age = 15;
    $favoriteHobby = 'Playing football';
    echo "My name is " . $first_name . ", " . "I am" . $age . " year old, and i love " . $favoriteHobby;
    ?>
    </ul>
</body>

</html>