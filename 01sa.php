<?php
# Multi-dimensional Array for Practice 4-01

$RUBYjet = array(
    'id' => array(1,2,3,4,5,6,7,8,9,10),
    'species' =>array('Bulbasaur','Ivysaur','Venusaur','Charmander','Charmeleon','Charizard','Squirtle', 'Wartortle','Blastoise','Caterpie'),
    'type1' => array('Grass','Grass','Grass','Fire', 'Fire', 'Fire', 'Water','Water','Water','Bug'),
    'type2'=>array('Poison','Poison','Poison','N/A','N/A','Flying','N/A','N/A','N/A','N/A'),
    'ability'=>array('Overgrow','Overgrow','Overgrow','Blaze','Blaze','Blaze','Torrent', 'Torrent', 'Torrent', 'Shield Dust'),
    'hp'=>array(45,60,80,39,58,78,44,59,79,50),
    'attack'=>array(49,62,82,52,64,84,48,63,83,20),
    'defense'=>array(49,63,83,43,58,78,65,80,100,55)
);

 

# Printing process
echo "</br><h2>Printed RUBYjet multi-dimensional array:</h2></br>";
# Printing the array named RUBYjet
print_r($RUBYjet);

echo "</br></br>";
# Echoing the total number of the array named RUBYjet
echo "<h2>RUBYjet array has a total of ".count($RUBYjet)." elements</h2>";

$favorite = $RUBYjet['species'][5];

echo "</br></br>";
# Echoing the favorite species of mine
echo '<h2>My favorite pokemon species is '.$favorite.'</h2>';



echo "<h2>All Species:</h2>";
# Using foreach loop this prints all of the species 
foreach($RUBYjet['species'] as $pokemonTable){
    echo $pokemonTable;
    echo '</br>';
}

# Cheers!

?>