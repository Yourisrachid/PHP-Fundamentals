<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types in PHP</title>
</head>
<body>
    <?php

        $firstName = "Youris";
        echo "<p>Hi! My name is $firstName.</p>";


        $age = 25;
        echo "<p>I am $age years old.</p>";


        $eyeColor = "Marron";
        echo "<p>My eyes are $eyeColor.</p>";


        $family = array("Fatah", "Massi", "Nissa");
        echo "<p>The first person in my family is $family[0].</p>";


        $isHungry = true;
        echo "<p>Am I hungry? " . ($isHungry ? "Yes" : "No") . ".</p>";
    ?>
</body>
</html>
