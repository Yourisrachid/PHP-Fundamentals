<?php

$me = array(
    'age' => 25,
    'firstname' => 'Youris',
    'lastname' => 'Rachid',
    'favourite_movies' => array('Interstellar', 'Opennheimer', 'Inglorious Basterds')
);


$me['hobbies'] = array('Coding', 'VGames', 'Buchcraft');

// Create the $mother array
$mother = array(
    'age' => 58,
    'firstname' => 'F',
    'lastname' => 'M',
    'favourite_movies' => array('The Sound of Music', 'Gone with the Wind', 'Casablanca'),
    'hobbies' => array('Gardening', 'Painting', 'Knitting')
);


$me['mother'] = $mother;


echo '<pre>';
print_r($me);
echo '</pre>';
