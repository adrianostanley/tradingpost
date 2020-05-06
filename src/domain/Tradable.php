<?php

declare(strict_types=1);

namespace TradingPost\Domain;

/**
 * A tradable object is anything that can be sold or bought.
 * 
 * @author Adriano
 */
class Tradable extends Entity {

    private Category $category;

    public function setCategory(Category $category): void {
        $this->category = $category;
    }

    public function getCategory(): Category {
        return $this->category;
    }

    public function getCategoryName(): String {
        return isset($this->category) ? $this->category->getName() : 'Not available';
    }

    public function setPropertiesFromObject(Object $object): void {
        
    }

}
