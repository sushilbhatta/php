<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $score = $_POST['score'];
    echo "$username,$score";
    if (empty($username) || empty($score)) {
        echo "Please fill out all fields.";
    } elseif ((!is_numeric($score) || $score < 0) || ($score > 100)) {
        echo "Score should be between 0 and 100";
    } else {
        if ($score >= 90 && $score <= 100) {
            $grade = 'A';
        } elseif ($score >= 80 && $score < 90) {
            $grade = 'B';
        } elseif ($score >= 70 && $score < 80) {
            $grade = 'C';
        } elseif ($score >= 60 && $score < 70) {
            $grade = 'D';
        } elseif ($score < 60) {
            $grade = 'F';
        }
        echo "$username,Your grade is <strong> $grade</strong>";
    }
}
?>