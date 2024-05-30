<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
?>


<?php
// 1.1 Clean your room Exercise 

$room_is_filthy = true;

function cleanup_room() {

    echo "Cleaning the room...";
}


if ($room_is_filthy) {
    echo "Yuk, Room is dirty : let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}
?>



<?php
// 1.2 Clean your room Exercise (improved ))


$possible_states = [
    "disgusting",
    "dirty",
    "messy",
    "clean",
    "immaculate"
];

$room_filthiness = $possible_states[0]; 

if ($room_filthiness == "disgusting") {
    echo "Yuk, Room is Disgusting! Let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
} else if ($room_filthiness == "dirty") {
    echo "Yuk, Room is dirty : let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
} else if ($room_filthiness == "messy") {
    echo "Room is messy, let's tidy it up a bit.";
    cleanup_room();
    echo "<br>Room is now tidy!";
} else if ($room_filthiness == "clean") {
    echo "The room is clean, just a little dusting required.";
    cleanup_room();
    echo "<br>Room is now immaculate!";
} else {
    echo "<br>Nothing to do, room is immaculate.";
}
?>



<?php
// 2. "Different greetings according to time" Exercise


$currentHour = date('H');


if ($currentHour >= 5 && $currentHour <= 9) {
    echo "Good morning!";
} elseif ($currentHour >= 9 && $currentHour <= 12) {
    echo "Good day!";
} elseif ($currentHour >= 12 && $currentHour <= 16) {
    echo "Good afternoon!";
} elseif ($currentHour >= 16 && $currentHour <= 21) {
    echo "Good evening!";
} else {
    echo "Good night!";
}
?>



<?php
// 3. "Different greetings according to age and gender" Exercise


if (isset($_GET['age']) && isset($_GET['gender'])) {
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];


    $prefix = ($gender == 'Woman') ? 'Miss' : 'Mister';


    if ($age < 12) {
        $message = "Hello $prefix Kiddo!";
    } elseif ($age >= 12 && $age < 18) {
        $message = "Hello $prefix Teen!";
    } elseif ($age >= 18 && $age <= 115) {
        $message = "Hello $prefix Adult!";
    } else {
        $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }


    echo "<p>$message</p>";
}
?>

<form method="get" action="">
    <label for="age">Please type your age :</label>
    <input type="text" name="age" id="age"><br>
    
    <label for="gender">Man</label>
    <input type="radio" name="gender" value="Man" checked>
    
    <label for="gender">Woman</label>
    <input type="radio" name="gender" value="Woman">
    
    <input type="submit" name="submit" value="Greet me now">
</form>




<?php
// 5. "Different greetings according to age, gender, and mother tongue" Exercise


if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];
    $english = $_GET['english'];


    $prefix = ($gender == 'Woman') ? 'Miss' : 'Mister';


    if ($age < 12) {
        if ($english == 'yes') {
            $message = "Hello $prefix!";
        } else {
            $message = "Aloha $prefix!";
        }
    } else {
        if ($english == 'yes') {
            if ($age >= 12 && $age < 18) {
                $message = "Hello $prefix Teen!";
            } elseif ($age >= 18 && $age <= 115) {
                $message = "Hello $prefix Adult!";
            } else {
                $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
            }
        } else {
            if ($age >= 12 && $age < 18) {
                $message = "Aloha $prefix Teen!";
            } elseif ($age >= 18 && $age <= 115) {
                $message = "Aloha $prefix Adult!";
            } else {
                $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
            }
        }
    }






    echo "<p>$message</p>";
}
?>

<form method="get" action="">
    <label for="age">Please type your age :</label>
    <input type="text" name="age" id="age"><br>
    
    <label for="gender">Man</label>
    <input type="radio" name="gender" value="Man" checked>
    
    <label for="gender">Woman</label>
    <input type="radio" name="gender" value="Woman"><br>
    
    <label for="english">Do you speak English?</label>
    <label for="english">Yes</label>
    <input type="radio" name="english" value="yes" checked>
    
    <label for="english">No</label>
    <input type="radio" name="english" value="no">
    
    <input type="submit" name="submit" value="Greet me now">
</form>




<?php

$message = "Sorry, you don't fit the criteria.";

if (isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['name'])) {
    $age = intval($_POST['age']);
    $gender = $_POST['gender'];
    $name = $_POST['name'];


    if ($gender == 'Woman' && $age >= 21 && $age <= 40) {
        $message = "Welcome to the team, $name!";
    }
}


echo "<p>$message</p>";
?>

<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>
    
    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required><br>
    
    <label for="gender">Gender:</label>
    <label for="gender">Woman</label>
    <input type="radio" name="gender" value="Woman" required>
    
    <label for="gender">Man</label>
    <input type="radio" name="gender" value="Man" required><br>
    
    <input type="submit" name="submit" value="Join the team">
</form>



<?php

$message = "";

if (isset($_POST['grade'])) {
    $grade = intval($_POST['grade']);


    if ($grade < 4) {
        $message = "This work is really bad. What a dumb kid!";
    } elseif ($grade >= 5 && $grade <= 9) {
        $message = "This is not sufficient. More studying is required.";
    } elseif ($grade == 10) {
        $message = "Barely enough!";
    } elseif ($grade >= 11 && $grade <= 14) {
        $message = "Not bad!";
    } elseif ($grade >= 15 && $grade <= 18) {
        $message = "Bravo, bravissimo!";
    } elseif ($grade >= 19 && $grade <= 20) {
        $message = "Too good to be true: confront the cheater!";
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
