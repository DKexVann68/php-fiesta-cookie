<?php
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

function pokemon_defense($array_name, $limit_number){

    echo "<h3>Defense Limit Number: ".$limit_number."</h3>";

    $iterator = 0;
    foreach ($array_name['defense'] as $value)
    {
        if ($value >= $limit_number) {
            # code...
            echo ' '.$array_name['species'][$iterator];
            echo "<h4>Defense Value: ".$value."</h4>";
        }
        $iterator += 1;

    }

}


pokemon_defense($RUBYjet, 60);

# cheers! 

?>