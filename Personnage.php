<?php
class Personnage {

    private int $winCombat = 0;

    public function __construct(
        private string $name,
        private int $health,
        private int $attack,
        private int $defense,
        private int $level = 1){}

    public function reduceHealth(int $health){
        $this->health -= $health;
    }

    public function attack(string $name){
        $enemyDefense = rand(0, 100);
        if ($this->attack > $enemyDefense) {
            $this->level++;
            $this->winCombat++;
        } else {
            $this->level--;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLevel(): int
    {
        return $this->level;
    }


    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function getDefense(int $defense): int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

}