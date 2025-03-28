<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            height: 100vh;
            place-items: center;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $name = 'Dark Matter';
    $read = true;
    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    ?>
    <!-- <h1>You have read "<?php echo $name; ?>"</h1> -->
    <!-- <h1><?php echo $message ?></h1> -->
    <h1><?= $message ?></h1>
    <!--line 30 and 31 are equivalent  ;perferred to use line 31  -->


</body>

</html>