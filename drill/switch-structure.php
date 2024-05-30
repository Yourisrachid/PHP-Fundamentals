<?php

$message = "";

if (isset($_POST['grade'])) {
    $grade = intval($_POST['grade']);


    switch (true) {
        case ($grade < 4):
            $message = "This work is really bad. What a dumb kid!";
            break;
        case ($grade >= 5 && $grade <= 9):
            $message = "This is not sufficient. More studying is required.";
            break;
        case ($grade == 10):
            $message = "Barely enough!";
            break;
        case ($grade >= 11 && $grade <= 14):
            $message = "Not bad!";
            break;
        case ($grade >= 15 && $grade <= 18):
            $message = "Bravo, bravissimo!";
            break;
        case ($grade >= 19 && $grade <= 20):
            $message = "Too good to be true: confront the cheater!";
            break;
        default:
            $message = "Invalid grade.";
            break;
    }
}
?>

<form method="post" action="">
    <label for="grade">Grade:</label>
    <input type="number" name="grade" id="grade" min="0" max="20" required><br>
    <input type="submit" name="submit" value="Grade student">
</form>

<?php

if (!empty($message)) {
    echo "<p>$message</p>";
}
?>
