<?php
// Create an array $web_development containing 'frontend' and 'backend' keys with empty arrays

$web_development = array(
    'frontend' => array(),
    'backend' => array()
);


echo '<pre>';
print_r($web_development);
echo '</pre>';


$web_development['frontend'][] = 'xhtml';


$web_development['backend'][] = 'Ruby on Rails';


$web_development['frontend'][] = 'CSS';


$web_development['frontend'][] = 'Flash';


$web_development['frontend'][] = 'JavaScript';


echo '<pre>';
print_r($web_development);
echo '</pre>';


$index = array_search('xhtml', $web_development['frontend']);
if ($index !== false) {
    $web_development['frontend'][$index] = 'html';
}


echo '<pre>';
print_r($web_development);
echo '</pre>';


$index = array_search('Flash', $web_development['frontend']);
if ($index !== false) {
    unset($web_development['frontend'][$index]);

    $web_development['frontend'] = array_values($web_development['frontend']);
}


echo '<pre>';
print_r($web_development);
echo '</pre>';