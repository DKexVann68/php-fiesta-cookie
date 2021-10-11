<?php
$RUBYjet = array(
    'id' => array(1,2,3,4,5,6,7,8,9,10),
    'species' =>array('Bulbasaur','Ivysaur','Venusaur','Charmander','Charmeleon','Charizard','Squirtle', 'Wartotle','Blastoise','Caterpie'),
    'type1' => array('Grass','Grass','Grass','Fire', 'Fire', 'Fire', 'Water','Water','Water','Bug'),
    'type2'=>array('Poison','Poison','Poison','N/A','N/A','Flying','N/A','N/A','N/A','N/A'),
    'ability'=>array('Overgrow','Overgrow','Overgrow','Blaze','Blaze','Blaze','Torrent', 'Torrent', 'Torrent', 'Shield Dust'),
    'hp'=>array(45,60,80,39,58,78,44,59,79,50),
    'attack'=>array(49,62,82,52,64,84,48,63,83,20),
    'defense'=>array(49,63,83,43,58,78,65,80,100,55)
);


function hp_sum(){
    $total_hp = 0;
    global $RUBYjet;
    foreach ($RUBYjet['hp'] as $value)
    {
     $total_hp += $value;
    }
    return $total_hp;

}

    echo "<h1>The sum of the column hp is ".hp_sum()."</h2>";

    function ave_attack(){
        $total_attack = 0.0;
        global $RUBYjet;
        foreach ($RUBYjet['attack'] as $value)
        {
         $total_attack += $value;
        }
        return $total_attack / count($RUBYjet['attack']);
    }

    echo "<h1>The average of the column attack is ".ave_attack()."</h2>";


    # Cheers!
?>