<?php

declare(strict_types=1);

namespace TradingPost\Domain;

/**
 * A player is like an user, but it's tied to a World of Warcraft player name in
 * the game, regardless of his/her account name or id.
 *
 * @author Adriano
 */
class Player extends Entity {

    private int $id;
    private String $name;

    public function getId(): int {
        return $this->id;
    }

    public function getName(): String {
        return $this->name;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(String $name): void {
        $this->name = $name;
    }

    public function setPropertiesFromObject(? Object $object): void {
        
    }

}
