<?php
# Multi-dimensional Array for Practice 4-01

$RUBYjet = [
    [
        'id'=>1,
        'species'=>'Bulbasaur',
        'type1'=>'Grass', 
        'type2'=> 'Poison', 
        'ability'=>'Overgrow',
        'hp'=> 45,
        'attack'=>49,
        'defense'=> 49
    ],
    [
        'id'=>2, 
        'species'=>'Ivysaur', 
        'type1'=>'Grass',
        'type2'=> 'Poison', 
        'ability'=>'Overgrow',
        'hp' =>60,
        'attack'=>62,
        'defense'=>63
    ],
    [
        'id'=>3,
        'species'=> 'Venusaur',
        'type1'=> 'Grass',
        'type2'=>  'Poison',
        'ability'=> 'Overgrow', 
        'hp' =>80,
        'attack'=>82,
        'defense'=>83
    ],
    [
        'id'=> 4,
        'species'=> 'Charmander', 
        'type1'=>'Fire', 
        'type2'=> 'N/A',
        'ability'=>'Blaze',
        'hp' => 39,
        'attack'=>52,
        'defense'=>43
    ],
    [
        'id'=>5, 
        'species'=> 'Charmeleon', 
        'type1'=>'Fire', 
        'type2'=> 'N/A',
        'ability'=>'Blaze', 
        'hp' =>58,
        'attack'=>64,
        'defense'=>58
    ],
    [
        'id'=>6,
        'species'=>'Charizard', 
        'type1'=>'Fire',
        'type2'=>  'Flying', 
        'ability'=>'Blaze', 
        'hp' =>78,
        'attack'=>84,
        'defense'=>78
    ],
    [
        'id'=>7, 
        'species'=>'Squirtle',
        'type1'=> 'Water',
        'type2'=>  'N/A',
        'ability'=>'Torrent',
        'hp' =>44,
        'attack'=>48,
        'defense'=>65
    ],
    [
        'id'=>8,
        'species'=> 'Wartortle', 
        'type1'=> 'Water', 
        'type2'=> 'N/A',
        'ability'=>'Torrent', 
        'hp' =>59,
        'attack'=>63,
        'defense'=>80
    ],
    [
        'id'=> 9,
        'species'=>  'Blastoise', 
        'type1'=>'Water',
        'type2'=> 'N/A', 
        'ability'=>'Torrent',
        'hp' => 79,
        'attack'=>83,
        'defense'=>100
    ],
    [
        'id'=>10,
        'species'=>   'Caterpie',
        'type1'=>'Bug',
        'type2'=>'N/A', 
        'ability'=>'Shield Dust', 
        'hp' => 50, 
        'attack'=>20, 
        'defense'=>55
        ]
];
 

# Printing process
echo "</br><h2>Printed RUBYjet multi-dimensional associative array:</h2></br>";
# Printing the array named RUBYjet
print_r($RUBYjet);

echo "</br></br>";
# Echoing the total number of the array named RUBYjet
echo "<h2>RUBYjet array has a total of ".count($RUBYjet)." elements</h2>";

$favorite = $RUBYjet[5]['species'];

echo "</br></br>";
# Echoing the favorite species of mine
echo '<h2>My favorite pokemon species is '.$favorite.'</h2>';

$keys = array_keys($RUBYjet);

# prints all items in array of RUBYjet
/*
for ($i=0; $i < count($RUBYjet) ; $i++) { 
    echo "<br>".$keys[$i] . "{<br><br>";
    foreach($RUBYjet[$keys[$i]] as $pokemonTable => $pokemon){
        echo $pokemonTable.': '.$pokemon;
        echo '</br>';
    }
    echo "}<br>";
}
*/

for ($i=0; $i < count($RUBYjet) ; $i++) { 
    echo "<br>".$keys[$i] . "{<br><br>";
        # USING FOREACH LOOP PRINTING ALL OF THE SPECIES VALUES
foreach($RUBYjet[$keys[$i]] as $pokemonTag => $pokemonValue){
    if($pokemonTag == 'species'){
    echo $pokemonTag.': '.$pokemonValue;
    echo '</br>';
    }
}
echo "}<br>";
}
# Cheers!

?>