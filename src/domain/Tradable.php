<?php

declare(strict_types=1);

namespace TradingPost\Domain;

/**
 * A tradable object is anything that can be sold or bought.
 * 
 * @author Adriano
 */
class Tradable extends Entity {

    private int $id = 0;
    private string $name = '';
    
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setName(String $name): void {
        $this->name = $name;
    }

    public function getName(): String {
        return $this->name;
    }

    public function setPropertiesFromObject(? Object $object): void {
        if(isset($object->tradableId)) {
            $this->id = (int) $object->tradableId;
        }
        
        if(isset($object->tradableName)) {
            $this->name = $object->tradableName;
        }
    }

}
