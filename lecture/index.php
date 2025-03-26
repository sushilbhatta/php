<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ],
    ];

    // function filter($items, $fn)
    // {
    //     $filteredBooks = [];
    
    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             $filteredBooks[] = $item;
    //         }
    //     }
    
    //     return $filteredBooks;
    // }
    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 2000;
    })
        ?>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- homework -->
    <!-- 1.Write a function processNumber that takes a number and a callback function as arguments. The callback should process the number (e.g., double it). -->
    <?php
    function greet($number)
    {
        return $number * 2;
    }
    function processNumber($number, $callback)
    {
        return $callback($number);
    }
    $result = processNumber(8, callback: 'greet');

    echo $result;
    ?>

    <?php
    function formalGreeting($name)
    {
        return "Greetings, $name";
    }

    function casualGreeting($name)
    {
        return "Hey $name,whats up";
    }

    function greetPerson($name, $callback)
    {
        return $callback($name);
    }

    // Test the function
    echo greetPerson("Alice", "formalGreeting") . "\n";
    echo "<br>";
    echo greetPerson("Bob", "casualGreeting");
    ?>

    <?php
    function addNumbers($a, $b)
    {
        return $a + $b;
    }
    function multiplyNumbers($a, $b)
    {
        return $a * $b;
    }

    function calculate($a, $b, $cb)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $cb($a, $b);
        } else {
            echo "Invalid number";
        }
    }
    echo calculate("ab222", 30, "multiplyNumbers")
        ?>

</body>

</html>