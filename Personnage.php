<?php
class Personnage {

    private int $winCombat = 0;
    private int $loseCombat = 0;
    private const int MAX_LEVEL = 100;
    private const int MIN_LEVEL = 1;

    public function getLoseCombat(): int
    {
        return $this->loseCombat;
    }

    public function __construct(
        private string $name,
        private int $health,
        private int $attack,
        private int $defense,
        private int $level = self::MIN_LEVEL){}


    public function attack(Personnage $enemy): void {
        if ($this->attack > $enemy->getDefense()) {
            $enemy->setHealth($enemy->getHealth() - ($this->attack - $enemy->getDefense()) );
            $this->increaseLevel();
            $enemy->decreaseLevel();
            $this->winCombat++;
            $enemy->loseCombat++;
        } else {
            $this->setHealth($this->getHealth() - ($enemy->getDefense() - $this->getAttack()));
            $this->decreaseLevel();
            $enemy->increaseLevel();
            $enemy->winCombat++;
            $this->loseCombat++;
        }
    }

    public function getWinCombat(): int
    {
        return $this->winCombat;
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
        $this->health = $health < 0 ? 0 : $health;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

    private function increaseLevel(): void {
        $this->level++;
        if ($this->level > self::MAX_LEVEL) {
            $this->level = self::MAX_LEVEL;
        }
    }

    private function decreaseLevel(): void {
        $this->level--;
        if ($this->level < self::MIN_LEVEL) {
            $this->level = self::MIN_LEVEL;
        }
    }
}