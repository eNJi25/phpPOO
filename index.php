<?php
/*
function createPersonnage(string $name, int $level, int $health, int $attack, int $defense){
    $name = ucfirst($name);
    $level = $level > 100 ? 100 : $level;
    $health = $health > 100 ? 100 : $health;

    return [
        'name' => $name,
        'level' => $level,
        'health' => $health,
        'attack' => $attack,
        'defense' => $defense
    ];
}

function reduceHealth(array &$personnage,int $health){
    $personnage['health'] -= $health;
    return $personnage;
}

$personnage = createPersonnage('Merlin', 10, 100, 2, 80);

echo $personnage['name'].PHP_EOL;
echo $personnage['health'].PHP_EOL;

reduceHealth($personnage,10);

echo $personnage['health'].PHP_EOL;
*/

// OBJECT

require_once 'Personnage.php';

$merlin = new Personnage('Merlin', 100, 20, 80);
$arthur = new Personnage("Arthur", 100, 80, 20, 100);

//$merlin->attack("Arthur");
echo $merlin->getLevel().PHP_EOL;
echo $arthur->getLevel().PHP_EOL;