<?php

$image_src = "";

if (isset($_POST['creature'])) {
    $creature = $_POST['creature'];

    
    $image_src = ($creature == "human") ? "human gif" :
                (($creature == "cat") ? "cat gif" :
                (($creature == "unicorn") ? "unicorn gif" : ""));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unicorn</title>
</head>
<body>

    <form method="post" action="">
        <label for="creature">Are you a human, a cat or a unicorn?</label><br>
        <input type="radio" name="creature" value="human" id="human" required> <label for="human">Human</label><br>
        <input type="radio" name="creature" value="cat" id="cat" required> <label for="cat">Cat</label><br>
        <input type="radio" name="creature" value="unicorn" id="unicorn" required> <label for="unicorn">Unicorn</label><br>
        <input type="submit" value="Submit">
    </form>


    <?php if (!empty($image_src)): ?>
        <img src="<?php echo $image_src; ?>" alt="Creature GIF">
    <?php endif; ?>
</body>
</html>
