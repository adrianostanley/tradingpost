<?php

declare(strict_types=1);

namespace TradingPost\Domain;

/**
 *
 * @author Adriano
 */
class Category extends Entity {

    private int $id;
    private String $name;

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

    public function setPropertiesFromObject(Object $object): void {
        $this->id = isset($object->categoryId) ? (int) $object->categoryId : null;
        $this->name = $object->categoryName ?? null;
    }

}
