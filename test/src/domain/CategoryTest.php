<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TradingPost\Domain\Category;

final class CategoryTest extends TestCase {

    public function testSetPropertiesFromObject() : void {
        $categoryObject = (object) ['categoryId' => '1', 'categoryName' => 'Consumable'];
        
        $category = new Category();
        $category->setPropertiesFromObject($categoryObject);
        
        $this->assertSame(1, $category->getId());
        $this->assertSame('Consumable', $category->getName());
    }
}
