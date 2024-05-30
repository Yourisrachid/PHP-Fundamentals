<?php

$family_members = ["Fatah", "Nissa", "Massi"];


echo "<h2>Family Members:</h2>";
echo "<pre>";
print_r($family_members);
echo "</pre>";


$favorite_recipes = ["Burgers", "Pizzas", "Lasagne", "Sushis"];


echo "<h2>Favorite Recipes:</h2>";
echo "<pre>";
print_r($favorite_recipes);
echo "</pre>";


$favorite_films = ["Oppenheimer", "Interstellar", "Green Book", "Inglorious Basterds"];


echo "<h2>Favorite Films:</h2>";
echo "<pre>";
print_r($favorite_films);
echo "</pre>";


$best_film_index = 2;
$best_film = $favorite_films[$best_film_index];
echo "<h2>My Favorite Film:</h2>";
echo "<p>$best_film</p>";


