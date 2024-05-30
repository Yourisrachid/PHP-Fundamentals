<!DOCTYPE html>
<html>
<head>
    <title>Random Excuse Generator</title>
</head>
<body>
    <h2>Excuse Generator for School Absence</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="child_name">Name of the child:</label><br>
        <input type="text" id="child_name" name="child_name" required><br><br>
        
        <label for="gender">Gender of the child:</label><br>
        <input type="radio" id="boy" name="gender" value="boy" required>
        <label for="boy">Boy</label><br>
        <input type="radio" id="girl" name="gender" value="girl" required>
        <label for="girl">Girl</label><br><br>
        
        <label for="teacher_name">Name of the teacher:</label><br>
        <input type="text" id="teacher_name" name="teacher_name" required><br><br>
        
        <label for="reason">Reason for the absence:</label><br>
        <input type="radio" id="illness" name="reason" value="illness" required>
        <label for="illness">Illness</label><br>
        <input type="radio" id="pet_death" name="reason" value="pet_death" required>
        <label for="pet_death">Death of a pet</label><br>
        <input type="radio" id="activity" name="reason" value="activity" required>
        <label for="activity">Significant extra-curricular activity</label><br>
        <input type="radio" id="other" name="reason" value="other" required>
        <label for="other">Other</label><br><br>
        
        <input type="submit" value="Generate Apology">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $child_name = htmlspecialchars($_POST['child_name']);
        $gender = htmlspecialchars($_POST['gender']);
        $teacher_name = htmlspecialchars($_POST['teacher_name']);
        $reason = htmlspecialchars($_POST['reason']);

        $pronoun = $gender == "boy" ? "he" : "she";
        $date = date("F j, Y");

        switch ($reason) {
            case "illness":
                $excuse = "Dear $teacher_name, \n\nMy $gender, $child_name, was unable to attend school on $date due to illness. $pronoun was not feeling well and needed to rest at home. I hope $pronoun can catch up on the missed work. \n\nSincerely, \n$child_name's parents";
                break;
            case "pet_death":
                $excuse = "Dear $teacher_name, \n\nI am writing to inform you that $child_name was very upset due to the recent death of our beloved pet. As a result, $pronoun was not in the right frame of mind to attend school on $date. I appreciate your understanding during this difficult time. \n\nSincerely, \n$child_name's parents";
                break;
            case "activity":
                $excuse = "Dear $teacher_name, \n\n$child_name had to miss school on $date because $pronoun was participating in a significant extra-curricular activity. This event was important for $pronoun's personal development and we felt it was a valuable experience. I apologize for any inconvenience this may have caused. \n\nSincerely, \n$child_name's parents";
                break;
            case "other":
                $excuse = "Dear $teacher_name, \n\nI am writing to explain that $child_name was unable to attend school on $date due to an urgent matter that required our immediate attention. I hope this did not cause too much disruption. Thank you for your understanding. \n\nSincerely, \n$child_name's parents";
                break;
            default:
                $excuse = "Dear $teacher_name, \n\nI apologize for $child_name's absence from school on $date. Unfortunately, $pronoun was unable to attend due to unforeseen circumstances. Thank you for your understanding. \n\nSincerely, \n$child_name's parents";
                break;
        }

        echo "<h3>Generated Excuse:</h3>";
        echo "<pre>$excuse</pre>";
    }
    ?>
</body>
</html>
