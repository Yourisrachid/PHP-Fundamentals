<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronouns) {

    $pronouns = "$pronouns code";

    if ($pronouns == 'He/She') {
        $pronouns == "$pronouns codes";
    }

    echo "$pronouns <br>";
}


// ---------------------


$amount  = 1;

/*while ($amount <= 120) {

    echo "$amount <br>";
    $amount ++;
}
*/

for ($amount = 1; $amount <= 120; $amount++) {

    echo "$amount <br>";
}




$name = ['nameA', 'nameB', 'nameC', 'nameD', 'nameE', 'nameF', 'nameG', 'nameH'];

forEach ($name as $name) {
    echo ucfirst("$name<br>");
}


$countries = array(
    'BE' => 'Belgium',
    'FR' => 'France',
    'SWI' => 'Switzerland',
    'SP' => 'Spain',
    'PO' => 'Portugal',
    'EN' => 'England',
    'GER' => 'Germany',
    'NOR' => 'Norvegia',
    'IT' => 'Italia',
    'SWE' => 'Sweden',
    'AUS' => 'Austria'
);

echo "<select>";

foreach ($countries as $key => $value) {
    echo "<option value ='$value'default> $key </option> $value)";

}

echo "</select>";




