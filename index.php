<?php

require_once 'Personnage.php';

$merlin = new Personnage('Merlin', 100, 20, 70);
$arthur = new Personnage("Arthur", 100, 80, 10, 100);

echo $merlin->getHealth().PHP_EOL;
echo $arthur->getHealth().PHP_EOL;

echo "Merlin attaque Arthur".PHP_EOL;
$merlin->attack($arthur);

echo $arthur->getHealth().PHP_EOL;

echo "Nouveau niveau de Merlin : " . $merlin->getLevel() . PHP_EOL;
echo "Combat gagné par Merlin : " . $merlin->getWinCombat() . PHP_EOL;
echo "Nouveau niveau de Arthur : " . $arthur->getLevel() . PHP_EOL;
echo "Combat perdu par Arthur : " . $arthur->getLoseCombat() . PHP_EOL;